<?php

use AcyMailing\Classes\SegmentClass;
use AcyMailing\Controllers\SegmentsController;
use AcyMailing\Helpers\AutomationHelper;

trait SegmentAutomationFilters
{
    public function onAcymDeclareFilters(&$filters)
    {
        $segments = (new SegmentClass())->getAll();
        $selectOptionSegment = [];
        foreach ($segments as $oneSegment) {
            $selectOptionSegment[] = acym_selectOption($oneSegment->id, $oneSegment->name);
        }

        $filters['acy_segment'] = new stdClass();
        $filters['acy_segment']->name = acym_translation('ACYM_ACYMAILING_SEGMENT');
        $filters['acy_segment']->option = '<div class="intext_select_automation cell">';
        $filters['acy_segment']->option .= acym_select(
            $selectOptionSegment,
            'acym_action[filters][__numor__][__numand__][acy_segment][id]',
            null,
            [
                'class' => 'intext_select_automation acym__select',
            ]
        );
        $filters['acy_segment']->option .= '</div>';
    }

    public function onAcymProcessFilterCount_acy_segment(&$query, &$options, &$num)
    {
        $oneSegment = (new SegmentClass())->getOneById($options['id']);
        $countUsers = (new SegmentsController())->countSegmentByParams((array)$oneSegment, []);

        $this->onAcymProcessFilter_acy_segment($query, $options, $num);

        return acym_translationSprintf('ACYM_SELECTED_USERS', $countUsers);
    }

    public function onAcymProcessFilter_acy_segment(&$query, &$options, $num)
    {
        $oneSegment = (new SegmentClass())->getOneById($options['id']);

        $automationHelpers = [];
        if (!empty($oneSegment) && !empty($oneSegment->filters)) {
            foreach ($oneSegment->filters as $or => $orValues) {
                if (empty($orValues)) continue;
                $automationHelpers[$or] = new AutomationHelper();
                foreach ($orValues as $and => $andValues) {
                    $and = intval($and);
                    foreach ($andValues as $filterName => $filterOptions) {
                        acym_trigger('onAcymProcessFilter_'.$filterName, [&$automationHelpers[$or], &$filterOptions, $and.'_'.$or]);
                    }
                }
            }
        }

        $where = '';
        foreach ($automationHelpers as $index => $automationHelper) {
            if (!empty($automationHelper->where)) {
                $where .= ' ('.implode(') AND (', $automationHelper->where).')';
                if ($index != count($automationHelpers) - 1) $where .= ' OR ';
            }
            if (!empty($automationHelper->join)) $query->join = array_merge($query->join, $automationHelper->join);
            if (!empty($automationHelper->leftjoin)) $query->leftjoin = array_merge($query->leftjoin, $automationHelper->leftjoin);
        }
        if (!empty($where)) $query->where = array_merge($query->where, [$where]);
    }

    public function onAcymDeclareSummary_filters(&$automation)
    {
        if (empty($automation['acy_segment'])) return;
        $oneSegment = (new SegmentClass())->getOneById($automation['acy_segment']['id']);
        $automation = acym_translationSprintf('ACYM_FILTER_ACY_SEGMENT_SUMMARY', $oneSegment->name);
    }
}

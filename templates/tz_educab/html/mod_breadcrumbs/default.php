<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_breadcrumbs
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div aria-label="<?php echo $module->name; ?>" role="navigation" class="mod_breadcrumbs" data-uk-grid>
	<?php
	// Get rid of duplicated entries on trail including home page when using multilanguage
	for ($i = 0; $i < $count; $i++)
	{
		if ($i === 1 && !empty($list[$i]->link) && !empty($list[$i - 1]->link) && $list[$i]->link === $list[$i - 1]->link)
		{
			unset($list[$i]);
		}
	}

	// Find last and penultimate items in breadcrumbs list
	end($list);
	$last_item_key   = key($list);
	prev($list);
	$penult_item_key = key($list);

	// Make a link if not the last item in the breadcrumbs
	$show_last = $params->get('showLast', 1);
	?>
    <h2 class="heading-title-page uk-width-expand@m"><?php echo end($list)->name; ?></h2>
    <div class="uk-width-auto@m">
        <ul itemscope itemtype="https://schema.org/BreadcrumbList" class="uk-breadcrumb">
            <?php if ($params->get('showHere', 1)) : ?>
                <li>
                    <?php echo JText::_('MOD_BREADCRUMBS_HERE'); ?>&#160;
                </li>
            <?php else : ?>
                <li class="active">
                    <span class="divider icon-location"></span>
                </li>
            <?php endif; ?>
            <?php
            // Generate the trail
            foreach ($list as $key => $item) :
                if ($key !== $last_item_key) :
                    // Render all but last item - along with separator ?>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <?php if (!empty($item->link)) : ?>
                            <a itemprop="item" href="<?php echo $item->link; ?>" class="pathway"><span itemprop="name"><?php echo $item->name; ?></span></a>
                        <?php else : ?>
                            <span itemprop="name">
							<?php echo $item->name; ?>
						</span>
                        <?php endif; ?>

                        <meta itemprop="position" content="<?php echo $key + 1; ?>">
                    </li>
                <?php elseif ($show_last) :
                    // Render last item if reqd. ?>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
					<span itemprop="name">
						<?php echo $item->name; ?>
					</span>
                        <meta itemprop="position" content="<?php echo $key + 1; ?>">
                    </li>
                <?php endif;
            endforeach; ?>
        </ul>
    </div>

</div>

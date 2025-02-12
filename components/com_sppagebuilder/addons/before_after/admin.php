<?php

/**
 * @package SP Page Builder
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2023 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct access
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Language\Text;

SpAddonsConfig::addonConfig([
    'type' => 'content',
    'addon_name' => 'before_after',
    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_BEFORE_AFTER'),
    'desc' => Text::_('COM_SPPAGEBUILDER_ADDON_BEFORE_AFTER_DESC'),
    'category' => 'Media',
    'icon' => '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.678 10.3634C17.678 11.8506 16.4468 13.0562 14.928 13.0562C13.4092 13.0562 12.178 11.8506 12.178 10.3634C12.178 8.87624 13.4092 7.67065 14.928 7.67065C16.4468 7.67065 17.678 8.87624 17.678 10.3634ZM16.1461 10.3634C16.1461 9.70467 15.6008 9.17065 14.928 9.17065C14.2553 9.17065 13.7099 9.70467 13.7099 10.3634C13.7099 11.0221 14.2553 11.5562 14.928 11.5562C15.6008 11.5562 16.1461 11.0221 16.1461 10.3634Z" fill="currentColor"/>
    <path d="M9.56304 0C9.14002 0 8.79709 0.335786 8.79709 0.75V3.57202H2.53189C1.68585 3.57202 1 4.24359 1 5.07202V18.2285C1 18.9534 1.52511 19.5582 2.22316 19.698C2.32288 19.718 2.42614 19.7285 2.53189 19.7285H8.79709V23.25C8.79709 23.6642 9.14002 24 9.56304 24C9.98606 24 10.329 23.6642 10.329 23.25V19.7285H21.4681C22.3141 19.7285 23 19.0569 23 18.2285V5.07202C23 4.24359 22.3141 3.57202 21.4681 3.57202H10.329V0.75C10.329 0.335786 9.98606 0 9.56304 0ZM10.329 12.1355V5.07202H21.4681V10.397C20.5674 11.7067 18.9864 13.5542 17.2863 14.5504C16.4411 15.0457 15.6377 15.2886 14.9135 15.2249C14.2207 15.164 13.4812 14.8121 12.7539 13.8715C12.0319 12.9377 11.2194 12.361 10.329 12.1355ZM10.329 13.7279C10.7063 13.9086 11.1114 14.2322 11.5326 14.7769C12.4709 15.9905 13.5782 16.6135 14.7765 16.7189C15.9434 16.8215 17.0754 16.4221 18.0729 15.8376C19.3581 15.0845 20.538 13.9549 21.4681 12.8766V18.2285H10.329V13.7279Z" fill="currentColor"/>
    </svg>',
    'settings' => [
        'content_before' => [
            'title' => Text::_('COM_SPPAGEBUILDER_ADDON_BEFORE_AFTER_CONTENT_BEFORE'),
            'fields' => [
                'before_image' => [
                    'type' => 'media',
                    'std' => [
                        'src' => 'https://sppagebuilder.com/images/addons/before-after/before.webp',
                        'height' => '',
                        'width' => '',
                    ],
                ],

                'before_image_2x' => [
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_IMAGE_2X_TEXT'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_GLOBAL_IMAGE_2X_TEXT_DESC'),
                    'type' => 'media',
                    'hide_preview' => true,
                    'std' => [
                        'src' => '',
                        'height' => '',
                        'width' => '',
                    ],
                ],

                'before_image_alt_text' => [
                    'type' => 'text',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_ALT_TEXT'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_GLOBAL_ALT_TEXT_DESC'),
                    'inline' => true,
                ],
            ],
        ],

        'content_after' => [
            'title' => Text::_('COM_SPPAGEBUILDER_ADDON_BEFORE_AFTER_CONTENT_AFTER'),
            'fields' => [
                'after_image' => [
                    'type' => 'media',
                    'std' => [
                        'src' => 'https://sppagebuilder.com/images/addons/before-after/after.webp',
                        'height' => '',
                        'width' => '',
                    ],
                ],

                'after_image_2x' => [
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_IMAGE_2X_TEXT'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_GLOBAL_IMAGE_2X_TEXT_DESC'),
                    'type' => 'media',
                    'hide_preview' => true,
                    'std' => [
                        'src' => '',
                        'height' => '',
                        'width' => '',
                    ],
                ],

                'after_image_alt_text' => [
                    'type' => 'text',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_ALT_TEXT'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_GLOBAL_ALT_TEXT_DESC'),
                    'inline' => true,
                ],
            ],
        ],

        'options' => [
            'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_OPTIONS'),
            'fields' => [
                'container_width' => [
                    'type' => 'slider',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_WIDTH'),
                    'max' => 2000,
                    'min' => 0,
                    'std' => 950,
                    'responsive' => true,
                ],

                'container_height' => [
                    'type' => 'slider',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_HEIGHT'),
                    'max' => 2000,
                    'min' => 0,
                    'std' => 534,
                    'responsive' => true,
                ],

                'border_radius' => [
                    'type' => 'advancedslider',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_RADIUS'),
                    'std' => 0,
                    'max' => 1200,
                ],
            ],
        ],

        'slider_separator' => [
            'title' => Text::_('COM_SPPAGEBUILDER_ADDON_BEFORE_AFTER_SLIDER_SEPARATOR'),
            'fields' => [
                'orientation' => [
                    'type' => 'buttons',
                    'values' => [
                        ['label' => 'Horizontal', 'value' => 'horizontal'],
                        ['label' => 'Vertical', 'value' => 'vertical'],
                    ],
                    'std' => 'horizontal',
                ],

                'icon' => [
                    'type'   => 'select',
                    'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_BEFORE_AFTER_ICON'),
                    'values' => [
                        'default'    => 'Default',
                        'chevron'    => 'Chevron',
                    ],
                    'std' => 'default',
                ],

                'icon_size' => [
                    'type'        => 'slider',
                    'title'       => Text::_('COM_SPPAGEBUILDER_GLOBAL_ICON_SIZE'),
                    'std'         => ['xl' => 36, 'lg' => 36, 'md' => 36, 'sm' => 36, 'xs' => 36],
                    'responsive'  => true,
                    'min'         => 1,
                    'max'         => 400,
                ],

                'separator_color' => [
                    'type' => 'color',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR'),
                ],
            ]
        ],

        'text_options' => [
            'title' => Text::_('COM_SPPAGEBUILDER_ADDON_BEFORE_AFTER_TEXT_OPTIONS'),
            'fields' => [
                'title_before' => [
                    'type' => 'text',
                    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_BEFORE_AFTER_BEFORE_TITLE'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
                ],

                'title_after' => [
                    'type' => 'text',
                    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_BEFORE_AFTER_AFTER_TITLE'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
                ],

                'text_horizontal_position' => [
                    'type'   => 'select',
                    'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_BEFORE_AFTER_HORIZONTAL_POSITION'),
                    'values' => [
                        'top'     => 'Top',
                        'center' => 'Center',
                        'bottom' => 'Bottom',
                    ],
                    'std' => 'center',
                    'depends' => [
                        ['orientation', '=', 'horizontal']
                    ],
                ],

                'text_vertical_position' => [
                    'type'   => 'select',
                    'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_BEFORE_AFTER_VERTICAL_POSITION'),
                    'values' => [
                        'left'     => 'Left',
                        'center' => 'Center',
                        'right' => 'Right',
                    ],
                    'std' => 'center',
                    'depends' => [
                        ['orientation', '!=', 'horizontal']
                    ],
                ],

                'typography' => [
                    'type' => 'typography',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_TYPOGRAPHY'),
                ],

                'text_color' => [
                    'type' => 'color',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR'),
                    'std' => '#ffffff'
                ],

                'text_bg_color' => [
                    'type' => 'color',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR'),
                ],

                'text_shadow' => [
                    'type' => 'boxshadow',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_TEXT_SHADOW'),
                    'std' => '0 0 0 #ffffff',
                    'config' => ['spread' => false]
                ],
            ],
        ],

        'text_spacing' => [
            'title' => Text::_('COM_SPPAGEBUILDER_ADDON_BEFORE_AFTER_TEXT_SPACING'),
            'fields' => [
                'text_margin' => [
                    'type'       => 'margin',
                    'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN'),
                    'desc'       => Text::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_DESC'),
                    'std'        => ['xl' => '0px 0px 0px 0px', 'lg' => '', 'md' => '', 'sm' => '', 'xs' => ''],
                    'responsive' => true
                ],

                'text_padding'    => [
                    'type'       => 'padding',
                    'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING'),
                    'desc'       => Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING_DESC'),
                    'std'        => ['xl' => '0px 0px 0px 0px', 'lg' => '', 'md' => '', 'sm' => '', 'xs' => ''],
                    'responsive' => true
                ],
            ]
        ],

        'title' => [
            'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_TITLE'),
            'fields' => [
                'title' => [
                    'type' => 'text',
                    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
                ],

                'heading_selector' => [
                    'type' => 'headings',
                    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DESC'),
                    'std' => 'h3',
                ],

                'title_typography' => [
                    'type' => 'typography',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_TYPOGRAPHY'),
                    'fallbacks' => [
                        'font' => 'title_font_family',
                        'size' => 'title_fontsize',
                        'line_height' => 'title_lineheight',
                        'letter_spacing' => 'title_letterspace',
                        'uppercase' => 'title_font_style.uppercase',
                        'italic' => 'title_font_style.italic',
                        'underline' => 'title_font_style.underline',
                        'weight' => 'title_font_style.weight',
                    ],
                ],

                'title_text_color' => [
                    'type' => 'color',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR'),
                ],

                'title_position' => [
                    'type' => 'select',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_POSITION'),
                    'values' => [
                        'top' => 'Top',
                        'bottom' => 'Bottom',
                    ],
                    'std' => 'top',
                ],

                'title_margin_top' => [
                    'type' => 'slider',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_TOP'),
                    'max' => 400,
                    'responsive' => true,
                ],

                'title_margin_bottom' => [
                    'type' => 'slider',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_BOTTOM'),
                    'max' => 400,
                    'responsive' => true,
                ],
            ],
        ],
    ],
]);

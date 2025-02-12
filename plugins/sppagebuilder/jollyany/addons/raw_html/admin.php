<?php
/**
* @package SP Page Builder
* @author JoomShaper http://www.joomshaper.com
* @copyright Copyright (c) 2010 - 2016 JoomShaper
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('Restricted access');

SpAddonsConfig::addonConfig(
	array(
		'type'=>'content',
		'addon_name'=>'sp_raw_html',
		'title'=>JText::_('Custom Html'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_RAW_HTML_DESC'),
		'icon'=>JURI::root() . 'plugins/sppagebuilder/jollyany/addons/raw_html/assets/images/icon.png',
		'category'=>'General',
		'attr'=>array(
			'general' => array(
				'admin_label'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std'=> ''
				),
				'title_addon'=>array(
					'type'=>'text',
					'title'=>JText::_('Title'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
					'std'=>  '',
				),
				'title_heading_style'=>array(
					'type'=>'select',
					'title'=>JText::_('Style'),
					'desc'=>JText::_('Heading styles differ in font-size but may also come with a predefined color, size and font'),
					'values'=>array(
						''=>JText::_('Default'),
						'heading-small'=>JText::_('Small'),
						'heading-medium'=>JText::_('Medium'),
						'heading-large'=>JText::_('Large'),
						'heading-xlarge'=>JText::_('X-Large'),
						'heading-2xlarge'=>JText::_('2xLarge'),
						'h1'=>JText::_('H1'),
						'h2'=>JText::_('H2'),
						'h3'=>JText::_('H3'),
						'h4'=>JText::_('H4'),
						'h5'=>JText::_('H5'),
						'h6'=>JText::_('H6'),
					),
					'std'=>'h3',
					'depends'=>array(array('title_addon', '!=', '')),
				),
				'title_heading_margin'=>array(
					'type'=>'select',
					'title'=>JText::_('Title Margin'),
					'desc'=>JText::_('Set the vertical margin for title.'),
					'values'=>array(
						''=>JText::_('Keep existing'),
						'uk-margin-small'=>JText::_('Small'),
						'uk-margin'=>JText::_('Default'),
						'uk-margin-medium'=>JText::_('Medium'),
						'uk-margin-large'=>JText::_('Large'),
						'uk-margin-xlarge'=>JText::_('X-Large'),
						'uk-margin-remove-vertical'=>JText::_('None'),
					),
					'std'=>'uk-margin',
					'depends'=>array(array('title_addon', '!=', '')),
				),
				'title_heading_decoration'=>array(
					'type'=>'select',
					'title'=>JText::_('Decoration'),
					'desc'=>JText::_('Decorate the heading with a divider, bullet or a line that is vertically centered to the heading'),
					'values'=>array(
						''=>JText::_('None'),
						'uk-heading-divider'=>JText::_('Divider'),
						'uk-heading-bullet'=>JText::_('Bullet'),
						'uk-heading-line'=>JText::_('Line'),
					),
					'std'=>'',
					'depends'=>array(array('title_addon', '!=', '')),
				),
				'title_heading_color'=>array(
					'type'=>'select',
					'title'=>JText::_('Color'),
					'desc'=>JText::_('Select the text color. If the background option is selected, you can use Light or Dark color text mode to inverse the text style.'),
					'values'=>array(
						''=>JText::_('Default'),
						'text-muted'=>JText::_('Muted'),
						'text-emphasis'=>JText::_('Emphasis'),
						'text-primary'=>JText::_('Primary'),
						'text-secondary'=>JText::_('Secondary'),
						'text-success'=>JText::_('Success'),
						'text-warning'=>JText::_('Warning'),
						'text-danger'=>JText::_('Danger'),
						'light'=>JText::_('Light'),
						'dark'=>JText::_('Dark'),
					),
					'std'=>'',
					'depends'=>array(array('title_addon', '!=', '')),
				),

				'title_heading_selector'=>array(
					'type'=>'select',
					'title'=>JText::_('HTML Element'),
					'desc'=>JText::_('Choose one of the seven heading elements to fit your semantic structure.'),
					'values'=>array(
						'h1'=>JText::_('h1'),
						'h2'=>JText::_('h2'),
						'h3'=>JText::_('h3'),
						'h4'=>JText::_('h4'),
						'h5'=>JText::_('h5'),
						'h6'=>JText::_('h6'),
						'div'=>JText::_('div'),
					),
					'std'=>'h3',
					'depends'=>array(array('title_addon', '!=', '')),
				),

				'html'=>array(
					'type'=>'textarea',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_RAW_HTML_HTML'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_RAW_HTML_HTML_DESC'),
					'std'=>'',
				),

				'separator_general_options'=>array(
					'type'=>'separator',
					'title'=>JText::_('General'),
				),
				'margin'=>array(
					'type'=>'select',
					'title'=>JText::_('Margin'),
					'desc'=>JText::_('Set the vertical margin. Note: The first element\'s bottom margin are always removed. Define those in the grid settings instead'),
					'values'=>array(
						''=>JText::_('Keep existing'),
						'uk-margin-small'=>JText::_('Small'),
						'uk-margin'=>JText::_('Default'),
						'uk-margin-medium'=>JText::_('Medium'),
						'uk-margin-large'=>JText::_('Large'),
						'uk-margin-xlarge'=>JText::_('X-Large'),
						'uk-margin-remove-vertical'=>JText::_('None'),
					),
					'std'=>'',
				),				
				'addon_max_width'=>array(
					'type'=>'select',
					'title'=>JText::_('Max Width'),
					'desc'=>JText::_('Set the maximum content width.'),
					'values'=> array(
						''=>JText::_('None'),
						'small'=>JText::_('Small'),
						'medium'=>JText::_('Medium'),
						'large'=>JText::_('Large'),
						'xlarge'=>JText::_('X-Large'),
						'2xlarge' => JText::_('2X-Large'),
					),
					'std'=> '',
				),
				'addon_max_width_breakpoint'=>array(
					'type'=>'select',
					'title'=>JText::_('Max Width Breakpoint'),
					'desc'=>JText::_('Define the device width from which the element\'s max-width will apply.'),
					'values'=>array(
						''=>JText::_('Always'),
						's'=>JText::_('Small (Phone Landscape)'),
						'm'=>JText::_('Medium (Tablet Landscape)'),
						'l'=>JText::_('Large (Desktop)'),
						'xl'=>JText::_('X-Large (Large Screens)'),
					),
					'std'=>'',
					'depends'=>array(array('addon_max_width', '!=', '')),
				),
				'block_align'=>array(
					'type'=>'select',
					'title'=>JText::_('Block Alignment'),
					'desc'=>JText::_('Define the alignment in case the container exceeds the element\'s max-width.'),
					'values'=>array(
						''=>JText::_('Left'),
						'center'=>JText::_('Center'),
						'right'=>JText::_('Right'),
					),
					'std'=>'',
					'depends'=>array(array('addon_max_width', '!=', '')),
				),
				'block_align_breakpoint'=>array(
					'type'=>'select',
					'title'=>JText::_('Block Alignment Breakpoint'),
					'desc'=>JText::_('Define the device width from which the alignment will apply.'),
					'values'=>array(
						''=>JText::_('Always'),
						's'=>JText::_('Small (Phone Landscape)'),
						'm'=>JText::_('Medium (Tablet Landscape)'),
						'l'=>JText::_('Large (Desktop)'),
						'xl'=>JText::_('X-Large (Large Screens)'),
					),
					'std'=>'',
					'depends'=>array(array('addon_max_width', '!=', '')),
				),
				'block_align_fallback'=>array(
					'type'=>'select',
					'title'=>JText::_('Block Alignment Fallback'),
					'desc'=>JText::_('Define the alignment in case the container exceeds the element\'s max-width.'),
					'values'=>array(
						''=>JText::_('Left'),
						'center'=>JText::_('Center'),
						'right'=>JText::_('Right'),
					),
					'std'=>'',
					'depends'=>array(
						array('addon_max_width', '!=', ''),
						array('block_align_breakpoint', '!=', '')
					),
				),
				'alignment'=>array(
					'type'=>'select',
					'title'=>JText::_('Text Alignment'),
					'desc'=>JText::_('Center, left and right alignment.'),
					'values'=>array(
						''=>JText::_('Inherit'),
						'uk-text-left'=>JText::_('Left'),
						'uk-text-center'=>JText::_('Center'),
						'uk-text-right'=>JText::_('Right'),
						'uk-text-justify'=>JText::_('Justify'),
					),
					'std'=>'',
				),
				'text_breakpoint'=>array(
					'type'=>'select',
					'title'=>JText::_('Text Alignment Breakpoint'),
					'desc'=>JText::_('Display the text alignment only on this device width and larger'),
					'values'=>array(
						''=>JText::_('Always'),
						's'=>JText::_('Small (Phone Landscape)'),
						'm'=>JText::_('Medium (Tablet Landscape)'),
						'l'=>JText::_('Large (Desktop)'),
						'xl'=>JText::_('X-Large (Large Screens)'),
					),
					'std'=>'',
					'depends'=>array(array('alignment', '!=', '')),
				),
				'text_alignment_fallback'=>array(
					'type'=>'select',
					'title'=>JText::_('Text Alignment Fallback'),
					'desc'=>JText::_('Define an alignment fallback for device widths below the breakpoint'),
					'values'=>array(
						''=>JText::_('Inherit'),
						'left'=>JText::_('Left'),
						'center'=>JText::_('Center'),
						'right'=>JText::_('Right'),
						'justify'=>JText::_('Justify'),
					),
					'std'=>'',
					'depends'=>array(
						array('text_breakpoint', '!=', ''),
						array('alignment', '!=', ''),
					),
				),
				'animation' => array(
					'type' => 'select',
					'title' => JText::_('Animation'),
					'desc' => JText::_('A collection of smooth animations to use within your page.'),
					'values' => array(
						'' => JText::_('Inherit'),
						'fade' => JText::_('Fade'),
						'scale-up' => JText::_('Scale Up'),
						'scale-down' => JText::_('Scale Down'),
						'slide-top-small' => JText::_('Slide Top Small'),
						'slide-bottom-small' => JText::_('Slide Bottom Small'),
						'slide-left-small' => JText::_('Slide Left Small'),
						'slide-right-small' => JText::_('Slide Right Small'),
						'slide-top-medium' => JText::_('Slide Top Medium'),
						'slide-bottom-medium' => JText::_('Slide Bottom Medium'),
						'slide-left-medium' => JText::_('Slide Left Medium'),
						'slide-right-medium' => JText::_('Slide Right Medium'),
						'slide-top' => JText::_('Slide Top 100%'),
						'slide-bottom' => JText::_('Slide Bottom 100%'),
						'slide-left' => JText::_('Slide Left 100%'),
						'slide-right' => JText::_('Slide Right 100%'),
						'parallax' => JText::_('Parallax'),
					),
					'std' => '',
				),
				'animation_repeat' => array(
					'type' => 'checkbox',
					'title' => JText::_('Repeat Animation'),
					'desc' => JText::_('Applies the animation class every time the element is in view'),
					'std' => 0,
					'depends' => array(
						array('animation', '!=', ''),
						array('animation', '!=', 'parallax')
					),
				),
				'delay_element_animations' => array(
					'type' => 'checkbox',
					'title' => JText::_('Delay Element Animations'),
					'desc' => JText::_('Delay element animations so that animations are slightly delayed and don\'t play all at the same time. Slide animations can come into effect with a fixed offset or at 100% of the element\’s own size.'),
					'std' => 0,
					'depends' => array(
						array('animation', '!=', ''),
						array('animation', '!=', 'parallax')
					),
				),
				'separator_parallax_options' => array(
					'type' => 'separator',
					'title' => JText::_('Parallax Animation Settings'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'horizontal_start' => array(
					'type' => 'slider',
					'title' => JText::_('Horizontal Start'),
					'min' => -600,
					'max' => 600,
					'desc' => JText::_('Animate the horizontal position (translateX) in pixels.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'horizontal_end' => array(
					'type' => 'slider',
					'title' => JText::_('Horizontal End'),
					'min' => -600,
					'max' => 600,
					'desc' => JText::_('Animate the horizontal position (translateX) in pixels.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'vertical_start' => array(
					'type' => 'slider',
					'title' => JText::_('Vertical Start'),
					'min' => -600,
					'max' => 600,
					'desc' => JText::_('Animate the vertical position (translateY) in pixels.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'vertical_end' => array(
					'type' => 'slider',
					'title' => JText::_('Vertical End'),
					'min' => -600,
					'max' => 600,
					'desc' => JText::_('Animate the vertical position (translateY) in pixels.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'scale_start' => array(
					'type' => 'slider',
					'title' => JText::_('Scale Start'),
					'min' => 50,
					'max' => 200,
					'desc' => JText::_('Animate the scaling. Min: 50, Max: 200 =>  100 means 100% scale, 200 means 200% scale, and 50 means 50% scale.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'scale_end' => array(
					'type' => 'slider',
					'title' => JText::_('Scale End'),
					'min' => 50,
					'max' => 200,
					'desc' => JText::_('Animate the scaling. Min: 50, Max: 200 =>  100 means 100% scale, 200 means 200% scale, and 50 means 50% scale.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'rotate_start' => array(
					'type' => 'slider',
					'title' => JText::_('Rotate Start'),
					'min' => 0,
					'max' => 360,
					'desc' => JText::_('Animate the rotation clockwise in degrees.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'rotate_end' => array(
					'type' => 'slider',
					'title' => JText::_('Rotate End'),
					'min' => 0,
					'max' => 360,
					'desc' => JText::_('Animate the rotation clockwise in degrees.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'opacity_start' => array(
					'type' => 'slider',
					'title' => JText::_('Opacity Start'),
					'min' => 0,
					'max' => 100,
					'desc' => JText::_('Animate the opacity. 100 means 100% opacity, and 0 means 0% opacity.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'opacity_end' => array(
					'type' => 'slider',
					'title' => JText::_('Opacity End'),
					'min' => 0,
					'max' => 100,
					'desc' => JText::_('Animate the opacity. 100 means 100% opacity, and 0 means 0% opacity.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'easing' => array(
					'type' => 'slider',
					'title' => JText::_('Easing'),
					'min' => -200,
					'max' => 200,
					'desc' => JText::_('Set the animation easing. A value below 100 is faster in the beginning and slower towards the end while a value above 100 behaves inversely.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'viewport' => array(
					'type' => 'slider',
					'title' => JText::_('Viewport'),
					'min' => 10,
					'max' => 100,
					'desc' => JText::_('Set the animation end point relative to viewport height, e.g. 50 for 50% of the viewport'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'parallax_target' => array(
					'type' => 'checkbox',
					'title' => JText::_('Target'),
					'desc' => JText::_('Animate the element as long as the section is visible.'),
					'std' => 0,
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'parallax_zindex' => array(
					'type' => 'checkbox',
					'title' => JText::_('Z Index'),
					'desc' => JText::_('Set a higher stacking order.'),
					'std' => 0,
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'breakpoint' => array(
					'type' => 'select',
					'title' => JText::_('Breakpoint'),
					'desc' => JText::_('Display the parallax effect only on this device width and larger. It is useful to disable the parallax animation on small viewports.'),
					'values' => array(
						'' => JText::_('Always'),
						's' => JText::_('Small (Phone)'),
						'm' => JText::_('Medium (Tablet)'),
						'l' => JText::_('Large (Desktop)'),
						'xl' => JText::_('X-Large (Large Screens)'),
					),
					'std' => '',
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'visibility' => array(
					'type' => 'select',
					'title' => JText::_('Visibility'),
					'desc' => JText::_('Display the element only on this device width and larger.'),
					'values' => array(
						'' => JText::_('Always'),
						'uk-visible@s' => JText::_('Small (Phone Landscape)'),
						'uk-visible@m' => JText::_('Medium (Tablet Landscape)'),
						'uk-visible@l' => JText::_('Large (Desktop)'),
						'uk-visible@xl' => JText::_('X-Large (Large Screens)'),
						'uk-hidden@s' => JText::_('Hidden Small (Phone Landscape)'),
						'uk-hidden@m' => JText::_('Hidden Medium (Tablet Landscape)'),
						'uk-hidden@l' => JText::_('Hidden Large (Desktop)'),
						'uk-hidden@xl' => JText::_('Hidden X-Large (Large Screens)'),
					),
					'std' => '',
				),
				'class'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
					'std'=> ''
				),
			),
		),
	)
);

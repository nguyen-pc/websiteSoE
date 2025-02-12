<?php
/**
 * @package Jollyany Addons SP Page Builder
 * @author TemPlaza https://templaza.com
 * @copyright Copyright (c) 2021 TemPlaza
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
// No direct access.
defined( '_JEXEC' ) or die( 'Restricted access' );

class SppagebuilderAddonUiLeaderPrice extends SppagebuilderAddons {

	public function render() {
		$settings     = $this->addon->settings;
		$general      = '';
		$addon_margin = ( isset( $settings->addon_margin ) && $settings->addon_margin ) ? $settings->addon_margin : '';
		$general     .= ( $addon_margin ) ? ' uk-margin' . ( ( $addon_margin == 'default' ) ? '' : '-' . $addon_margin ) : '';
		$general     .= ( isset( $settings->visibility ) && $settings->visibility ) ? ' ' . $settings->visibility : '';
		$general     .= ( isset( $settings->class ) && $settings->class ) ? ' ' . $settings->class : '';

		$title = ( isset( $settings->title ) && $settings->title ) ? $settings->title : '';

		// New style options.

		$heading_selector = ( isset( $settings->heading_selector ) && $settings->heading_selector ) ? $settings->heading_selector : 'h3';
		$heading_style    = ( isset( $settings->heading_style ) && $settings->heading_style ) ? ' uk-' . $settings->heading_style : '';
		$heading_style   .= ( isset( $settings->title_color ) && $settings->title_color ) ? ' uk-text-' . $settings->title_color : '';
		$heading_style   .= ( isset( $settings->title_text_transform ) && $settings->title_text_transform ) ? ' uk-text-' . $settings->title_text_transform : '';
		$heading_style   .= ( isset( $settings->title_margin_top ) && $settings->title_margin_top ) ? ' uk-margin-' . $settings->title_margin_top . '-top' : ' uk-margin-top';
		$title_decoration = ( isset( $settings->title_decoration ) && $settings->title_decoration ) ? ' ' . $settings->title_decoration : '';

		$title_position  = ( isset( $settings->title_position ) && $settings->title_position ) ? $settings->title_position : 'top';
		$card_margin_top = '';
		if ( $title_position == 'outside' ) {
			$card_margin_top = ( isset( $settings->card_margin_top ) && $settings->card_margin_top ) ? ' uk-margin-' . $settings->card_margin_top . '-top' : ' uk-margin-top';
		}

		$meta_style  = ( isset( $settings->meta_style ) && $settings->meta_style ) ? ' uk-' . $settings->meta_style : '';
		$meta_style .= ( isset( $settings->meta_color ) && $settings->meta_color ) ? ' uk-text-' . $settings->meta_color : '';

		$card_styles     = ( isset( $settings->card_styles ) && $settings->card_styles ) ? $settings->card_styles : '';
		$card_styles_cls = ( ! empty( $card_styles ) ) ? ' uk-card uk-card-' . $card_styles . '' : '';

		$card_size  = ( $card_styles ) ? ( ( isset( $settings->card_size ) && $settings->card_size ) ? ' uk-card-' . $settings->card_size : '' ) : false;
		$card_hover = ( isset( $settings->card_hover ) && $settings->card_hover ) ? $settings->card_hover : 0;
		$hover      = ( $card_hover ) ? ' uk-card-hover' : '';

		$fill_character = ( isset( $settings->fill_character ) && $settings->fill_character ) ? $settings->fill_character : '-';

		$max_width_cfg              = ( isset( $settings->addon_max_width ) && $settings->addon_max_width ) ? ' uk-width-' . $settings->addon_max_width : '';
		$addon_max_width_breakpoint = ( $max_width_cfg ) ? ( ( isset( $settings->addon_max_width_breakpoint ) && $settings->addon_max_width_breakpoint ) ? '@' . $settings->addon_max_width_breakpoint : '' ) : '';

		$block_align            = ( isset( $settings->block_align ) && $settings->block_align ) ? $settings->block_align : '';
		$block_align_breakpoint = ( isset( $settings->block_align_breakpoint ) && $settings->block_align_breakpoint ) ? '@' . $settings->block_align_breakpoint : '';
		$block_align_fallback   = ( isset( $settings->block_align_fallback ) && $settings->block_align_fallback ) ? $settings->block_align_fallback : '';

		// Block Alignment CLS.
		$block_cls[] = '';

		if ( empty( $block_align ) ) {
			if ( ! empty( $block_align_breakpoint ) && ! empty( $block_align_fallback ) ) {
				$block_cls[] = ' uk-margin-auto-right' . $block_align_breakpoint;
				$block_cls[] = 'uk-margin-remove-left' . $block_align_breakpoint . ( $block_align_fallback == 'center' ? ' uk-margin-auto' : ' uk-margin-auto-left' );
			}
		}

		if ( $block_align == 'center' ) {
			$block_cls[] = ' uk-margin-auto' . $block_align_breakpoint;
			if ( ! empty( $block_align_breakpoint ) && ! empty( $block_align_fallback ) ) {
				$block_cls[] = 'uk-margin-auto' . ( $block_align_fallback == 'right' ? '-left' : '' );
			}
		}

		if ( $block_align == 'right' ) {
			$block_cls[] = ' uk-margin-auto-left' . $block_align_breakpoint;
			if ( ! empty( $block_align_breakpoint ) && ! empty( $block_align_fallback ) ) {
				$block_cls[] = $block_align_fallback == 'center' ? 'uk-margin-remove-right' . $block_align_breakpoint . ' uk-margin-auto' : 'uk-margin-auto-left';
			}
		}

		$block_cls = implode( ' ', array_filter( $block_cls ) );

		$max_width_cfg .= $addon_max_width_breakpoint . ( $max_width_cfg ? $block_cls : '' );

		$text_alignment          = ( isset( $settings->alignment ) && $settings->alignment ) ? ' ' . $settings->alignment : '';
		$text_breakpoint         = ( $text_alignment ) ? ( ( isset( $settings->text_breakpoint ) && $settings->text_breakpoint ) ? '@' . $settings->text_breakpoint : '' ) : '';
		$text_alignment_fallback = ( $text_alignment && $text_breakpoint ) ? ( ( isset( $settings->text_alignment_fallback ) && $settings->text_alignment_fallback ) ? ' uk-text-' . $settings->text_alignment_fallback : '' ) : '';
		$text_alignment         .= $text_breakpoint . $text_alignment_fallback;

		// Parallax Animation.
		$horizontal_start = ( isset( $settings->horizontal_start ) && $settings->horizontal_start ) ? $settings->horizontal_start : '0';
		$horizontal_end   = ( isset( $settings->horizontal_end ) && $settings->horizontal_end ) ? $settings->horizontal_end : '0';
		$horizontal       = ( ! empty( $horizontal_start ) || ! empty( $horizontal_end ) ) ? 'x: ' . $horizontal_start . ',' . $horizontal_end . ';' : '';

		$vertical_start = ( isset( $settings->vertical_start ) && $settings->vertical_start ) ? $settings->vertical_start : '0';
		$vertical_end   = ( isset( $settings->vertical_end ) && $settings->vertical_end ) ? $settings->vertical_end : '0';
		$vertical       = ( ! empty( $vertical_start ) || ! empty( $vertical_end ) ) ? 'y: ' . $vertical_start . ',' . $vertical_end . ';' : '';

		$scale_start = ( isset( $settings->scale_start ) && $settings->scale_start ) ? ( (int) $settings->scale_start / 100 ) : 1;
		$scale_end   = ( isset( $settings->scale_end ) && $settings->scale_end ) ? ( (int) $settings->scale_end / 100 ) : 1;
		$scale       = ( ! empty( $scale_start ) || ! empty( $scale_end ) ) ? 'scale: ' . $scale_start . ',' . $scale_end . ';' : '';

		$rotate_start = ( isset( $settings->rotate_start ) && $settings->rotate_start ) ? $settings->rotate_start : '0';
		$rotate_end   = ( isset( $settings->rotate_end ) && $settings->rotate_end ) ? $settings->rotate_end : '0';
		$rotate       = ( ! empty( $rotate_start ) || ! empty( $rotate_end ) ) ? 'rotate: ' . $rotate_start . ',' . $rotate_end . ';' : '';

		$opacity_start = ( isset( $settings->opacity_start ) && $settings->opacity_start ) ? ( (int) $settings->opacity_start / 100 ) : 1;
		$opacity_end   = ( isset( $settings->opacity_end ) && $settings->opacity_end ) ? ( (int) $settings->opacity_end / 100 ) : 1;
		$opacity       = ( ! empty( $opacity_start ) || ! empty( $opacity_end ) ) ? 'opacity: ' . $opacity_start . ',' . $opacity_end . ';' : '';

		$easing     = ( isset( $settings->easing ) && $settings->easing ) ? ( (int) $settings->easing / 100 ) : '';
		$easing_cls = ( ! empty( $easing ) ) ? 'easing:' . $easing . ';' : '';

		$breakpoint     = ( isset( $settings->breakpoint ) && $settings->breakpoint ) ? $settings->breakpoint : '';
		$breakpoint_cls = ( ! empty( $breakpoint ) ) ? 'media: @' . $breakpoint . ';' : '';

		$viewport     = ( isset( $settings->viewport ) && $settings->viewport ) ? ( (int) $settings->viewport / 100 ) : '';
		$viewport_cls = ( ! empty( $viewport ) ) ? 'viewport:' . $viewport . ';' : '';

		$parallax_target = ( isset( $settings->parallax_target ) && $settings->parallax_target ) ? $settings->parallax_target : false;
		$target_cls      = ( $parallax_target ) ? ' target: !.sppb-section;' : '';

		// Default Animation.

		$animation       = ( isset( $settings->animation ) && $settings->animation ) ? $settings->animation : '';
		$parallax_zindex = ( isset( $settings->parallax_zindex ) && $settings->parallax_zindex ) ? $settings->parallax_zindex : false;
		$zindex_cls      = ( $parallax_zindex && $animation == 'parallax' ) ? ' uk-position-z-index uk-position-relative' : '';

		$animation_repeat = ( $animation ) ? ( ( isset( $settings->animation_repeat ) && $settings->animation_repeat ) ? ' repeat: true;' : '' ) : '';

		if ( $animation == 'parallax' ) {
			$animation = ' uk-parallax="' . $horizontal . $vertical . $scale . $rotate . $opacity . $easing_cls . $viewport_cls . $breakpoint_cls . $target_cls . '"';
		} elseif ( ! empty( $animation ) ) {
			$animation = ' uk-scrollspy="cls: uk-animation-' . $animation . ';' . $animation_repeat . '"';
		}

		$content_style  = ( isset( $settings->content_style ) && $settings->content_style ) ? ' uk-' . $settings->content_style : '';
		$content_style .= ( isset( $settings->content_text_transform ) && $settings->content_text_transform ) ? ' uk-text-' . $settings->content_text_transform : '';
		$content_margin = ( isset( $settings->content_margin_top ) && $settings->content_margin_top ) ? ' uk-margin-' . $settings->content_margin_top . '-top' : ' uk-margin-top';
		$font_weight    = ( isset( $settings->font_weight ) && $settings->font_weight ) ? ' uk-text-' . $settings->font_weight : '';

		$output = '';

		$output .= '<div class="ui-leaderprice' . $zindex_cls . $general . $max_width_cfg . '">';

		if ( $title && $title_position == 'outside' ) {
			$output .= '<' . $heading_selector . ' class="ui-title uk-margin-remove-bottom' . $heading_style . $text_alignment . $title_decoration . $font_weight . '">';
			if ( $title_decoration == ' uk-heading-line' ) {
				$output .= '<span>';
				$output .= $title;
				$output .= '</span>';
			} else {
				$output .= $title;
			}
			$output .= '</' . $heading_selector . '>';
		}

		if ( empty( $card_styles ) ) {
			$output .= '<div class="uk-margin-remove-first-child uk-panel' . $card_margin_top . '" ' . $animation . '>';
		} else {
			$output .= '<div class="uk-margin-remove-first-child' . $card_margin_top . $card_styles_cls . $card_size . ' uk-card-body' . $hover . '" ' . $animation . '>';
		}

		if ( $title && $title_position == 'top' ) {
			$output .= '<' . $heading_selector . ' class="ui-title uk-margin-remove-bottom' . $heading_style . $text_alignment . $title_decoration . $font_weight . '">';
			if ( $title_decoration == ' uk-heading-line' ) {
				$output .= '<span>';
				$output .= $title;
				$output .= '</span>';
			} else {
				$output .= $title;
			}
			$output .= '</' . $heading_selector . '>';
		}
		$output .= '<ul class="uk-list' . $content_margin . '">';
		if ( isset( $settings->ui_pricelist_item ) && count( (array) $settings->ui_pricelist_item ) ) {
			foreach ( $settings->ui_pricelist_item as $key => $value ) {
				$item_name  = ( isset( $value->item_name ) && $value->item_name ) ? $value->item_name : '';
				$item_price = ( isset( $value->item_price ) && $value->item_price ) ? $value->item_price : '';
				$output    .= '<li>';
				$output    .= '<div class="uk-child-width-auto uk-grid-small uk-flex-bottom" uk-grid>';
				$output    .= ( $item_name ) ? '<div class="uk-width-expand"><span class="el-title uk-display-block' . $content_style . '" uk-leader="fill: ' . $fill_character . '">' . $item_name . '</span></div>' : '';
				$output    .= '<div class="ui-meta' . $meta_style . '">' . $item_price . '</div>';
				$output    .= '</div>';
				$output    .= '</li>';
			}
		}
		$output .= '</ul>';
		if ( $title && $title_position == 'bottom' ) {
			$output .= '<' . $heading_selector . ' class="ui-title uk-margin-remove-bottom' . $heading_style . $text_alignment . $title_decoration . '">';
			if ( $title_decoration == ' uk-heading-line' ) {
				$output .= '<span>';
				$output .= $title;
				$output .= '</span>';
			} else {
				$output .= $title;
			}
			$output .= '</' . $heading_selector . '>';
		}

		$output .= '</div>';

		$output .= '</div>';

		return $output;
	}

	public function css() {
		$settings           = $this->addon->settings;
		$addon_id           = '#sppb-addon-' . $this->addon->id;
		$title_color        = ( isset( $settings->title_color ) && $settings->title_color ) ? $settings->title_color : '';
		$custom_title_color = ( isset( $settings->custom_title_color ) && $settings->custom_title_color ) ? 'color: ' . $settings->custom_title_color . ' !important;' : '';
		$meta_color         = ( isset( $settings->meta_color ) && $settings->meta_color ) ? $settings->meta_color : '';
		$custom_meta_color  = ( isset( $settings->custom_meta_color ) && $settings->custom_meta_color ) ? 'color: ' . $settings->custom_meta_color . ';' : '';
		$content_color      = ( isset( $settings->content_color ) && $settings->content_color ) ? 'color: ' . $settings->content_color . ';' : '';
		$custom_card_color  = ( isset( $settings->custom_card_color ) && $settings->custom_card_color ) ? 'color: ' . $settings->custom_card_color . ';' : '';

		$css = '';
		if ( empty( $title_color ) && $custom_title_color ) {
			$css .= $addon_id . ' .ui-title {' . $custom_title_color . '}';
		}
		if ( empty( $meta_color ) && $custom_meta_color ) {
			$css .= $addon_id . ' .ui-meta {' . $custom_meta_color . '}';
		}
		if ( $content_color ) {
			$css .= $addon_id . ' .el-title {' . $content_color . '}';
		}
        if ( isset( $settings->background_image ) && $settings->background_image ) {
            $image_src = $settings->background_image;
            if ( strpos( $image_src, 'http://' ) !== false || strpos( $image_src, 'https://' ) !== false ) {
                $image_src = $image_src;
            } elseif ( $image_src ) {
                $image_src = JURI::base( true ) . '/' . $image_src;
            }
            $css  .= $addon_id . ' .uk-card {background-image: url(' . $image_src . ');}';
        }



        if ( isset( $settings -> card_styles) && $settings -> card_styles == 'custom') {
            if ($custom_card_color) {
                $css .= $addon_id . ' .uk-card-custom, '.$addon_id . ' .uk-card-custom h1, '.$addon_id . ' .uk-card-custom h2, '.$addon_id . ' .uk-card-custom h3, '.$addon_id . ' .uk-card-custom h4, '.$addon_id . ' .uk-card-custom h5, '.$addon_id . ' .uk-card-custom h6 {' . $custom_card_color . '}';
            }

            $custom_card_style = '';
            $custom_card_style .= ( isset( $settings->custom_card_background ) && $settings->custom_card_background ) ? 'background-color: ' . $settings->custom_card_background . ';' : '';
            $custom_card_gradient_color1 = (isset($settings->custom_card_gradient->color) && $settings->custom_card_gradient->color) ? $settings->custom_card_gradient->color : 'rgba(38, 51, 159, 0.95)';
            $custom_card_gradient_color2 = (isset($settings->custom_card_gradient->color2) && $settings->custom_card_gradient->color2) ? $settings->custom_card_gradient->color2 : 'rgba(61, 59, 136, 0.95)';
            $custom_card_degree = (isset($settings->custom_card_gradient->deg) && $settings->custom_card_gradient->deg) ? $settings->custom_card_gradient->deg : '225';
            $custom_card_type = (isset($settings->custom_card_gradient->type) && $settings->custom_card_gradient->type) ? $settings->custom_card_gradient->type : 'linear';
            $custom_card_radialPos = (isset($settings->custom_card_gradient->radialPos) && $settings->custom_card_gradient->radialPos) ? $settings->custom_card_gradient->radialPos : 'Center Center';
            $custom_card_radial_angle1 = (isset($settings->custom_card_gradient->pos) && $settings->custom_card_gradient->pos) ? $settings->custom_card_gradient->pos : '0';
            $custom_card_radial_angle2 = (isset($settings->custom_card_gradient->pos2) && $settings->custom_card_gradient->pos2) ? $settings->custom_card_gradient->pos2 : '100';

            if($custom_card_type!=='radial'){
                $custom_card_style .= 'background: -webkit-linear-gradient('.$custom_card_degree.'deg, '.$custom_card_gradient_color1.' '.$custom_card_radial_angle1.'%, '.$custom_card_gradient_color2.' '.$custom_card_radial_angle2.'%) transparent;';
                $custom_card_style .= 'background: linear-gradient('.$custom_card_degree.'deg, '.$custom_card_gradient_color1.' '.$custom_card_radial_angle1.'%, '.$custom_card_gradient_color2.' '.$custom_card_radial_angle2.'%) transparent;';
            } else {
                $custom_card_style .= 'background: -webkit-radial-gradient(at '.$custom_card_radialPos.', '.$custom_card_gradient_color1.' '.$custom_card_radial_angle1.'%, '.$custom_card_gradient_color2.' '.$custom_card_radial_angle2.'%) transparent;';
                $custom_card_style .= 'background: radial-gradient(at '.$custom_card_radialPos.', '.$custom_card_gradient_color1.' '.$custom_card_radial_angle1.'%, '.$custom_card_gradient_color2.' '.$custom_card_radial_angle2.'%) transparent;';
            }

            $custom_card_style .= (isset($settings->custom_card_border) && trim($settings->custom_card_border)) ? 'border-width:'.$settings->custom_card_border.';border-style:solid;' : '';
            $custom_card_style .= (isset($settings->custom_card_border_color) && $settings->custom_card_border_color) ? 'border-color:'.$settings->custom_card_border_color.';' : '';
            $custom_card_style .= (isset($settings->custom_card_border_radius) && $settings->custom_card_border_radius) ? 'border-radius:'.$settings->custom_card_border_radius.'px;' : '';
            $custom_card_box_shadow = (isset($settings->custom_card_box_shadow) && $settings->custom_card_box_shadow) ? $settings->custom_card_box_shadow : '';
            if(is_object($custom_card_box_shadow)){
                $ho = (isset($custom_card_box_shadow->ho) && $custom_card_box_shadow->ho != '') ? $custom_card_box_shadow->ho.'px' : '0px';
                $vo = (isset($custom_card_box_shadow->vo) && $custom_card_box_shadow->vo != '') ? $custom_card_box_shadow->vo.'px' : '0px';
                $blur = (isset($custom_card_box_shadow->blur) && $custom_card_box_shadow->blur != '') ? $custom_card_box_shadow->blur.'px' : '0px';
                $spread = (isset($custom_card_box_shadow->spread) && $custom_card_box_shadow->spread != '') ? $custom_card_box_shadow->spread.'px' : '0px';
                $color = (isset($custom_card_box_shadow->color) && $custom_card_box_shadow->color != '') ? $custom_card_box_shadow->color : '#fff';
                $custom_card_style .= "box-shadow: ${ho} ${vo} ${blur} ${spread} ${color};";
            }
            if ($custom_card_style) {
                $css .= $addon_id . ' .uk-card-custom {' . $custom_card_style . '}';
            }
        }



		return $css;
	}
}

<?php
/**
 * Filter functions for Social Block of Theme Options
 */

if ( ! function_exists( 'redux_apply_social_networks' ) ) {
	function redux_apply_social_networks( $social_icons ) {
		global $techmarket_options;

		$social_icons = array(
			'facebook' 		=> array(
				'label'	=> esc_html__( 'Facebook', 'techmarket' ),
				'icon'	=> 'fa fa-facebook',
				'id'	=> 'facebook_link',
			),
			'twitter' 		=> array(
				'label'	=> esc_html__( 'Twitter', 'techmarket' ),
				'icon'	=> 'fa fa-twitter',
				'id'	=> 'twitter_link',
			),
			'pinterest' 	=> array(
				'label'	=> esc_html__( 'Pinterest', 'techmarket' ),
				'icon'	=> 'fa fa-pinterest',
				'id'	=> 'pinterest_link',
			),
			'linkedin' 		=> array(
				'label'	=> esc_html__( 'LinkedIn', 'techmarket' ),
				'icon'	=> 'fa fa-linkedin',
				'id'	=> 'linkedin_link',
			),
			'googleplus' 	=> array(
				'label'	=> esc_html__( 'Google+', 'techmarket' ),
				'icon'	=> 'fa fa-google-plus',
				'id'	=> 'googleplus_link',
			),
			'tumblr' 	=> array(
				'label'	=> esc_html__( 'Tumblr', 'techmarket' ),
				'icon'	=> 'fa fa-tumblr',
				'id'	=> 'tumblr_link'
			),
			'instagram' 	=> array(
				'label'	=> esc_html__( 'Instagram', 'techmarket' ),
				'icon'	=> 'fa fa-instagram',
				'id'	=> 'instagram_link'
			),
			'youtube' 		=> array(
				'label'	=> esc_html__( 'Youtube', 'techmarket' ),
				'icon'	=> 'fa fa-youtube',
				'id'	=> 'youtube_link'
			),
			'vimeo' 		=> array(
				'label'	=> esc_html__( 'Vimeo', 'techmarket' ),
				'icon'	=> 'fa fa-vimeo-square',
				'id'	=> 'vimeo_link'
			),
			'dribbble' 		=> array(
				'label'	=> esc_html__( 'Dribbble', 'techmarket' ),
				'icon'	=> 'fa fa-dribbble',
				'id'	=> 'dribbble_link',
			),
			'stumbleupon' 	=> array(
				'label'	=> esc_html__( 'StumbleUpon', 'techmarket' ),
				'icon'	=> 'fa fa-stumbleupon',
				'id'	=> 'stumble_upon_link'
			),
			'soundcloud'	=> array(
				'label'	=> esc_html__('Sound Cloud', 'techmarket'),
				'icon'	=> 'fa fa-soundcloud',
				'id'	=> 'soundcloud',
			),
			'vine'			=> array(
				'label'	=> esc_html__('Vine', 'techmarket'),
				'icon'	=> 'fa fa-vine',
				'id'	=> 'vine',
			),
			'vk'			=> array(
				'label'	=> esc_html__('VKontakte', 'techmarket'),
				'icon'	=> 'fa fa-vk',
				'id'	=> 'vk',
			),
			'rss'			=> array(
				'label'	=> esc_html__( 'RSS', 'techmarket' ),
				'icon'	=> 'fa fa-rss',
				'id'	=> 'rss_link',
			)
		);

		foreach( $social_icons as $key => $social_icon ) {
			if( ! empty( $techmarket_options[$key] ) ) {
				$social_icons[$key]['link'] = $techmarket_options[$key];
			}
		}

		if( isset( $techmarket_options['show_footer_rss_icon'] ) && $techmarket_options['show_footer_rss_icon'] ) {
			$social_icons['rss']['link'] = get_bloginfo( 'rss2_url' );
		}

		return $social_icons;
	}
}
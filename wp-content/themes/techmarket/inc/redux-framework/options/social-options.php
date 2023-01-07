<?php
/**
 * Options available for Social Media sub menu of Theme Options
 * 
 */

$social_options 	= apply_filters( 'techmarket_social_media_options_args', array(
	'title'     => esc_html__('Social Media', 'techmarket'),
	'icon'      => 'fa fa-share-square-o',
	'desc'      => esc_html__('Please type in your complete social network URL', 'techmarket' ),
	'fields'    => array(
		array(
			'title'     => esc_html__('Facebook', 'techmarket'),
			'id'        => 'facebook',
			'type'      => 'text',
			'icon'      => 'fa fa-facebook',
		),

		array(
			'title'     => esc_html__('Twitter', 'techmarket'),
			'id'        => 'twitter',
			'type'      => 'text',
			'icon'      => 'fa fa-twitter',
		),

		array(
			'title'     => esc_html__('Google+', 'techmarket'),
			'id'        => 'googleplus',
			'type'      => 'text',
			'icon'      => 'fa fa-google-plus',
		),

		array(
			'title'     => esc_html__('Pinterest', 'techmarket'),
			'id'        => 'pinterest',
			'type'      => 'text',
			'icon'      => 'fa fa-pinterest',
		),

		array(
			'title'     => esc_html__('LinkedIn', 'techmarket'),
			'id'        => 'linkedin',
			'type'      => 'text',
			'icon'      => 'fa fa-linkedin',
		),

		array(
			'title'     => esc_html__('Tumblr', 'techmarket'),
			'id'        => 'tumblr',
			'type'      => 'text',
			'icon'      => 'fa fa-tumblr',
		),

		array(
			'title'     => esc_html__('Instagram', 'techmarket'),
			'id'        => 'instagram',
			'type'      => 'text',
			'icon'      => 'fa fa-instagram',
		),

		array(
			'title'     => esc_html__('Youtube', 'techmarket'),
			'id'        => 'youtube',
			'type'      => 'text',
			'icon'      => 'fa fa-youtube',
		),

		array(
			'title'     => esc_html__('Vimeo', 'techmarket'),
			'id'        => 'vimeo',
			'type'      => 'text',
			'icon'      => 'fa fa-vimeo-square',
		),

		array(
			'title'     => esc_html__('Dribbble', 'techmarket'),
			'id'        => 'dribbble',
			'type'      => 'text',
			'icon'      => 'fa fa-dribbble',
		),

		array(
			'title'     => esc_html__('Stumble Upon', 'techmarket'),
			'id'        => 'stumbleupon',
			'type'      => 'text',
			'icon'      => 'fa fa-stumpleupon',
		),

		array(
			'title'     => esc_html__('Sound Cloud', 'techmarket'),
			'id'        => 'soundcloud',
			'type'      => 'text',
			'icon'      => 'fa fa-soundcloud',
		),

		array(
			'title'     => esc_html__('Vine', 'techmarket'),
			'id'        => 'vine',
			'type'      => 'text',
			'icon'      => 'fa fa-vine',
		),

		array(
			'title'     => esc_html__('VKontakte', 'techmarket'),
			'id'        => 'vk',
			'type'      => 'text',
			'icon'      => 'fa fa-vk',
		),
		array(
			'id'		=> 'show_footer_rss_icon',
			'type'		=> 'switch',
			'title'		=> esc_html__( 'RSS', 'techmarket' ),
			'desc'		=> esc_html__( 'On enabling footer rss icon.', 'techmarket' ),
			'default'	=> 0,
		),
	),
) );
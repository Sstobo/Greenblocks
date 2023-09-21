<?php

return [
	/*
	 |----------------------------------------------------------------
	 |  Theme Related
	 |----------------------------------------------------------------
	 */
	 'theme_slug'      => 'green-blocks',

	/*
	 |----------------------------------------------------------------
	 |  Theme Assets
	 |----------------------------------------------------------------
	 */
        'site_logo'       => 'images/logo.png',
        'footer_logo'     => 'images/logo.png',
        'admin_logo'      => 'images/logo.png',
        'favicon'         => null, // 'images/favicon.png',
        'phone_icon'      => null, //'images/phone-icon.png',
        'typekit_id'      => null,

	/*
	 |----------------------------------------------------------------
	 |  Theme Menus
	 |----------------------------------------------------------------
	 */
	 'menus'           => [
	 	'primary' =>  'Primary',
	 	'footer-menu' =>  'Footer Menu',
		'privacy'  => 'Privacy Menu',
	 ],

	/*
	 |----------------------------------------------------------------
	 |  Thumbnail Sizes
	 |----------------------------------------------------------------
	 | 'size-name' => ['width', 'height', 'crop']
	 */
	 'thumbnail_sizes' => [
	 	'fs-max'      => [1800, null],
	 	'fs-full'     => [1200, null],
	 	'fs-desktop'  => [980, null],
	 	'fs-tablet'   => [768, null],
	 	'fs-mobile'   => [480, null],
	 	'team-member' => [300, 300, true]
	 ],

	/*
	 |----------------------------------------------------------------
	 |  Custom Post Types
	 |----------------------------------------------------------------
	 */

	 'custom_post_types' => [
	 	'custom_post' => [
            'singular'               => 'Custom Post',
            'plural'                 => 'Custom Posts',
            'url_slug'               => 'custom-posts',
	 		'menu_icon'              => 'dashicons-format-quote',
	 		'public'                 => false,
	 		'publicly_queryable'     => true,
	 		'exclude_from_search'    => true,
	 		'show_ui'                => true,
	 		'has_archive'            => false,
	 		'show_in_rest'           => true,
	 		'disable_classic_editor' => true,
	 	],

	 ],

	/*
	 |----------------------------------------------------------------
	 |  Taxonomies
	 |----------------------------------------------------------------
	 */
	 'custom_taxonomies' => [

	 	// Expert Taxonomies 
	 	'tax_name' => [
	 		'post_types' => ['custom_post'],
	 		'singular'   => 'Tax Name',
	 		'plural'     => 'Tax Names',
	 		'url_slug'   => 'tax-slug',
	 	],

	 ],
	/*
	 |----------------------------------------------------------------
	 |  Google Fonts
	 |----------------------------------------------------------------
	 */
	 'google_fonts'      => 'https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap',

	/*
    |----------------------------------------------------------------
    |  Frontend Scripts
    |----------------------------------------------------------------
    */

    'frontend_scripts'                     => [
            'theme-script'     => 'js/theme-scripts.js',
    ],

	/*
	 |----------------------------------------------------------------
	 |  Frontend Styles
	 |----------------------------------------------------------------
	 */
	 'frontend_styles'                      => [
	 		'theme-style' => 'style.css',
	 ],

	/*
	 |----------------------------------------------------------------
	 |  Admin Scripts
	 |----------------------------------------------------------------
	 */
	 'admin_scripts'                        => [
		// 'theme-admin' => 'scripts/build/admin-bundle.js',
	 ],

	/*
	 |----------------------------------------------------------------
	 |  Admin Styles
	 |----------------------------------------------------------------
	 */
	 'admin_styles'                         => [
	 	'fontawesome' => 'https://use.fontawesome.com/releases/v5.7.1/css/all.css',   	
	 	'theme-admin' => 'styles/css/admin-style.css',
	 ],

	/*
	 |----------------------------------------------------------------
	 |  Editor Styles
	 |----------------------------------------------------------------
	 */
	 'editor_styles'                        => [
	 	'styles/css/wysiwyg.css',
	 ],
	/*
	 |----------------------------------------------------------------
	 |  ACF Option Pages
	 |----------------------------------------------------------------
	 */
	 'acf_option_pages'                     => [
	 	'General',
	 	'404 Page',
	 	'Footer',
	 ],
	/*
	 |----------------------------------------------------------------
	 |  TinyMCE Additional Styles
	 |----------------------------------------------------------------
	 */
	 'enable_tinymce_additional_styles'     => true,
	 'tinymce_additional_styles'            => [
	 	[
	 		'title'   => 'Intro Paragraph',
	 		'block'   => 'p',
	 		'classes' => 'intro',
	 		'wrapper' => false,
	 	],
	 ],

	/*
	 |----------------------------------------------------------------
	 |  TinyMCE Text Color
	 |----------------------------------------------------------------
	 */
	 'enable_tinymce_text_colors'           => false,
	 'tinymce_text_colors'                  => [
	 	'262626', 'Black',
	 	'2f9ba8', 'Blue',
	 ],

	/*
	 |----------------------------------------------------------------
	 |  ACF Banner Manager
	 |----------------------------------------------------------------
	 */
	 'enable_acf_banner_manager'            => false,
	 'acf_banner_manager_setting'           => [
	 	'auto_import_default_banner_field_group' => true,
	 	'acf_option_page_name'                   => 'Banner',
	 ],

	/*
	 |----------------------------------------------------------------
	 |  Menu Active State Helper
	 |----------------------------------------------------------------
	 */
	 'enable_menu_active_state_control'     => true,

	/*
	 |--------------------------------------------------------------------------
	 | Background Helper
	 |--------------------------------------------------------------------------
	*/
	 'enable_responsive_background_control' => true,
	 'responsive_background_setting'        => [
	 	'max_screen_size'    => 1800,
	 	'max_thumbnail_size' => 'fs-full',
	 	'breakpoints'        => [

	 		'lg'  => 980,
	 		'xl'  => 1200,
	 		'xxl' => 1400,
	 	],
	 	'preset'             => [
	 		'db-full-width' => 'md:2+',
	 	],
	 ],

	];
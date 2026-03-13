<?php
/*******************************************************************************
Plugin Name: Page for Random Banners
Plugin URI: http://www.Rainbow-Link.com/catalogue.htm?&item_no=RLF15&link_id=wp
Description: This plugin allows you to create a custom page where banner images are displayed in a different random order every time the page is loaded.
Version: 1.3.8
Stable tag: 1.3.8
Requires at least: 4.4.2
Requires PHP: 8.0
Author: RainbowLink Inc.
Author URI: https://www.Rainbow-Link.com/
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
Text Domain: page-for-random-banners
Copyright: RainbowLink Inc. (email : info@Rainbow-Link.com)
*******************************************************************************/
/*============================================================================== 
 * The plugin bootstrap file
 * @link              https://www.Rainbow-Link.com
 * @since             1.0.0
 * @package           page-for-random-banners     
 =============================================================================*/ 
/*  This plagin's core function: page-for-random-banners_core.php   */ 
if(!defined('ABSPATH')){ die('Invalid request.'); } 
function rl_pfrb_disp_mobile(){
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android
        'Windows.*Phone', // Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser
    );
    $get_the_agent = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $get_the_agent);
}
add_action('init', 'rl_pfrb_post_type_headerfooter');
function rl_pfrb_post_type_headerfooter(){
	$labels = array(
		'name' => _x('Page for Random Banners', 'name of the custom type -general'),
		'singular_name' => _x('Page for Random Banners', 'name of the custom type -this'),
		'add_new' => _x('Add a New Page for Random Banners', 'Page for Random Banners'),
		'add_new_item' => __('Add a Page for Random Banners'),
		'edit_item' => __('Modify a Page for Random Banners'),
		'new_item' => __('Page for Random Banners'),
		'view_item' => __('See the Page for Random Banners'),
		'search_items' => __('Search the Page for Random Banners'),
		'not_found' => __('There is no Page for Random Banners'),
		'not_found_in_trash' => __('There is no Page for Random Banners in the trash.'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,	
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'rl_pfrb_headerfooter', 'with_front' => false),
		'can_export' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => 7,
		'has_archive' => true,
		'supports' => array('title','editor','revisions','page-attributes')
	);
	register_post_type('rl_pfrb_headerfooter',$args);
}
/** This plugin uses the 'Custom Post Template'
https://wordpress.org/plugins/custom-post-template/other_notes/
 * Hooks the WP cpt_post_types filter
**/
define( 'rl_pfrb_dir_path', plugin_dir_path( __FILE__ ) );
/** 
When you run the version 1.0 of this plugin on the debug mode on WordPress 4.4.2, this plugin displays a debug message.
If you'd like to run your WordPress 4.4.2 as the debug mode, keep '//' below.
If you use this plugin in any OLD version of WordPress, and if this plugin doesn't run well, please remove '//' below. 
**/
//$post_types = rl_pfrb_headerfooter;

function rl_pfrb_cpt_post_types( $post_types ) {
    $post_types[] = 'rl_pfrb_headerfooter';
    return $post_types;
}
add_filter( 'cpt_post_types', 'rl_pfrb_cpt_post_types' );
?>

<?php
/**
* The admin-specific functionality of the plugin.
*
* @link       https://wonkasoft.com
* @since      1.0.0
*
* @package    Wonka_Slide
* @subpackage wonka-slide/admin/partials
*/

/**
* The admin-specific functionality of the plugin.
*
* Defines the plugin name, version, and two examples hooks for how to
* enqueue the admin-specific stylesheet and JavaScript.
*
* @package    Wonka_Slide
* @subpackage wonka-slide/admin/partials
* @author     Wonkasoft <info@wonkasoft.com>
*/
$base =  'wonka-slide/wonka-slide.php';
add_filter( 'plugin_action_links_'. $base, 'wonka_slide_add_settings_link_filter' , 10, 1);

function wonka_slide_add_settings_link_filter( $links ) { 
 $donate_link = '<a href="https://paypal.me/Wonkasoft" target="blank">Donate</a>';
 $settings_link = '<a href="admin.php?page=wonka-slide-admin-display" target="_self">Settings</a>';
 array_unshift( $links, $settings_link, $donate_link ); 
 return $links; 
}
<?php
/*
Plugin Name: Simple Popup Plugin
Plugin URI: http://www.grimmdude.com/wordpress-simple-popup-plugin
Description: This plugin makes it easy to create a simple, modifiable popup window.
Version: 1.0
Author: Garrett Grimm
Author URI: http://www.grimmdude.com
*/
?>

<?php
/*  Copyright 2009  Garrett Grimm  (email : music@grimmdude.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>

<?php

//Javascript to be placed in header.php

function popup_plugin_script(){
    echo "
    
    <!--Simple Popup Plugin-->
<script language=\"javascript\" type=\"text/javascript\">
<!--
function popitup(url) {
	newwindow=window.open(url,'name','height="; echo get_option('popup_window_height'); echo ",width="; echo get_option('popup_window_width'); echo ",location=0');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>
<!--/Simple Popup Plugin-->

";
}
?>

<?php
//inserts script in head of document
add_action ( 'wp_head', 'popup_plugin_script' );
?>

<?php
//Options page
add_action('admin_menu', 'simple_popup_menu');

function simple_popup_menu() {
  add_options_page('Simple Popup Plugin Options', 'Simple Popup Plugin', 8, __FILE__, 'simple_popup_options');
}

function simple_popup_options() {
    include 'simple_popup_admin.php';
}

?>

<?php
//defines shortcode
add_shortcode('popup', 'popup_plugin_shortcode');

//echo the get_option for the popup url
function output_popup_url() {
return get_option('popup_window_url');}

function popup_plugin_shortcode( $atts, $content = null ) {
    return '<a onclick="return popitup(\''.output_popup_url().'\')" href="'.output_popup_url().'">' .$content. '</a>';}

?>




 
<?php
/*
Plugin Name: Simple Popup Plugin
Plugin URI: http://www.grimmdude.com/wordpress-simple-popup-plugin
Description: This plugin makes it easy to create a simple, modifiable popup window.  Version 3.0 is even simpler and supports multiple popups as well as window positioning.
Version: 3.0
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
    
    <!--Simple Popup Plugin v3-->
<script language=\"javascript\" type=\"text/javascript\">
<!--
function popitup(url) {
	newwindow=window.open(url,'name','height="; if (get_option('popup_window_height')==null) {echo 500;} else {echo get_option('popup_window_height');} 
	echo ",width="; if (get_option('popup_window_width')==null) {echo 500;} else {echo get_option('popup_window_width');} echo ",top="; if (get_option('popup_window_top')==null) {echo 0;} else {echo get_option('popup_window_top');} 
	echo ",left="; if (get_option('popup_window_left')==null) {echo 0;} else {echo get_option('popup_window_left');} call_scrollbar(); call_popup_toolbar(); call_popup_location(); echo "');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>
<!--/Simple Popup Plugin-->

";
}

//inserts script in head of document
add_action ( 'wp_head', 'popup_plugin_script' );

//Options page
add_action('admin_menu', 'simple_popup_menu');

function simple_popup_menu() {
  add_options_page('Simple Popup Plugin Options', 'Simple Popup Plugin', 8, __FILE__, 'simple_popup_options');
}

function simple_popup_options() {
    include 'simple_popup_admin.php';
}


//scrollbar call function
function call_scrollbar() {
$scrollbar=get_option('popup_scrollbar');
if ( $scrollbar == 1 ) {
	echo ",scrollbars=1";
}
echo "";
}

//toolbar call function
function call_popup_toolbar() {
$toolbar=get_option('popup_window_toolbar');
if ( $toolbar == 1 ) {
	echo ",toolbar=1";
}
echo "";
}

//location bar call function
function call_popup_location() {
$location=get_option('popup_window_location');
if ( $location == 1 ) {
	echo ",location=1";
}
echo "";
}

//defines shortcode
add_shortcode('popup', 'popup_plugin_shortcode');

//echo the popup url for shortcode
function output_popup_url() {
return get_option('popup_window_url');}

function popup_plugin_shortcode( $atts, $content = null ) {
    return '<a onclick="return popitup(\''.$atts['url'].'\')" href="'.$atts['url'].'">' .$content. '</a>';}
    
//defines tag for theme templates
function simple_popup_link($templateurl,$link_text) {
   echo "<a onclick=\"return popitup('"; echo $templateurl; echo "')\" href=\""; echo $templateurl; echo "\">"; echo $link_text; echo "</a>";}
?>
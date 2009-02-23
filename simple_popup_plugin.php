<?php
/*
Plugin Name: Simple Popup Plugin
Plugin URI: http://www.grimmdude.com/wordpress-simple-popup-plugin
Description: This plugin makes it easy to create a simple, modifiable popup window.  Version 2.0 includes a scrollbar option, template tag, and widget for your popup pleasure.
Version: 2.0
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
    
    <!--Simple Popup Plugin v2-->
<script language=\"javascript\" type=\"text/javascript\">
<!--
function popitup(url) {
	newwindow=window.open(url,'name','height="; echo get_option('popup_window_height'); echo ",width="; echo get_option('popup_window_width'); echo ",location=0"; call_scrollbar(); echo "');
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

//defines shortcode
add_shortcode('popup', 'popup_plugin_shortcode');

//echo the popup url for shortcode
function output_popup_url() {
return get_option('popup_window_url');}

function popup_plugin_shortcode( $atts, $content = null ) {
    return '<a onclick="return popitup(\''.output_popup_url().'\')" href="'.output_popup_url().'">' .$content. '</a>';}
    
//defines tag for theme templates
function simple_popup_link($link_text) {

$spptext = get_option("popup_widget_text");

   echo "<a onclick=\"return popitup('"; echo get_option('popup_window_url'); echo "')\" href=\""; echo get_option('popup_window_url'); echo "\">"; echo $link_text; echo "</a>";}

//widget content

$spptext = get_option("popup_widget_text");
function popup_widget_content(){
echo "<ul><li><a onclick=\"return popitup('"; echo get_option('popup_window_url'); echo "')\" href=\""; echo get_option('popup_window_url'); echo "\">"; echo get_option('popup_widget_text'); echo "</a></li></ul>";
}

//function for widget
function simple_popup_widget($args){
extract($args);

  $spptitle = get_option("popup_widget_title");
  if (!is_array( $spptitle ))
	{
		$spptitle = array(
      'title' => 'Simple Popup Plugin'
      );
  }      

  echo $before_widget;
    echo $before_title;
      echo $spptitle['title'];
    echo $after_title;
    //Widget Content
    popup_widget_content();
  echo $after_widget;
}

//widget controls
function simple_popup_widget_control(){ 

$spptitle = get_option("popup_widget_title");
$spptext = get_option("popup_widget_text");

  if (!is_array( $spptitle ))
	{
		$spptitle = array(
      'title' => 'Simple Popup Plugin'
      );
  }      
//widget title option
  if ($_POST['popup_widget_title-Submit'])
  {
    $spptitle['title'] = htmlspecialchars($_POST['popup_widget_title-WidgetTitle']);

    update_option("popup_widget_title", $spptitle);
    
  }
  
  
//linktext option
 if ($_POST['popup_widget_text-Submit'])
  {
    $spptext = htmlspecialchars($_POST['popup_widget_text']);

    update_option("popup_widget_text", $spptext);
  }
//options form
?>
  <p>
    <label for="spptitle-WidgetTitle">Title:</label>
    <input type="text" id="popup_widget_title-WidgetTitle" class="widefat" name="popup_widget_title-WidgetTitle" value="<?php echo $spptitle['title'];?>" />
    <input type="hidden" id="popup_widget_title-Submit" name="popup_widget_title-Submit" value="1" />
  </p>
 <p>
    <label for="popuplinktext">Popup Link Text:</label>
    <input type="text" id="popup_widget_text" class="widefat" name="popup_widget_text" value="<?php echo $spptext;?>" />
    <input type="hidden" id="popup_widget_text-Submit" name="popup_widget_text-Submit" value="1" />
  </p>
<?php

}
//function to register widget and controls
function simple_popup_widget_init(){
    register_sidebar_widget(__('Simple Popup Plugin'), 'simple_popup_widget');
    register_widget_control(   'Simple Popup Plugin', 'simple_popup_widget_control', 300, 200 );
}


add_action("widgets_init", "simple_popup_widget_init");

?>
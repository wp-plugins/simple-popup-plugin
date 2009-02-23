=== Simple Popup Plugin ===
Contributors: grimmdude
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2847328
Tags: popup,simple,tools,music,bands,XSPF player,musicians,pop-up,pop up
Requires at least: 2.5
Tested up to: 2.7
Stable tag: 2.0

This plugin makes it easy to create a simple, modifiable popup window.

== Description ==

The function of this plugin is to easily create a simple popup window.  The reason it was spawned was
to be used with the XSPF Music Player plugin to create a popup music player for band/musician web sites but you can use it however you like!

Version 2 now has an option for toggling scrollbars and has a widget for easily adding a link to the popup in your sidebar.  Roll it!

== Installation ==

Installation for General Use

1. Upload the whole `simple-popup-plugin` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Create a page that you would like to be popped up.
1. Go to the options page and enter your newly created page's url along with the desired dimensions of the popup window.
1. Once you're all set up, in a post or page use the shortcode [popup]LINK TEXT[/popup] to create a link to the popup.

Installation for use with XSPF Player Plugin

1. Download and install the XSPF Player Plugin from http://www.boriel.com/plugins/the-wordpress-xspf-player-plugin/
1. Upload the whole `simple-popup-plugin` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. The simple-popup-plugin folder contains a page template called XSPF_template.php, move it into your current theme's 
directory ie: www.yoursite.com/wp-content/themes/current_theme/
1. Create a new page in Wordpress with no text in the body and choose the 'XSPF Music Player Popup' template 
from the template pulldown menu.
1. Go to the options page and enter your newly created page's url along with the desired dimensions of the popup window.
1. Once you're all set up, in a post or page use the shortcode [popup]LINK TEXT[/popup] to create a link to the popup.

== Frequently Asked Questions ==

1. To create a link to the popup in a post or page use [popup]Link Text Here[/popup]
1. To create a link in a header, footer, etc. use the template tag `<?php simple_popup_link("LINK TEXT HERE"); ?>`

== Screenshots ==

1. Screenshot of the options menu.

== Arbitrary section ==

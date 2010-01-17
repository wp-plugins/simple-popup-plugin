=== Simple Popup Plugin ===
Contributors: grimmdude, RichH
Donate link: http://www.grimmdude.com/donate
Tags: popup,simple,tools,music,bands,musicians,pop-up,pop up,window,widget
Requires at least: 2.8
Tested up to: 2.9
Stable tag: 3.2

This plugin makes it easy to create a simple, modifiable popup window.
== Description ==

The function of this plugin is to easily create links to simple popup windows.  
Version 3.2 now supports multiple popup links on posts/pages/widgets and window positioning/centering options.

== Installation ==

Installation for General Use

1. Upload the whole `simple-popup-plugin` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the Plugins menu in WordPress.
1. In a post or page use the shortcode `[popup url="http://www.popup-url.com"]LINK TEXT[/popup]` to create a popup link.
1. Go to the options page to adjust popup window dimensions and other options.


== Frequently Asked Questions ==

1. To create a popup link in a post or page use `[popup url="http://www.popup-url.com"]Link Text Here[/popup]`
1. To create a popup link in the sidebar, header, footer, etc. use the template tag `<?php simple_popup_link("http://www.popupurl.com","LINK TEXT HERE"); ?>`

== Screenshots ==

1. Screenshot of the options menu.

== Changelog ==

= 2.0 =
* Added scrollbar option.
* Added widget for displaying links to popups in sidebar.
* Added template tag to create popup links in theme templates.

= 3.0 =
* Added support for multiple popups links.
* Added window positioning options.
* Removed widget (brought back in version 3.1)

= 3.1 =
* Brought back widget by popular demand.

= 3.2 =
* Widget upgraded to support multiple links and window centering option available - contributed by RichH


== Upgrade Notice ==

= 3.2 =
3.2 now has the option of adding multiple popup links listed in a widget and multiple links within a post or page.  3.2 also supports popup centering.
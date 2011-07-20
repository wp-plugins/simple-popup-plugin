<div class="wrap">
<h2>Simple Popup Plugin</h2>
<div class='error'>
	<p>Looking for a popup that will automatically open when the page is loaded?  Check out <a href="http://www.grimmdude.com/wordpress-simple-auto-delay-popup-plugin/">Simple Auto Delay Popup</a></p>
</div>
<small>By <a href="http://www.grimmdude.com" title="www.grimmdude.com" target="_blank">Garrett Grimm</a> and <a href="http://ryowebsite.com/" title="http://ryowebsite.com" target="_blank">Rich Hamilton</a></small>
<p>This is version 3.3 <a href="http://www.grimmdude.com/wordpress-simple-popup-plugin" title="Feedback & Help" target="_blank">Feedback & Help</a> |  
<a href="http://www.grimmdude.com/donate" title="Donate" target="_blank">Donate</a>
</p>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<table class="form-table">

<tr valign="top">
<th scope="row">Popup Window Height (px):</th>
<td><input type="text" name="popup_window_height" value="<?php if (get_option('popup_window_height')==null) {echo 500;} else {echo get_option('popup_window_height');} ?>" /></td>
</tr>
 
<tr valign="top">
<th scope="row">Popup Window Width (px):</th>
<td><input type="text" name="popup_window_width" value="<?php if (get_option('popup_window_width')==null) {echo 500;} else {echo get_option('popup_window_width');} ?>" /></td>
</tr>


<tr valign="top">
<th scope="row"><i>To center the popup window, set both distance from top/left to 0</i></th>
<td></td>
</tr>

<tr valign="top">
<th scope="row">Distance from Top (px):</th>
<td><input type="text" name="popup_window_top" value="<?php if (get_option('popup_window_top')==null) {echo 0;} else {echo get_option('popup_window_top');} ?>" /></td>
</tr>

<tr valign="top">
<th scope="row">Distance from Left (px):</th>
<td><input type="text" name="popup_window_left" value="<?php if (get_option('popup_window_left')==null) {echo 0;} else {echo get_option('popup_window_left');} ?>" /></td>
</tr>


<tr valign="top">
<th scope="row">Scroll Bars:</th>
<td><input name="popup_scrollbar" type="checkbox" id="popup_scrollbar" value="1" <?php checked('1', get_option('popup_scrollbar')); ?> /></td>
</tr>

<tr valign="top">
<th scope="row">Toolbar:</th>
<td><input name="popup_window_toolbar" type="checkbox" id="popup_window_toolbar" value="1" <?php checked('1', get_option('popup_window_toolbar')); ?> /></td>
</tr>

<tr valign="top">
<th scope="row">Location Bar:</th>
<td><input name="popup_window_location" type="checkbox" id="popup_window_location" value="1" <?php checked('1', get_option('popup_window_location')); ?> /></td>
</tr>

</table>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="popup_window_height,popup_window_width,popup_window_top,popup_window_left,popup_scrollbar,popup_window_toolbar,popup_window_location" />

<p class="submit">
<input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" />
</p>

</form>

<h3>Usage</h3>
<h4>Shortcode</h4>
<p>To create a popup link in a post or page use this shortcode:<br /> <code>[popup url="http://www.popupurl.com"]Link Text Here[/popup]</code></p>
<h4>Template Tag</h4>
<p>To create a popup link in a particular area of your theme use this template tag:<br />
<code>&lt;?php simple_popup_link("http://www.popupurl.com","LINK TEXT HERE"); ?&gt;</code></p>

<p>You can use an image as a link with this template tag like so:<br />
<code>&lt;?php simple_popup_link("http://www.popupurl.com","&lt;img src='http://www.imageurl.com/image.jpg' />"); ?&gt;</code></p>
<h4>Widget</h4>
<p>There's also an easy to use widget, so don't forget about it!  <a href="<?php bloginfo('url'); ?>/wp-admin/widgets.php">Find it here.</a></p>

<p><u>**Always use "http://" in your urls</u></p>

<p><i>Written in <a href="http://www.anamericangirlinchina.com" title="My girl's Shanghai blog" target="_blank">Shanghai, China</a>.</i></p>
<p style="font-size:15px;"><i>If you have any problems or questions please visit <a href="http://www.grimmdude.com/wordpress-simple-popup-plugin/">http://www.grimmdude.com/wordpress-simple-popup-plugin/</a></i></p>
</div>

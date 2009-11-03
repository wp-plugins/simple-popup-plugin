<div class="wrap">
<h2>Simple Popup Plugin</h2>
<p>This is version 3.1 <a href="http://www.grimmdude.com/wordpress-simple-popup-plugin" title="Feedback & Help" target="_blank">Feedback & Help</a> |  
<a href="http://www.grimmdude.com/donate" title="Donate" target="_blank">Donate</a>
</p>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<table class="form-table">

<tr valign="top">
<th scope="row">URL to be Popped Up!:<br /> ( start with http:// )</th>
<td><font 
style="BACKGROUND-COLOR: yellow">This option no longer exists.  From now on use the new shortcode or template tag to indicate the url (see below).  Apologies to those who need to change their post and template tags from previous versions.  It's better this way I promise.  <b>For the widget, please asign URL at the widget page.</b></font></td>
</tr>

<tr valign="top">
<th scope="row">Popup Window Height (px):</th>
<td><input type="text" name="popup_window_height" value="<?php if (get_option('popup_window_height')==null) {echo 500;} else {echo get_option('popup_window_height');} ?>" /></td>
</tr>
 
<tr valign="top">
<th scope="row">Popup Window Width (px):</th>
<td><input type="text" name="popup_window_width" value="<?php if (get_option('popup_window_width')==null) {echo 500;} else {echo get_option('popup_window_width');} ?>" /></td>
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
<ul><li>-To create a popup link in a post or page use this shortcode: <code>[popup url="http://www.popupurl.com"]Link Text Here[/popup]</code></li>
<li>-To create a popup link in the sidebar,footer, header, etc. use this template tag: <code>&lt;?php simple_popup_link("http://www.popupurl.com","LINK TEXT HERE"); ?&gt;</code></li>
<li>-There's also an easy to use widget, so don't forget about it!</li>
<li><u>**Always use "http://" in your urls</u></li>
</ul><br />
<p>
<i>Written by <a href="http://www.grimmdude.com" title="Garrett Grimm" target="_blank">Garrett Grimm</a> in <a href="http://www.anamericangirlinchina.com" title="My girl's Shanghai blog" target="_blank">Shanghai, China</a>.
</div>

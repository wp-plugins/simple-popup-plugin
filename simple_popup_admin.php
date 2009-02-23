<div class="wrap">
<h2>Simple Popup Plugin</h2>
<p>This is version 2.0 <a href="http://www.grimmdude.com/wordpress-simple-popup-plugin" title="Feedback & Help" target="_blank">Feedback & Help</a> |  
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2847328" title="Donate" target="_blank">Donate</a>
</p>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<table class="form-table">

<tr valign="top">
<th scope="row">URL to be Popped Up!:<br /> ( start with http:// )</th>
<td><input type="text" name="popup_window_url" value="<?php echo get_option('popup_window_url'); ?>" /></td>
</tr>

<tr valign="top">
<th scope="row">Window Height (px):</th>
<td><input type="text" name="popup_window_height" value="<?php echo get_option('popup_window_height'); ?>" /></td>
</tr>
 
<tr valign="top">
<th scope="row">Window Width (px):</th>
<td><input type="text" name="popup_window_width" value="<?php echo get_option('popup_window_width'); ?>" /></td>
</tr>

<tr valign="top">
<th scope="row">Scroll Bars:</th>
<td><input name="popup_scrollbar" type="checkbox" id="popup_scrollbar" value="1" <?php checked('1', get_option('popup_scrollbar')); ?> /></td>
</tr>

</table>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="popup_window_url,popup_window_height,popup_window_width,popup_scrollbar" />

<p class="submit">
<input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" />
</p>

</form>

<h3>General Use</h3>
<ul><li>To create a link to the popup in a post or page use: [popup]Link Text Here[/popup]</li>
<li>To create a link to the popup in the footer, header, etc. use the template tag: <code>&lt;?php simple_popup_link("LINK TEXT HERE"); ?&gt;</code></li>
<li><b>Don't forget about the <a href="<?php echo get_bloginfo( 'url'); ?>/wp-admin/widgets.php" title="Go to your widget page!">widget</a> included with this plugin for easy popup link creation in your sidebar!</b></li>
</ul><br />
<h3>Bands/Musicians</h3>
<p>To use this plugin with the <a href="http://www.boriel.com/plugins/the-wordpress-xspf-player-plugin/" title="XSPF Player Plugin" target="_blank">XSPF Music Player plugin</a>:</p>
<ol>
<li>1.  Move the page template included with 
this plugin (<b><?php echo get_bloginfo( 'url'); ?>/wp-content/plugins/simple-popup-plugin/XSPF_template.php</b>) 
into your current theme's directory.<br />
<i>Your current theme's directory is: <b><?php echo get_bloginfo('template_directory'); ?></b></i></li>
<li>2.  Create a new page in Wordpress with no text in the body and select 
'XSPF Music Player Popup' from the template pulldown.</li>
<li>3.  Type the newly created page's URL into the above field, adjust dimensions, and save changes.</li>
</ol>
<br />
<p>
<i>Written by <a href="http://www.grimmdude.com" title="Garrett Grimm" target="_blank">Garrett Grimm</a> in <a href="http://en.wikipedia.org/wiki/Shanghai" title="Shanghai, China" target="_blank">Shanghai, China</a>.
</div>

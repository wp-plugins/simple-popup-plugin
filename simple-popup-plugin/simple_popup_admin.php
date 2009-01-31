<div class="wrap">
<h2>Simple Popup Plugin</h2>
<p>This is version 1.0 <a href="http://www.grimmdude.com/wordpress-simple-popup-plugin" title="Feedback" target="_blank">Feedback</a> |  
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2847328" title="Donate" target="_blank">Donate</a>
</p>
<p><b>To create a link to the popup window in a post or page use:</b> [popup]Link Text Here[/popup]</p>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<table class="form-table">

<tr valign="top">
<th scope="row">URL of Window to be Popped Up!<br /> ( start with http:// )</th>
<td><input type="text" name="popup_window_url" value="<?php echo get_option('popup_window_url'); ?>" /></td>
</tr>

<tr valign="top">
<th scope="row">Window Height (px)</th>
<td><input type="text" name="popup_window_height" value="<?php echo get_option('popup_window_height'); ?>" /></td>
</tr>
 
<tr valign="top">
<th scope="row">Window Width (px)</th>
<td><input type="text" name="popup_window_width" value="<?php echo get_option('popup_window_width'); ?>" /></td>
</tr>

</table>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="popup_window_url,popup_window_height,popup_window_width" />

<p class="submit">
<input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" />
</p>

</form>

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

</div>

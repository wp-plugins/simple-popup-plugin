<?php
/*
Template Name: XSPF Music Player Popup
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?><?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?><?php wp_title(' &raquo; '); ?></title>

<meta name="verify-v1" content="8Zj+YzRn+yYZRlWnXMJeUUL1rSJj663Rg1negJSv0L8=" />

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_get_archives('type=monthly&format=link'); ?>

<?php 
//This displays the Simple Popup Plugin script
popup_plugin_script(); ?>

</head>
<body>
<div class="xspfpopup">
<?php xspf_player::start('playlistname'); ?>
</div>
</body>
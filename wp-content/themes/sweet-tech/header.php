<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php if(sweettech_get_options("favicon")) { ?><link rel="Shortcut Icon" href="<?php echo sweettech_get_options("favicon");?>" type="image/x-icon" /><?php } ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="headerfull">
<div id="header">
<div id="headerleft">
  <?php if(get_header_image()) { ?>
  <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
  <?php } else { ?>
  <h2><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h2>
  <p><?php bloginfo('description'); ?></p><?php } ?>
 
</div>
<div id="headerright">
<div align="right">
<div class='connectus'>
  <?php if(sweettech_get_options("youtube")) { ?><span><a rel="nofollow" href="<?php echo sweettech_get_options("youtube");?>" id='smallyoutube' target='_blank' title='Youtube Channel'></a></span><?php } ?>
<?php if(sweettech_get_options("feedurl")) { ?><span><a rel="nofollow" href="<?php echo sweettech_get_options("feedurl");?>" id='smallrss' target='_blank' title='RSS Feed'></a></span><?php } ?> 
  <?php if(sweettech_get_options("googleplus")) { ?><span><a rel="nofollow" href="<?php echo sweettech_get_options("googleplus");?>" id='smallgplus' target='_blank' title='Google Plus'></a></span><?php } ?>
  <?php if(sweettech_get_options("twitter")) { ?><span><a rel="nofollow" href="<?php echo sweettech_get_options("twitter");?>" id='smalltwitter' target='_blank' title='Follow on Twitter'></a></span><?php } ?>
  <?php if(sweettech_get_options("facebook")) { ?><span><a rel="nofollow" href="<?php echo sweettech_get_options("facebook");?>" id='smallfacebook' target='_blank' title='Like Us'></a></span><?php } ?> 
  <?php if(sweettech_get_options("pinterest")) { ?><span><a rel="nofollow" href="<?php echo sweettech_get_options("pinterest");?>" id='smallpinterest' target='_blank' title='Follow me on pinterest'></a></span><?php } ?></div>
</div>
</div>
</div>
</div>
<div id="navbarfull"><div id="navbar"><ul id="nav">
   <?php wp_nav_menu( array('theme_location' => 'primary')); ?>		
  </ul></div></div><div style="clear:both;"></div>
<div id="wrap">
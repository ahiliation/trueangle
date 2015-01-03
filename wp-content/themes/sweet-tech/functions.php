<?php

if ( ! isset( $content_width ) ) $content_width = 640;

if ( ! function_exists( 'sweettech_theme_setup' ) ) :
function sweettech_theme_setup() {
load_theme_textdomain( 'sweettech', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );
$defaults = array(
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 300,
	'height'                 => 100,
	'flex-height'            => false,
	'flex-width'             => false,
	'header-text'            => false,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );
add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
		'primary' => __( 'Sweettech Primary Menu', 'sweettech' )
	) );
}
endif;
add_action('after_setup_theme', 'sweettech_theme_setup');

function sweettech_widgets_init() {
			register_sidebar(array('name'=>'Sidebar Top',
					   'before_title' => '<div class="headingred">',
					   'after_title' => '</div>')
			);
	
}
add_action( 'widgets_init', 'sweettech_widgets_init' );

function sweettech_wp_title( $title ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	$site_description = get_bloginfo( 'description' );

	$sweettech_title = $title . get_bloginfo( 'name' );
	$sweettech_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
	$sweettech_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

	return $sweettech_title;
}
add_filter( 'wp_title', 'sweettech_wp_title' );

function sweettech_remove_shortcode($content) {
  if ( is_home() || is_archive() || is_search()) {
    $content = strip_shortcodes( $content );
  }
  return $content;
}
add_filter('the_content', 'sweettech_remove_shortcode');

function sweettech_content_limit($max_char, $more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]>', $content);
    $content = strip_tags($content);

   if (strlen(isset($_GET['p'])) > 0) {
      echo "<p>";
	 echo $content;
	 echo "[...]<br /><a href='";
      the_permalink();
      echo "'>"."Read More &raquo;</a>";
      echo "</p>";
   }
   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
    $content = substr($content, 0, $espacio);
    echo $content;  
	echo "[...]";
	echo "<br /><a href='";
    the_permalink();
    echo "'>" . "Read More &raquo;" . "</a>";
   }
   else {
    echo $content;
	echo "[...]";
	echo "<br /><a href='";
    the_permalink();
    echo "'>"."Read More &raquo;</a>";
   }
}

/**
 * Don't count pingbacks or trackbacks when determining
 * the number of comments on a post.
 */
function sweettech_comment_count( $count ) {
	global $id;
	$comment_count = 0;
	$comments = get_approved_comments( $id );
	foreach ( $comments as $comment ) {
		if ( $comment->comment_type === '' ) {
			$comment_count++;
		}
	}
	return $comment_count;
}
add_filter( 'get_comments_number', 'sweettech_comment_count', 0 );

include 'theme-options.php';
function sweettech_scripts() {
	if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'sweettech_scripts' );

function sweettech_get_options($atts) {
	$options_array = get_option("sweettech_options");	
  	return esc_attr($options_array[$atts]);
}
?>
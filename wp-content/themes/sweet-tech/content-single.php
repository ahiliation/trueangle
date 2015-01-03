<?php if(is_single()) { ?><div class="smallfont"><div class="datetop"><?php the_time('F j, Y'); ?></div></div><?php } ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1 class="entry-title"><?php the_title(); ?></h1>
<div class="entry-content">
  <?php if(is_single()) { ?><div class="mediumfont"><div class="dateview">Written by <a rel="author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author() ?></a>
  <?php edit_post_link( __( 'Edit', 'sweettech' ), '<span class="edit-link">(', ')</span>' ); ?></div></div><div style="clear:both;"></div><?php } ?>
  <?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sweettech' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<?php if(is_single()) { ?>
<div class="tagscat">
  <p><span class="categorytag">Category</span> : <?php the_category(' • ','',''); ?></p>
  <?php if(has_tag()) { ?><p><span class="categorytag">Tags</span> : <?php the_tags('',' • ','') ?></p><?php } ?></div>
<?php } ?>
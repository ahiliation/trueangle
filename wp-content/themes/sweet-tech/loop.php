<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="grid">
  <div class="smallfont"><div class="datetop"><?php the_time('F j, Y'); ?></div></div>
		<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
  <?php if(sweettech_get_options("postthumb")) { ?><div id="thumbnailright"><?php the_post_thumbnail('thumbnail'); ?></div><?php }?>
  <p><?php sweettech_content_limit(150, ""); ?></p>
</div>
			<?php endwhile; else: ?>
			
			<p><?php echo 'Sorry, no posts matched your criteria.'; ?></p><?php endif; ?>
<?php if(function_exists('wp_pagenavi')) { ?><div class="pagenavigat"><?php wp_pagenavi(); ?></div><?php } else { ?>
<div class="navigation"><p><span class="previous"><?php next_posts_link(__('&laquo; Older Entries', 'sweettech')); ?></span>  <span class="newest"><?php previous_posts_link(__('Newer Entries &raquo;', 'sweettech')); ?></span></p></div><?php } ?>

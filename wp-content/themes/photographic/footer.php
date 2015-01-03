
  		</section>

		  <?php get_sidebar(); ?>

      <hr />

	  </div>

		<footer>
			<p>
				&copy; <?php echo date("Y") ?> <?php bloginfo('name'); ?> | Powered by <a href="http://wordpress.org/">WordPress</a><br />
				<a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>	and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
			</p>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>

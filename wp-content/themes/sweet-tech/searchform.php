<div id="search">
<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>/">
	<?php if(is_search()){ ?>
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	<?php } else { ?>
		<input type="text" value="Search" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search';}" name="s" id="s" />
	<?php } ?>
	<input type="submit" value="Search" id="searchsubmit"/>
</form>
</div>
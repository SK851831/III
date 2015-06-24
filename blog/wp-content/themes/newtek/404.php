<?php get_header(); ?>

<div id="main">

<div id="content">

<h1><?php _e('404 Error', 'newtek'); ?></h1>

	<p><?php _e('We cannot seem to find what you were looking for.', 'newtek'); ?></p>
	<p><?php _e('Maybe we can still help you.', 'newtek'); ?></p>

	<ul>
		<li><?php _e('You can search our site using the form provided below.', 'newtek'); ?>

<p><?php get_search_form(); ?></p>

</li>
	</ul>

<?php _e('Click', 'newtek'); ?> <a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('here', 'newtek'); ?></a> <?php _e('to return to the main page.', 'newtek'); ?>

</div>

<?php get_sidebar(); ?>

</div>

<div class="breaker"></div>

</div>

<?php get_footer(); ?>
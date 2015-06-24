<?php get_header(); ?>

<div id="main">

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
<div class="post-date"><?php _e('Posted on ', 'newtek'); ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_time(get_option('date_format').', '.get_option('time_format')) ?></a><?php _e(' By ', 'newtek'); ?><?php the_author_posts_link(); ?></div>

<?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail('category-thumb', array('class' => 'alignnone')); ?>
   </a>
 <?php endif; ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_content('Continue Reading &#8594;'); ?>

</div>

<div class="authortek"> 
<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
<div class="authortekinfo">
<h3><?php _e('About', 'newtek'); ?> <?php the_author_posts_link(); ?></h3>
<p><?php the_author_meta('description'); ?></p>
</div>
</div>

<div class="commentstext"><?php
  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', '');
?> <?php _e('Categories: ', 'newtek'); ?><?php the_category(', '); ?> <?php the_tags(); ?></div>

<div class="post-navigation">
<div class="previous-post"><?php previous_post_link(); ?></div>
<div class="next-post"><?php next_post_link(); ?></div>
</div>

<div class="breaker"></div>

<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.', 'newtek'); ?></p><?php endif; ?>

<?php wp_link_pages(array('next_or_number'=>'next', 'previouspagelink' => ' &laquo; ', 'nextpagelink'=>' &raquo;')); ?>

<?php comments_template(); ?>

</div>

<?php get_sidebar(); ?>

</div>

<div class="delimiter"></div>

</div>

<?php get_footer(); ?>
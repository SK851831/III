<?php

if ( post_password_required() )
	return;
?>
	<?php if ( have_comments() ) : ?>
		<h2>
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'newtek' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 30,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
			<h1><?php _e( 'Comment navigation', 'newtek' ); ?></h1>
			<?php previous_comments_link( __( '&larr; Older Comments', 'newtek' ) ); ?>
			<?php next_comments_link( __( 'Newer Comments &rarr;', 'newtek' ) ); ?>
		<!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p><?php _e( 'Comments are closed.' , 'newtek' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

<!-- #comments -->
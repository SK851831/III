<div id="container2">
<div id="footer">

<div id="footer-sidebar">        
            <?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>
                    <?php dynamic_sidebar( 'footer-sidebar' ); ?>
            <?php } ?>
    </div>

<div class="footer-copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></div>
<div class="toplink"><a href="#"><?php _e('Back to Top &#8593;', 'newtek'); ?></a></div>
</div>
</div>
<?php wp_footer(); ?>
</body></html>
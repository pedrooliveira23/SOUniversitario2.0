<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->
	<footer class="page-footer teal">
          <div class="footer-copyright">
            <div class="container">
            © 2016 Só Universitário | <a class="white-text" href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?></a>
            </div>
          </div>
        </footer>
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>

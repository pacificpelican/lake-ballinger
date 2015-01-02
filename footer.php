<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Lake Ballinger
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'lake_ballinger' ) ); ?>"><?php printf( __( 'Powered by %s', 'lake_ballinger' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'lake_ballinger' ), '<a href="http://djmcloud.danieljmckeown.com/lakeballinger/" rel="theme">Lake Ballinger</a>', '<a href="http://lovebirdsconsulting.com" rel="designer">Love Birds Consulting</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
<script src="<?php bloginfo('template_directory'); ?>/more/js/jquery/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/more/js/foundation/foundation.js"></script>
<script>
    $(document).foundation();
  </script>
<script src="<?php bloginfo('template_directory'); ?>/more/js/jquery/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/more/js/foundation/foundation.js"></script>
<script>
      $(document).foundation();

      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>




<script src="<?php bloginfo('template_directory'); ?>/more/js/foundation/templates.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/more/js/foundation/marketing.js"></script>

</body>
</html>

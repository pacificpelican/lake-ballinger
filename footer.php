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

	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="site-info large-10 columns">
			
			<span class="sep">  </span>
			
		
<ul class="pricing-table">
  <li class="title"><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'lake_ballinger' ) ); ?>"><?php printf( __( 'Powered by %s', 'lake_ballinger' ), 'WordPress' ); ?></a></li>
  <li class="description"><?php printf( __( 'Theme: %1$s by %2$s', 'lake_ballinger' ), '<a href="http://djmcloud.danieljmckeown.com/lakeballinger/" rel="theme">Lake Ballinger</a>', '<a href="http://lovebirdsconsulting.com" rel="designer">Love Birds Consulting</a>' ); ?>
    version <?php $my_theme = wp_get_theme(); echo $my_theme->get( 'Version' ); ?></li>
</ul>
</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>

<script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/more/js/jquery/jquery.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/more/js/foundation/foundation.js"></script>
<script>
    $(document).foundation();
  </script>

<script>
      $(document).foundation();

      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>




<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/more/js/foundation/templates.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/more/js/foundation/marketing.js"></script>

</body>
</html>

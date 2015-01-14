<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Lake Ballinger
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


            <div class="large-4 columns">
<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
</div></div>

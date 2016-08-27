<?php
/**
 * The sidebar used in pages other than main home page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package non-profit-focus
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

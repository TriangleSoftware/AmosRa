<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amosra-triangle
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
<!--		<div class="site-info">-->
<!--			<a href="http://triangle.software/" rel="designer">Triangle Software © 2016</a>-->
<!--		</div><!-- .site-info -->
		<nav id="site-navigation" class="secondary-menu" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
		</nav>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

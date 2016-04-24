<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				Este  website  é  um projeto académico dos estudantes Luís Pinto, Ana Borges, Eunice Caeiro e Micael Duarte, da Licenciatura em Marketing da <a href="http://www.esce.ips.pt">ESCE</a>, não constituindo fonte de informação real da Quimbalar.
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
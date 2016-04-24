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
			
            
            <div style="float:left;"><img src="http://quimbalar.s3-eu-west-1.amazonaws.com/wp-content/uploads/2016/04/facebook-icon.png">&nbsp;&nbsp;&nbsp;<img src="http://quimbalar.s3-eu-west-1.amazonaws.com/wp-content/uploads/2016/04/youtube-icon.png"></div>
            
            <div style="float:right;"><img src="http://quimbalar.s3-eu-west-1.amazonaws.com/wp-content/uploads/2016/04/sgs-iso22000-icon.png">&nbsp;&nbsp;<img src="http://quimbalar.s3-eu-west-1.amazonaws.com/wp-content/uploads/2016/04/truste-verified-icon.png">&nbsp;&nbsp;<img src="http://quimbalar.s3-eu-west-1.amazonaws.com/wp-content/uploads/2016/04/norton-secured-powered-by-symantec-icon.png"></div>
            
            </div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
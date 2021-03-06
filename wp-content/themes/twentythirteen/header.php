<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75880662-1', 'auto');
  ga('send', 'pageview');

</script>

<script>
	jQuery(document).on("added_to_cart", function(event) {
		location.reload();
	});
</script>

<script>
function myAdd10(){
   var number = parseInt(document.getElementById('quantityInputToChange').value)+10;
    document.getElementById('quantityInputToChange').value = number.toString(); 
};
function myAdd100(){
	var number = parseInt(document.getElementById('quantityInputToChange').value)+100;
    document.getElementById('quantityInputToChange').value = number.toString(); 
}; 
</script>

	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
                <a href="http://quimbalar.herokuapp.com/area-de-cliente" style="float:right;margin-left:10px">Área de Cliente</a>
                <a href="http://quimbalar.herokuapp.com/carrinho-de-compras" style="float:right;">
				<?php if(is_user_logged_in() ) { echo "<img src=\"http://quimbalar.s3-eu-west-1.amazonaws.com/wp-content/uploads/2016/04/carrinho-de-compras-quimbalar";
				 global $woocommerce; if($woocommerce->cart->get_cart_contents_count() == 0) echo "-vazio.png\" id=\"carrinho\">"; else echo ".png\" id=\"carrinho\">"; }?>
                <strong><span id="ajaxtotal"><?php if(is_user_logged_in()) wc_cart_totals_subtotal_html(); ?></span></strong></a><br>
                	<a href="http://quimbalar.herokuapp.com/"><img src="http://quimbalar.herokuapp.com/wp-content/uploads/2016/04/logoquimbalar-orig.png" ></a><br><br>
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">

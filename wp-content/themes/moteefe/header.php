<!DOCTYPE html>
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<style>
	.nav > li > a {
    font-family: "Barlow Condensed", sans-serif  !important
}
body ,h1, h2, h3, h4, h5, h6, .heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{
    font-family: "Barlow Condensed", sans-serif  !important
}
.footer-2 {
    background-color: transparent;
}
.footer-1 {
    background-color: transparent;
}
.box-section{
	padding-top: 30px !important;
}
footer{
	color:#fff;
	background: url(https://figtee.com/wp-content/uploads/2020/09/footer-bg.jpg);
}
</style>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'flatsome_after_body_open' ); ?>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'flatsome' ); ?></a>

<div id="wrapper">

	<?php do_action( 'flatsome_before_header' ); ?>

	<header id="header" class="header <?php flatsome_header_classes(); ?>">
		<div class="header-wrapper">
			<?php get_template_part( 'template-parts/header/header', 'wrapper' ); ?>
		</div>
	</header>

	<?php do_action( 'flatsome_after_header' ); ?>

	<main id="main" class="<?php flatsome_main_classes(); ?>">

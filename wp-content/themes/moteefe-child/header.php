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
.nav-dropdown>li>a, .nav-column>li>a{
    font-size: 20px
}
p.price.product-page-price span.woocommerce-Price-amount.amount {
    font-size: 30px;
    margin: 0 0 2px;
    text-align: left;
    line-height: 1.2em;
    font-weight: 700;
    color: #000000;
    /* text-indent: 20px; */
    text-transform: uppercase;
    text-shadow: 1px 1px 0 #FFF, -1px -1px 0 #FFFFFF, 1px -1px 0 #FFF, -1px 1px 0 #FFF, 3px 3px 5px #c8c8c8;
}
.product-info .price-wrapper .price {
    font-size: 26px;
}

.product_meta>span {
    font-size: 20px;
    font-weight: 500;
}
.tab-panels .panel{
	font-size: 20px
}
.how-to-buy span ,.how-to-buy{
    font-size: 20px;
    font-weight: 500;
}
.product-tabs a {
    font-size: 27px !important;
    color: #222 !important;
    padding: 10px 25px !important;
}
.shop-page-title.featured-title .title-overlay {
    background-color: #292929;
    background-image: url(https://demo2.wpopal.com/x-street/wp-content/uploads/2018/12/pattern_dark.png);
    background-position: center center;
}
.product-small p.name.product-title {
    font-size: 20px;
    text-transform: uppercase;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    height: 56px;
    margin-bottom: 3px;
    font-weight: 500;
}
.product-small span.price {
    font-size: 22px;
}
.footer-2 {
    background-color: transparent;
}
.related-products-wrapper  .product-section-title {
	font-size: 30px;
}
.badge-inner.secondary.on-sale{
    border-radius: 0px;
}
#footer .footer-1 ul.menu>li+li{
	border-top:none;
}
#footer .footer-1 ul.menu li::before {
    background-color: #e23c3c;
    border-radius: 50%;
    content: "";
    display: inline-block;
    margin-right: 5px;
    height: 7px;
    width: 7px;
}
#footer .icon-footer-bottom .col ,#footer .image-bottom-footer  .col,.footer-2 .col {
	padding-bottom: 0;
	margin-bottom: 0
}
.footer-2{
	border-top: 1px solid;
}
@media screen and (max-width: 767px){
	#footer .footer-1 ul.menu li {
	    width: auto;
	    float: left;
	    height: auto;
	    list-style: none;
	    margin: 0 13px 3px 0;
	}
}
.footer-1 {
    background-color: transparent;
}
.box-section{
	padding-top: 30px !important;
}
#footer .sidebar-wrapper.ul-reset .widget_nav_menu,#footer .sidebar-wrapper.ul-reset .widget_text  {
    padding: 0;
    margin: 0;
}
footer{
	color:#fff;
	background: url(https://figtee.com/wp-content/uploads/2020/09/footer-bg.jpg);
}
main#main {
    background-color: #f8f8f8;
    background-image: url(https://figtee.com/wp-content/uploads/2020/09/pattern_light2.png);
    background-position: center center;
    background-size: auto;
    background-repeat: repeat;
    background-attachment: scroll;
}
.row-after-product .col.small-12.large-12,.row-after-product-1 .col.medium-2.small-6{
	padding-bottom: 0;
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

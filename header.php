<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<?php wp_head(); ?>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/ht.js"></script>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ht.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ht-mobile.css">
	</head>

	<style media="screen">
		.nav-header > ul > li.menu-item-has-children > a::after{
			background-image: url('<?php bloginfo('template_url'); ?>/img/ht-arrow-down.svg')!important;
		}
	</style>
<?php $ht_setting__sitelayout = get_theme_mod( 'ht_setting__sitelayout', 'wide' ); ?>
<?php $ht_searchtitle = get_theme_mod( 'ht_setting__searchtitle', __( 'How can we help?', 'knowall' ) ); ?>
<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage" <?php ht_output_body_attributes(); ?>>
	<div id="top-of-page">
	</div>
<div class="ht-sitecontainer ht-sitecontainer--<?php echo esc_attr( $ht_setting__sitelayout ); ?>">

<!-- .site-header -->
<div class="site-header">

	<?php if ( is_front_page() ) { ?>
		<script>
		$(function(){
			$('.slider').bxSlider({
				mode: 'fade',
				controls: false,
				pager: false,
				auto: true,
				pause:4000,
				randomStart: true
			});
		});
	</script>
		<style media="screen">
			.site-header .site-header__banner{
				/* background-color: rgba(19, 48, 97, 0.5)!important; */
				background-color: transparent!important;
			}

			.slider-img.a{
				background-image: url('<?php bloginfo('template_url'); ?>/img/slider/a.jpg');
			}
			.slider-img.b{
				background-image: url('<?php bloginfo('template_url'); ?>/img/slider/b.jpg');
			}
			.slider-img.c{
				background-image: url('<?php bloginfo('template_url'); ?>/img/slider/c.jpg');
			}
			.slider-img.d{
				background-image: url('<?php bloginfo('template_url'); ?>/img/slider/d.jpg');
			}
			.slider-img.e{
				background-image: url('<?php bloginfo('template_url'); ?>/img/slider/e.jpg');
			}
			.slider-img.f{
				background-image: url('<?php bloginfo('template_url'); ?>/img/slider/f.jpg');
			}
			.slider-img.g{
				background-image: url('<?php bloginfo('template_url'); ?>/img/slider/g.jpg');
			}
			.slider-img.h{
				background-image: url('<?php bloginfo('template_url'); ?>/img/slider/h.jpg');
			}
			.slider-img.i{
				background-image: url('<?php bloginfo('template_url'); ?>/img/slider/i.jpg');
			}
			.slider-img.j{
				background-image: url('<?php bloginfo('template_url'); ?>/img/slider/j.jpg');
			}
			.slider-img.k{
				background-image: url('<?php bloginfo('template_url'); ?>/img/slider/k.jpg');
			}
		</style>
		<div class="slider-container">
			<div class="slider">
				<div> <div class="slider-img a"></div> </div>
				<div> <div class="slider-img b"></div> </div>
				<div> <div class="slider-img c"></div> </div>
				<div> <div class="slider-img d"></div> </div>
				<div> <div class="slider-img e"></div> </div>
				<div> <div class="slider-img f"></div> </div>
				<div> <div class="slider-img g"></div> </div>
				<!-- <div> <div class="slider-img h"></div> </div> -->
				<!-- <div> <div class="slider-img i"></div> </div> -->
				<!-- <div> <div class="slider-img j"></div> </div> -->
				<!-- <div> <div class="slider-img k"></div> </div> -->
			</div>
		</div>
	<?php } ?>

	<header class="site-header__banner" itemscope itemtype="http://schema.org/WPHeader">
	<div class="ht-container">

		<!-- .site-logo -->
		<div class="site-logo">
			<a href="<?php echo esc_url( apply_filters( 'ht_knowall_header_logo_url', home_url() ) ); ?>" data-ht-sitetitle="<?php bloginfo( 'name' ); ?>">
				<?php $theme_logo = get_theme_mod( 'ht_setting__themelogo', get_template_directory_uri() . '/img/logo.png' ); ?>
				<?php if ( '' != $theme_logo ) : ?><img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( $theme_logo ); ?>" /><?php endif; ?></a>

				<!-- <?php if ( is_front_page() ) : ?>
					<h1 class="site-logo__title" itemprop="headline"><?php bloginfo( 'name' ); ?></h1>
				<?php else : ?>
					<meta itemprop="headline" content="<?php bloginfo( 'name' ); ?>">
				<?php endif; ?> -->

			<div class="ht-tagline">
				Your How-To Guide for Technology
			</div>
		</div>
		<!-- /.site-logo -->

		<?php if ( has_nav_menu( 'nav-site-header' ) ) : ?>
			<!-- .nav-header -->
			<nav class="nav-header" itemscope itemtype="https://schema.org/SiteNavigationElement">
				<button id="ht-navtoggle" class="nav-header__mtoggle"><span><?php echo esc_html_e( 'Menu', 'knowall' ); ?></span></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'nav-site-header',
						'menu_class'      => 'nav-header__menuwrapper',
						'container'       => false,
						'container_id'    => false,
						'container_class' => false,
						'depth'           => 2,
					)
				);
				?>
			</nav>
			<!-- /.nav-header -->
		<?php endif; ?>

	</div>
	</header>
	<!-- /.site-header -->

	<?php if ( is_front_page() || is_post_type_archive( 'ht_kb' ) || ( function_exists( 'ht_kb_is_ht_kb_front_page' ) && ht_kb_is_ht_kb_front_page() ) ) : ?>
		<!-- .site-header__search-->
		<div class="site-header__search">
			<div class="ht-container">

				<?php if ( '' != $ht_searchtitle ) : ?>
					<h2 class="site-header__title"><?php echo esc_html( $ht_searchtitle ); ?></h2>
				<?php endif; ?>

				<?php if ( function_exists( 'hkb_get_template_part' ) ) : ?>
					<?php hkb_get_template_part( 'hkb-searchbox' ); ?>
				<?php endif; ?>
			</div>


		</div>
		<div class="btn-tech-expert">
			<a href="https://www.hellotech.com/" target="_blank"><button><span>Need to chat with an expert?</span> <img src="<?php bloginfo('template_url'); ?>/img/icon-chat.svg" alt="HelloTech Chat"></button></a>
		</div>
		<!-- /.site-header__search -->
	<?php elseif ( is_home() || is_category() || is_tag() ) : ?>
		<?php
		$ht_page_for_posts = get_option( 'page_for_posts' );
		$ht_page_for_posts = get_the_title( $ht_page_for_posts );
		?>
		<div class="site-header__posts">
		<div class="ht-container">
			<h1 class="site-header__title"><?php echo esc_html( $ht_page_for_posts ); ?></h1>
		</div>
		</div>
	<?php endif; ?>

	<?php if ( is_404() ) : ?>
		<div class="ht-404msg">
			<!-- <div class="ht-404bg" style="background-image:url('<?php bloginfo('template_url'); ?>/img/HT-KB-404-bg.png');"></div> -->
			<div class="ht-404bg">
				<div class="ht-container">
					<img src="<?php bloginfo('template_url'); ?>/img/HT-KB-404-bg.png" alt="404 Background Image">
				</div>
			</div>
			<div class="ht-container">
				<h1 class="ht-404msg__title"><?php esc_html_e( '404 Error', 'knowall' ); ?></h1>
				<h2 class="ht-404msg__tagline"><?php esc_html_e( 'This page has been abducted by aliens', 'knowall' ); ?></h2>
			</div>
		</div>
	<?php endif; ?>


</div>
<!-- /.site-header -->


<div class="dimmer">
</div>

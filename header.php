<!DOCTYPE html>

<html class="no-js" lang="en">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content=" maximum-scale=5.0, user-scalable=yes, width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <title><?php wp_title(""); ?></title>

    <?php if(!is_404()): ?>
    <link rel="stylesheet" href="https://use.typekit.net/gps6lee.css">
    <?php //miniCSS::url( 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700' ); ?>
    <?php endif; ?>

    <?php wp_head()?>

    <?php // Setting up Google Analytics - could include more than just Google: Site settings > Admin
		$google_analytics = get_field( "google_analytics", 'option' );

		if(!empty($google_analytics)):
			echo $google_analytics;
		else:
			// Do nothing
		endif;
	?>

</head>

<body <?php body_class(); ?>>

    <a href="#skiptomaincontent" style="display:none;">Skip to main content</a>


    <header class="site-header <?php echo is_front_page() ? 'front-header' : 'int-header'; ?> has-webp">
        <div class="header-top">
            <div class="header-logo">
                <?php site_logo('logo.png') ?>
            </div>
            <div class="menu-trigger">
                <div class="nav-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <nav>
            <?php wp_nav_menu( array(
                'menu' 		=> 'Main',
                'container_class' => 'menu-wrap',
                'menu_id'	=> 'menu-main',
                'menu_class' => 'main-menu',
        )); ?>
        </nav>
    </header>


    <?php if (!is_front_page()) { ?>
    <div class="internal-header-images" <?php header_images() ?>>
        <section class="page-title">


            <?php if (is_search()): ?>
            <div class="headline">Search Results</div>
            <?php elseif (is_home() or is_archive()): ?>
            <h1>Blog</h1>
            <?php elseif (is_single()): ?>
            <div class="headline">Blog</div>
            <?php else: ?>
            <h1>
                <?the_title();?>
            </h1>
            <?php endif; ?>

            <div class="site-crumbs"><?php echo __salaciouscrumb(); ?></div>
        </section>
    </div>

    <? } ?>





    <?php  ?>
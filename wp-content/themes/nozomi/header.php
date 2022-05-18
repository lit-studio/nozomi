<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#F2F0ED">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <?php wp_head(); ?>
    <style>
        .preloader {
        left: 0;
        top: 0;
        position: fixed;
        width: 100vw;
        height: 100vh;
        background-color: var(--color-bg);
        z-index: 10000;
        opacity: 1;
        }
    </style>
</head>

<body  <?php body_class(); ?>>
<div class="preloader preloader--js"></div>
<div id="site" class="site">
<!-- <div id='cursor' class="cursor"></div> -->
<header class="c-header c-header--js">

    <div class="c-header-wrap">
        <div class="c-header-logo">
            <a  class="c-header-logo-item" href="<?php echo home_url('/'); ?>" title="<?php echo bloginfo('name'); ?>" rel="home">
                <img class="logo" title='Nozomi Health' src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt=""/>
            </a>
        </div>
        <div class="c-header-right">
            <div class="c-header-right-wrap">
                <div class="c-header-menu c-header-menu--js">
                    <?php  wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => '', 'items_wrap' => '<ul>%3$s</ul>', 'container' => ''));  ?>
                </div>
                <div class="c-header-btns">
                    <div class="c-header-btns-btn">
                        <button class="btn btn-menu btn-menu--js">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c-header-bg c-header-bg--js"></div>
    <?php /*
    <div class="c-header-mobile c-header-mobile--js">
        <div class="c-header-mobile-wrap">
            <div class="c-header-mobile-top">
                <div class="block-menu">
                <?php  wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => '', 'items_wrap' => '<ul>%3$s</ul>', 'container' => ''));  ?>
                </div>
            </div>
        </div>
    </div>
    */ ?>
</header>
<div class="c-header-trigger c-header-trigger--js"></div>
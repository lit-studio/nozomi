<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#246bae">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <?php wp_head(); ?>
</head>

<body  <?php body_class(); ?>>
<div id="site" class="site">
<header class="c-header c-header--js">
    <div class="c-header-wrap">
        <div class="c-header-logo">
            <a  class="c-header-logo-item" href="<?php echo home_url('/'); ?>" title="<?php echo bloginfo('name'); ?>" rel="home">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""/>
            </a>
        </div>
        <div class="c-header-right">
            <div class="c-header-btns">
                <div class="c-header-btns-wrap">
                    <div class="c-header-btns-btn">
                        <button class="btn burger btn-menu btn-menu--js">s
                            <div class="br br-1"></div>
                            <div class="br br-2"></div>
                            <div class="br br-3"></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c-header-mobile c-header-mobile--js">
        <div class="c-header-mobile-wrap">
            <div class="c-header-mobile-top">
                <div class="block-menu">
                <?php  wp_nav_menu(array('theme_location' => 'primary1', 'fallback_cb' => '', 'items_wrap' => '<ul>%3$s</ul>', 'container' => ''));  ?>
                </div>
            </div>
        </div>
    </div>
</header>



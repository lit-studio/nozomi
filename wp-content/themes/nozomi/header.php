<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#F2F0ED">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <?php wp_head(); ?>
    <style>
        /* .preloader { */
        /* left: 0;
        top: 0;
        position: fixed;
        width: 100vw;
        height: 100vh; */
        /* background-color: var(--color-bg); */
        /* z-index: 10000; */
        /* opacity: 1; */
        /* } */
    </style>
</head>

<body  <?php body_class(); ?> >

<div id="site" class="site">
<div class="preloader preloader--js">
    <div class="preloader-wrap">
        <div class="preloader-desc">
            <div class="preloader-desc-line">
                <div class="preloader-desc-line-wrap preloader-desc-line-1--js">
                    <span>It’s easy to feel hopeful on a beautiful day like today.</span>
                </div>  
            </div>
            <div class="preloader-desc-line">               
                <div class="preloader-desc-line-wrap preloader-desc-line-2--js">
                    <span>But in the end we all face difficulties.</span>
                </div> 
            </div>
            <div class="preloader-desc-line">                
                <div class="preloader-desc-line-wrap preloader-desc-line-3--js">
                    <span>Everyone has dark days when they feel alone, lost and buried.</span>
                </div>
            </div>
            <div class="preloader-desc-line">
                <div class="preloader-desc-line-wrap preloader-desc-line-4--js">
                    <span>And the most powerful things that helps us move forward is a</span><span class="preloader-desc-cursive preloader-desc-cursive--js">hope</span>
                </div>
            </div>
        </div>
        <div class="preloader-bold">
            <div class="preloader-bold-line preloader-bold-line--js">
                <span>And we want to become a hope for those who need it most</span>
            </div>            
        </div>
        <div class="preloader-link">
            <div class="item-link">
                <span                   
                    class="item-link--link preloader-close--js">
                    Skip Intro
                </span>
            </div>
        </div>
    </div>
</div>
<div class="preloader-bg preloader-bg--js"></div>
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

    <div class="c-header-mobile c-header-mobile--js">
        <div class="c-header-mobile-wrap">
            <div class="c-header-mobile-top">
                <div class="block-menu">
                <?php  wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => '', 'items_wrap' => '<ul>%3$s</ul>', 'container' => ''));  ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="c-header-bg c-header-bg--js"></div>
</header>
<div class="c-header-trigger c-header-trigger--js"></div>
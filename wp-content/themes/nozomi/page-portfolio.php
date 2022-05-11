<?php
/*
 * Template name: Porfolio
*/
get_header();
?>
    <main id="primary" class="site-main">
        <div class="p-portfolio-content">            
            <div class="p-portfolio-wrap">
                <section class="index-portfolio">
                    <div class="index-wrap">
                        <div class="item">
                            <div class="item-title">
                                <div class="item-title--title">
                                    Solving challenges that will lead us to healthier and happier life
                                    <?php /*
                                        the_title();
                                        */ ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="p-portfolio-portfolios">
                    <section class="portfolios">
                        <div class="portfolios-wrap">
                            <div class="portfolios-list">
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="item-img">
                                            <img class="img"
                                                src="<?php echo get_template_directory_uri() ?>/assets/images/portfolio/portfolio-01.jpg"
                                                alt=""/>                                              
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="item-img">
                                            <img class="img"
                                                src="<?php echo get_template_directory_uri() ?>/assets/images/portfolio/portfolio-02.jpg"
                                                alt=""/>                                              
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="item-img">
                                            <img class="img"
                                                src="<?php echo get_template_directory_uri() ?>/assets/images/portfolio/portfolio-03.jpg"
                                                alt=""/>                                              
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <section class="nav">
                    <div class="nav-wrap">
                        <div class="nav-mobile-btns">
                            <button class='nav-mobile-btn nav-mobile-btn--js'><span class='nav-mobile-btn-text'>All works</span></button>
                        </div>
                        <div class="nav-menu nav-menu--js">
                            <ul>
                                <li class='menu-item menu-item-type-custom menu-item-object-custom'><a href="#">All works</a></li>
                                <li class='menu-item menu-item-type-custom menu-item-object-custom  current-menu-item'><a href="#">Healthtech</a></li>
                                <li class='menu-item menu-item-type-custom menu-item-object-custom'><a href="#">Medtech & Pharma</a></li>
                         
                            </ul>
                        </div>
                        <div class="nav-menu-bg nav-menu-bg--js"></div>
                    </div>
                </section>
            </div>
        </div>
    </main><!-- #main -->

<?php

get_footer();
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
                                    <a href="#"  class="item-wrap">
                                        <div class="item-content">
                                            <div class="item-content-wrap ">
                                                <div class="item-tag">
                                                    <div class="item-tag--tag">
                                                        Incorpro
                                                    </div>
                                                </div>
                                                <div class="item-desc">
                                                    <div class="item-desc--desc">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis varius platea aliquam vel.
                                                    </div>
                                                </div>
                                                <div class="item-services">
                                                    <div class="item-services--service">
                                                        Monitoring & Diagnostics
                                                    </div>
                                                    <div class="item-services--service">
                                                        Treatment Selection
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-img">
                                            <picture class="picture">
                                                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/portfolio/portfolio-01@mobile.jpg" media="(max-width: 768px)">
                                                <img class="img picture-absolute" data-src="<?php echo get_template_directory_uri() ?>/assets/images/portfolio/portfolio-01.jpg" src="<?php echo get_template_directory_uri() ?>/assets/images/portfolio/portfolio-01.jpg">
                                            </picture>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="" class="item-wrap">
                                        <div class="item-content">
                                            <div class="item-content-wrap">
                                                <div class="item-tag">
                                                    <div class="item-tag--tag">
                                                        Incorpro
                                                    </div>
                                                </div>
                                                <div class="item-desc">
                                                    <div class="item-desc--desc">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis varius platea aliquam vel.
                                                    </div>
                                                </div>
                                                <div class="item-services">
                                                    <div class="item-services--service">
                                                        Monitoring & Diagnostics
                                                    </div>
                                                    <div class="item-services--service">
                                                        Treatment Selection
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-img">
                                            <picture class="picture">
                                                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/portfolio/portfolio-02@mobile.jpg" media="(max-width: 768px)">
                                                <img class="img picture-absolute" data-src="<?php echo get_template_directory_uri() ?>/assets/images/portfolio/portfolio-02.jpg" src="<?php echo get_template_directory_uri() ?>/assets/images/portfolio/portfolio-02.jpg">
                                            </picture>                                            
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="item-wrap">
                                        <div class="item-content">
                                            <div class="item-content-wrap">
                                                    <div class="item-tag">
                                                        <div class="item-tag--tag">
                                                            Incorpro
                                                        </div>
                                                    </div>
                                                    <div class="item-desc">
                                                        <div class="item-desc--desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis varius platea aliquam vel.
                                                        </div>
                                                    </div>
                                                    <div class="item-services">
                                                        <div class="item-services--service">
                                                            Monitoring & Diagnostics
                                                        </div>
                                                        <div class="item-services--service">
                                                            Treatment Selection
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="item-img">
                                            <picture class="picture">
                                                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/portfolio/portfolio-03@mobile.jpg" media="(max-width: 768px)">
                                                    <img class="img picture-absolute" data-src="<?php echo get_template_directory_uri() ?>/assets/images/portfolio/portfolio-03.jpg" src="<?php echo get_template_directory_uri() ?>/assets/images/portfolio/portfolio-03.jpg">
                                                </picture>                                             
                                        </div>
                                    </a>
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
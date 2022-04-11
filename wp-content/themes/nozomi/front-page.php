 <?php
 /*
Template Name: Front page
*/

get_header();



?>

    <main id="primary" class="site-main">
        <div class="p-home-content">
        <section class="index index-home">
            <div class="index-wrap">
                    <div class="item">
                        <div class="item-wrap">
                            <div class="item-content">
                                <div class="item-content-wrap">
                                    <div class="item-title">
                                        <div class="item-title--title">
                                        We make people believe in digital health innovations
                                        </div>
                                    </div>
                                    <div class="item-img">
                                        <div class="item-img-item"> 
                                            <img class="img"
                                                    src="<?php echo get_template_directory_uri() ?>/assets/images/home/illustration-bird.svg"
                                                    alt=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-bg">
                                <svg id="demo" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="100%" height="100%" viewBox="0 0 2560 1600">
                                    <defs>
                                    <radialGradient id="maskGradient">
                                        <stop offset="50%" stop-color="#fff"/>
                                        <stop offset="100%" stop-color="#000"/>
                                    </radialGradient>
                                    <mask id="theMask">
                                      <circle id="masker" r="150" fill="url(#maskGradient)" cx="800" cy="450" />
                                    </mask>
                                    </defs> 
                                        <image id="lines" xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/home/fold-bg-grad-min.jpg" x="0" y="0" width="100%" height="100%" />
                                        <g id="maskReveal" mask="url(#theMask)" > 
                                          <image id="regular" xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/home/fold-bg-hover-min.jpg" x="0" y="0" width="100%" height="100%" />
                                        </g>
                                        <!-- <circle id="ring" r="20" fill="none" stroke="#D54242" stroke-width="2" cx="800" cy="450" /> -->
                                        <circle id="dot" r="4" fill="#D54242" cx="800" cy="450" />
                                </svg>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        
        <section class="about">
                <div class="about-wrap">
                        <div class="about-cursive">
                            <div class="about-cursive--cursive">
                                What we are doing
                            </div>
                        </div>
                        <div class="about-desc">
                            <div class="about-desc--desc">
                            From mental health and virtual care apps, to condition management and remote monitoring tools, we’ve helped medtech and pharmaceutical companies develop flagship health and software as medical device (SAMD) products - driving positive change in patient outcomes.
                            </div>
                        </div>

                    <div class="about-middle">
                        <div class="about-middle-row">
                            <div class="about-middle-col">
                                <div class="item">
                                    <div class="item-img">
                                        <img class="img"
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/home/home-case-01-min.jpg"
                                        alt=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="about-middle-col">
                                <div class="item">
                                    <div class="item-img">
                                        <img class="img"
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/home/home-case-02-min.jpg"
                                        alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-bottom">
                        <div class="about-bottom-row">
                            <div class="about-bottom-col">
                                <div class="item">
                                    <div class="item-img">
                                        <img class="img"
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/home/home-case-03-min.jpg"
                                        alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="perspective">
                <div class="perspective-wrap">
                    <div class="perspective-content">
                        <div class="perspective-cursive">
                            <div class="about-cursive--cursive">
                                Who we are
                            </div>
                        </div>
                        <div class="perspective-title">
                            <div class="perspective-title--title">
                            Different perspectives with one passionЗаписатися на діагностику
                            </div>
                        </div>
                        <div class="perspective-desc">
                            <div class="perspective-desc--desc">
                                Nozomi Health is a team of researchers, designers and software engineers who helps people believe that digital health innovations can and will help them. We partnering with a Digital Health companies to solve the most important challenges that will lead us to life healthier and happier life.
                            </div>
                        </div>
                        <div class="perspective-btns">
                            <div class="about-btns-btn">
                                <button class="btn  btn-modal--js" data-modal="c-modal-form">More about us</button>
                            </div>
                        </div>     
                    </div>
                    <div class="perspective-img">
                                <img class="img"
                                src="<?php echo get_template_directory_uri() ?>/assets/images/home/home-perspective-01-min.jpg"
                                alt=""/>
                        </div>
                </div>
                <div class="perspective-bg">
                    <svg id="demoPerspective" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="100%" height="100%" viewBox="0 0 2560 1600">
                        <defs>
                        <radialGradient id="maskGradientPerspective">
                            <stop offset="50%" stop-color="#fff"/>
                            <stop offset="100%" stop-color="#000"/>
                        </radialGradient>
                        <mask id="theMaskPerspective">
                            <circle id="maskerPerspective" r="150" fill="url(#maskGradientPerspective)" cx="800" cy="450" />
                        </mask>
                        </defs> 
                            <image id="linesPerspective" xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/home/about-bg-min.jpg" x="0" y="0" width="100%" height="100%" />
                            <g id="maskRevealPerspective" mask="url(#theMaskPerspective)" > 
                                <image id="regularPerspective" xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/home/about-bg-hover-min.jpg" x="0" y="0" width="100%" height="100%" />
                            </g>
                            <!-- <circle id="ring" r="20" fill="none" stroke="#D54242" stroke-width="2" cx="800" cy="450" /> -->
                            <circle id="dotPerspective" r="4" fill="#D54242" cx="800" cy="450" />
                    </svg>
                </div>
        </section>
        <section class="work">
                <div class="work-wrap">
                    <div class="work-title">
                        <div class="work-title--title">
                        Different perspectives with one passionЗаписатися на діагностику
                        </div>
                    </div>
                    <div class="work-desc">
                        <div class="work-desc--desc">
                            Залиште свої контакти нижче і наші адміністратори зв'яжуться з вами найближчим часом.
                        </div>
                    </div>
                    <div class="work-content">
                        <div class="work-content-left">
                            <div class="work-content-list">
                                <div class="item">
                                    <div class="item-title">
                                        <div class="item-title--title">
                                        We make people believe in digital health innovations
                                        </div>
                                    </div>
                                    <div class="item-desc">
                                        <div class="item-desc--desc">
                                        We make people believe in digital health innovations
                                        </div>
                                    </div>
                                    <div class="item-link">
                                        <a href='/' class="item-link--link">
                                            We make people believe in digital health innovations
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-title">
                                        <div class="item-title--title">
                                        We make people believe in digital health innovations
                                        </div>
                                    </div>
                                    <div class="item-desc">
                                        <div class="item-desc--desc">
                                        We make people believe in digital health innovations
                                        </div>
                                    </div>
                                    <div class="item-link">
                                        <a href='/' class="item-link--link">
                                            We make people believe in digital health innovations
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="work-content-right">
                            <div class="work-img">
                                <img class="img"
                                src="<?php echo get_template_directory_uri() ?>/assets/images/home/illustration-bird.svg"
                                alt=""/>
                        </div>
                        </div>
                    </div>
   
                </div>
        </section>
        <section class="perspective">
                <div class="perspective-wrap">
                    <div class="perspective-title">
                        <div class="perspective-title--title">
                        Different perspectives with one passionЗаписатися на діагностику
                        </div>
                    </div>
                    <div class="perspective-desc">
                        <div class="perspective-desc--desc">
                            Залиште свої контакти нижче і наші адміністратори зв'яжуться з вами найближчим часом.
                        </div>
                    </div>
                    <div class="perspective-btns">
                        <div class="about-btns-btn">
                            <button class="btn btn-blue btn-modal--js" data-modal="c-modal-form">More about us</button>
                        </div>
                    </div>
                    <div class="perspective-img">
                            <img class="img"
                                                 src="<?php echo get_template_directory_uri() ?>/assets/images/home/illustration-bird.svg"
                                                 alt=""/>
                    </div>
                </div>
        </section>
    </div>

    </main><!-- #main -->
<?php
get_footer();

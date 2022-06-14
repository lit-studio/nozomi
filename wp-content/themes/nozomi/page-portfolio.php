<?php
/*
 * Template name: Porfolio
*/
get_header();
?>
    <main id="primary" class="site-main">
        <div class="p-portfolio-content">
            <div class="p-portfolio-wrap">
                <?php
                $title = get_field('title', 9);
                if ($title) { ?>
                    <section class="index-portfolio">
                        <div class="index-wrap">
                            <div class="item">
                                <div class="item-wrap">
                                    <div class="item-content gsap-anim--js">
                                        <div class="item-content-wrap  ">
                                            <div class="item-title">
                                                <div class="item-title--title">
                                                    <?php echo $title; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-bg papper-bg--js">
                                        <svg id="demo" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                            width="100%" height="100%" viewBox="0 0 2560 1600">
                                            <defs>
                                                <radialGradient id="maskGradient">
                                                    <stop offset="50%" stop-color="#fff"/>
                                                    <stop offset="100%" stop-color="#000"/>
                                                </radialGradient>
                                                <mask id="theMask">
                                                    <circle id="masker" r="300" fill="url(#maskGradient)" cx="800" cy="450"/>
                                                </mask>
                                            </defs>
                                            <?php
                                            $bg_block_1 = get_field('bg_block_1');
                                            $bg_hover_block_1 = get_field('bg_hover_block_1');
                                            ?>
                                            <image id="lines"
                                                xlink:href="<?php /* echo $bg_block_1; */ ?> <?php echo get_template_directory_uri() ?>/assets/images/home/fold-bg-grad-min.jpg"
                                                x="0" y="0" width="100%" height="100%"/>
                                            <g id="maskReveal" mask="url(#theMask)">
                                                <image id="regular"
                                                    xlink:href="<?php /*echo $bg_hover_block_1; */?> <?php echo get_template_directory_uri() ?>/assets/images/home/fold-bg-hover-min.jpg"
                                                    x="0" y="0" width="100%" height="100%"/>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>
                <div class="p-portfolio-portfolios">
                    <div class="p-portfolio-portfolios-wrap">
                        <section class="nav">
                            <div class="nav-wrap">
                                <div class="nav-mobile-btns">
                                    <button class='nav-mobile-btn nav-mobile-btn--js'><span class='nav-mobile-btn-text'>All posts</span>
                                    </button>
                                </div>
                                <div class="nav-menu nav-menu--js  gsap-nav--js">
                                    <?php 
                                    $curr_id = get_queried_object()->term_id;
                                    $terms = get_terms('portfolio_cat');

                                    if ($terms && !is_wp_error($terms)) {
                                        echo "<ul>";
                                        ?>
                                        <li class='menu-item menu-item-type-custom menu-item-object-custom current-menu-item'><a
                                                    href="<?php echo get_permalink(9); ?>">
                                                All works</a></li>
                                        <?php

                                        foreach ($terms as $term) {

                                            ?>
                                            <li class='menu-item menu-item-type-custom menu-item-object-custom <?php if ($term->term_id == $curr_id) { ?> current-menu-item<?php } ?> '>
                                                <a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
                                            </li>

                                        <?php }

                                        echo "</ul>";
                                    }
                                    ?>

                                </div>
                                <div class="nav-menu-bg nav-menu-bg--js"></div>
                            </div>
                        </section>
                        <section class="portfolios">
                            <div class="portfolios-wrap">
                                <div class="portfolios-list gsap-anim--js">
                                    <?php

                                    query_posts(

                                        array('post_type' => 'portfolio',
                                            'nopaging' => true,
                                        )
                                    );
                                    if (have_posts()) {

                                    ?>
                                    <?php
                                    while (have_posts()) {
                                    the_post();

                                    ?>
                                    <div class="item">
                                        <a href="<?php the_permalink(); ?>" class="item-wrap">
                                            <div class="item-content">
                                                <div class="item-content-wrap ">
                                                    <?php
                                                    $case_name = get_field('case_name');

                                                    if ($case_name) { ?>
                                                        <div class="item-tag">
                                                            <div class="item-tag--tag">
                                                                <?php echo $case_name; ?>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <div class="item-desc">
                                                        <div class="item-desc--desc">
                                                        <?php the_title(); ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $categories = get_the_terms(get_the_ID(), 'portfolio_cat');
                                                    if ($categories) { ?>
                                                    <div class="item-services">
                                                        <?php foreach ($categories as $category) { ?>
                                                            <div class="item-services--service">

                                                                <?php echo $category->name; ?>

                                                            </div>
                                                        <?php } ?>

                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <?php
                                        $case_image = get_field('case_image');
                                        $case_image_mobile = get_field('case_image_mobile');
                                        if ($case_image || $case_image_mobile) { ?>
                                            <div class="item-img">
                                                <picture class="picture">
                                                    <source srcset="<?php echo $case_image_mobile['sizes']['home_1']; ?>"
                                                            media="(max-width: 768px)">
                                                    <img class="img picture-absolute"
                                                        data-src="<?php echo $case_image['sizes']['home_2']; ?>"
                                                        src="<?php echo $case_image['sizes']['home_2']; ?>">
                                                </picture>
                                            </div>
                                        <?php } ?>
                                    </a>
                                </div>
                                <?php }
                                ?>
                                <?php }
                                wp_reset_query(); ?>

                            </div>
                        </section>
                    </div>
                </div> 
            </div>
        </div>
    </main><!-- #main -->

<?php

get_footer();
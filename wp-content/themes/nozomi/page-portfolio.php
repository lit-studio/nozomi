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
                                <div class="item-title">
                                    <div class="item-title--title">
                                        <?php echo $title; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>
                <div class="p-portfolio-portfolios">
                    <section class="portfolios">
                        <div class="portfolios-wrap">
                            <div class="portfolios-list">
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
                                    <div class="item-wrap">
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
                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </div>
                                                </div>
                                                <?php
                                                $categories = get_the_terms(get_the_ID(), 'portfolio_cat');
                                                if ($categories) { ?>
                                                <div class="item-services">
                                                    <?php foreach ($categories as $category) { ?>
                                                        <div class="item-services--service">
                                                        <a href="<?php echo get_term_link($category->term_id); ?>">
                                                            <?php echo $category->name; ?>
                                                        </a>

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
                                </div>
                            </div>
                            <?php }
                            ?>
                            <?php }
                            wp_reset_query(); ?>

                        </div>
                </div>
                </section>
            </div>
            <section class="nav">
                <div class="nav-wrap">
                    <div class="nav-mobile-btns">
                        <button class='nav-mobile-btn nav-mobile-btn--js'><span class='nav-mobile-btn-text'>All posts</span>
                        </button>
                    </div>
                    <div class="nav-menu nav-menu--js">
                        <?php
                        $curr_id = get_queried_object()->term_id;
                        $terms = get_terms('portfolio_cat');

                        if ($terms && !is_wp_error($terms)) {
                            echo "<ul>";
                            ?>
                            <li class='menu-item menu-item-type-custom menu-item-object-custom'><a
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
        </div>
        </div>
    </main><!-- #main -->

<?php

get_footer();
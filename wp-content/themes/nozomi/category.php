<?php
get_header();
?>
    <main id="primary" class="site-main">

        <div class="p-blog-content">

            <div class="p-blog-wrap">

                <?php
                $text_blog = get_field('text_blog', 15);
                if ($text_blog) { ?>
                    <section class="index-blog">
                        <div class="index-wrap">
                            <div class="item gsap-anim--js">
                                <div class="item-title">
                                    <div class="item-title--title">
                                        <?php echo $text_blog; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>
                <div class="p-blog-blogs">

                    <section class="blogs">
                        <div class="blogs-wrap">
                            <div class="blogs-list gsap-anim--js">

                                <?php
                                global $query_string;
                                query_posts($query_string . "&nopaging=true");

                                if (have_posts()) {

                                    ?>
                                    <?php
                                    while (have_posts()) {
                                        the_post();

                                        ?>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <?php
                                                $blog_image = get_field('image');

                                                if ($blog_image) { ?>
                                                    <div class="item-left">
                                                        <div class="item-img">
                                                            <img class="img"
                                                                 src="<?php echo $blog_image['sizes']['blog_min']; ?>"
                                                                 alt=""/>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div class="item-right">
                                                    <div class="item-right-wrap">
                                                        <div class="item-right-top">
                                                            <div class="item-tag-time">
                                                                <div class="item-tag">
                                                                    <div class="item-tag--tag">
                                                                        <?php
                                                                        $category = get_the_category();
                                                                        $firstCategory = $category[0]->cat_name;
                                                                        echo $firstCategory; ?>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                                $min_read = get_field('read');


                                                                if ($min_read) { ?>
                                                                    <div class="item-time">
                                                                        <div class="item-time--time">
                                                                            <?php echo $min_read; ?> min read
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="item-date">
                                                                <div class="item-date--date">
                                                                    <?php the_time('d.m.Y'); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            <div class="item-title--title">
                                                                <?php the_title(); ?>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $desc = get_field('small_text');


                                                        if ($desc) { ?>
                                                            <div class="item-desc">
                                                                <div class="item-desc--desc">
                                                                    <?php echo $desc; ?>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                        <div class="item-link">
                                                            <a href='<?php the_permalink(); ?>'
                                                               target=""
                                                               class="item-link--link">
                                                                Dive into
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
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
                        <div class="nav-menu nav-menu--js gsap-anim--js">

                            <?php
                            $curr_id = get_queried_object()->term_id;
                            $terms = get_terms('category');

                            if ($terms && !is_wp_error($terms)) {
                                echo "<ul>";
                                ?>
                                <li class='menu-item menu-item-type-custom menu-item-object-custom'><a
                                        href="<?php echo get_permalink(15); ?>">All
                                        posts</a></li>
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
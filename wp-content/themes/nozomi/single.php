<?php
get_header();
?>
    <main id="primary" class="site-main">
        <div class="p-single-blog-content">
            <section class="index-blog">
                <div class="index-wrap">
                    <div class="item">
                        <div class="item-tag">
                            <div class="item-tag--tag">
                                <?php
                                $category = get_the_category();
                                $firstCategory = $category[0]->cat_name;
                                echo $firstCategory; ?>
                            </div>
                        </div>
                        <div class="item-title">
                            <div class="item-title--title">
                                <?php the_title(); ?>
                            </div>
                        </div>
                        <div class="item-date">
                            <div class="item-date-wrap">
                                <div class="item-date--date">
                                    <?php the_time('M d, Y'); ?>
                                </div>
                                <?php
                                $min_read = get_field('read');


                                if ($min_read) { ?>
                                    <div class="item-date--read">
                                        <?php echo $min_read; ?> min read
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="blog">
                <div class="blog-top">
                    <div class="blog-top-wrap">
                        <div class="blog-top-nav blog-top-nav-left">
                            <a class="blog-top-nav-link" href="<?php echo get_permalink(15); ?>">back to blog</a>
                        </div>
                        <?php
                        $blog_author = get_field('select_author');


                        if ($blog_author) { ?>
                            <div class="blog-top-center">
                                <div class="blog-top-autor">
                                    <?php echo $blog_author; ?>
                                </div>
                                <div class="blog-top-share">

                                </div>
                            </div>
                        <?php } ?>
                        <div class="blog-top-nav blog-top-nav-right">
                            <?php
                            $next = get_previous_post_link( '%link', 'next article', false );
                            echo str_replace( '<a ', '<a class="blog-top-nav-link" ', $next );
                            ?>

                        </div>
                    </div>
                </div>

                <?php
                $blog_image = get_field('image');
                $blog_image_description = get_field('description_image');

                if ($blog_image || $blog_image_description) { ?>
                    <div class="blog-img">
                        <div class="item">
                            <?php
                            if ($blog_image) { ?>
                                <div class="item-img">
                                    <img class="img"
                                         src="<?php echo $blog_image['sizes']['blog']; ?>"
                                         alt=""/>
                                </div>
                            <?php } ?>
                            <?php
                            if ($blog_image_description) { ?>
                                <div class="item-signature">
                                    <div class="item-signature--signature">
                                        <?php echo $blog_image_description; ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <div class="blog-content">
                    <div class="blog-content-wrap ">
                        <div class="c-article-content">
                            <?php if (have_posts()) : ?>

                                <?php while (have_posts()) : the_post(); ?>
                                    <?php the_content(); ?>
                                <?php endwhile; ?>

                            <?php else : ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

<?php
$featured_posts = get_field('other_posts_from_our_blog');
if( $featured_posts ): ?>
            <section class="posts">
                <div class="posts-wrap">
                    <div class="posts-title">
                        <div class="posts-title--title">
                            Other posts from our blog
                        </div>
                    </div>
                    <div class="posts-list">
    <?php foreach( $featured_posts as $post ):

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
    <?php endforeach;
    wp_reset_postdata(); ?>

                    </div>
                </div>
            </section>
<?php endif; ?>
        </div>
    </main><!-- #main -->

<?php

get_footer();
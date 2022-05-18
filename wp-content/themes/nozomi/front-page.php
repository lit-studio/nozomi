<?php
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
                                    <?php
                                    $text_1_block_1 = get_field('text_1_block_1');
                                    if ($text_1_block_1) { ?>
                                        <div class="item-title">
                                            <div class="item-title--title item-title--title--js">
                                                <?php echo $text_1_block_1; ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="item-img">
                                        <div class="item-img-item">
                                            <div id='hand_bird' class="item-img-item-lottie">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-bg">
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
                                           xlink:href="<?php echo $bg_block_1; ?>"
                                           x="0" y="0" width="100%" height="100%"/>
                                    <g id="maskReveal" mask="url(#theMask)">
                                        <image id="regular"
                                               xlink:href="<?php echo $bg_hover_block_1; ?>"
                                               x="0" y="0" width="100%" height="100%"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="portfolio">
                <div class="portfolio-wrap">
                    <?php
                    $text_2_block_1 = get_field('text_2_block_1');
                    if ($text_2_block_1) { ?>
                        <div class="portfolio-cursive">
                            <div class="portfolio-cursive--cursive">
                                <?php echo $text_2_block_1; ?>
                            </div>
                        </div>
                    <?php } ?>

                    <?php
                    $text_3_block_1 = get_field('text_3_block_1');
                    if ($text_3_block_1) { ?>
                        <div class="portfolio-desc">
                            <div class="portfolio-desc--desc">
                                <?php echo $text_3_block_1; ?>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="portfolio-middle">
                        <div class="portfolio-middle-row">
                            <div class="portfolio-middle-col">
                                <div class="item">
                                    <?php
                                    $video_1_link_id_block_1 = get_field('video_1_link_id_block_1');
                                    if ($video_1_link_id_block_1) { ?>
                                        <div class="item-video video--js video-little--js"
                                             data-set-vimeo-id="<?php echo $video_1_link_id_block_1; ?>">
                                            <span class="item-video--layout video-little--layout--js">
                                                <img class="item-video-bg video-little-bg--js"
                                                     src="<?php echo get_template_directory_uri() ?>/assets/images/home/home-little-video-bg-v3.png"
                                                     alt=""/>
                                            </span>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php
                            $image_block_1 = get_field('image_block_1');
                            if ($image_block_1) { ?>
                                <div class="portfolio-middle-col">
                                    <div class="item">
                                        <div class="item-img parallax-img-block--js">
                                            <?php /*
                                            <img class="img img--js"
                                                 src="<?php echo $image_block_1['sizes']['home_1']; ?>"
                                                 alt=""/>
                                            <img class="img"
                                                 src="<?php echo get_template_directory_uri() ?>/assets/images/home/home-case-02-2x-min.jpg"
                                                 alt=""/>
                                                 */ ?>
                                            <img class="img img--js"
                                                 src="<?php echo $image_block_1['url']; ?>"
                                                 alt=""/>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="portfolio-bottom">
                        <div class="portfolio-bottom-row">
                            <div class="portfolio-bottom-col">
                                <div class="item">
                                    <?php
                                    $video_2_link_id_block_1 = get_field('video_2_link_id_block_1');
                                    if ($video_2_link_id_block_1) { ?>
                                        <div class="item-video video--js  video-big--js"
                                             data-set-vimeo-id="<?php echo $video_2_link_id_block_1; ?>">
                                                <span class="item-video--layout video-big--layout--js">
                                                    <img class="item-video-bg video-big-bg--js"
                                                         src="<?php echo get_template_directory_uri() ?>/assets/images/home/home-big-video-bg.png"
                                                         alt=""/>
                                                </span>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $button_link_block_1 = get_field('button_link_block_1');
                    $button_text_block_1 = get_field('button_text_block_1');
                    if ($button_link_block_1 || $button_text_block_1) { ?>
                        <div class="portfolio-btns">
                            <div class="portfolio-btns-btn">
                                <a href="https://portfolio.remdev.pro/" target='_blank'
                                   class="btn btn-border btn-portfolio--js">
                                </a>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </section>
            <section class="about">
                <div class="about-wrap">
                    <div class="about-content">
                        <?php
                        $text_1_block_2 = get_field('text_1_block_2');
                        if ($text_1_block_2) { ?>
                            <div class="about-cursive">
                                <div class="about-cursive--cursive">
                                    <?php echo $text_1_block_2; ?>
                                </div>
                            </div>
                        <?php } ?>
                        <?php
                        $text_2_block_2 = get_field('text_2_block_2');
                        if ($text_2_block_2) { ?>
                            <div class="about-title">
                                <div class="about-title--title">
                                    <?php echo $text_2_block_2; ?>
                                </div>
                            </div>
                        <?php } ?>
                        <?php
                        $text_3_block_2 = get_field('text_3_block_2');
                        if ($text_3_block_2) { ?>
                            <div class="about-desc">
                                <div class="about-desc--desc">
                                    <?php echo $text_3_block_2; ?>
                                </div>
                            </div>
                        <?php } ?>
                        <?php
                        $button_link_block_2 = get_field('button_link_block_2');
                        $button_text_block_2 = get_field('button_text_block_2');
                        if ($button_link_block_2 || $button_text_block_2) { ?>
                            <div class="about-btns">
                                <div class="about-btns-btn">
                                    <a href="/" class="btn  btn-about--js"
                                    >
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <?php
                    $image_block_2 = get_field('image_block_2');
                    if ($image_block_2) { ?>
                        <div class="about-middle">
                            <div class="about-middle-wrap">
                                <div class="about-img">
                                    <div class="about-img-block parallax-img-block--js">
                                        <img class="img img--js"
                                             src="<?php echo $image_block_2['sizes']['home_2']; ?>"
                                             alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="about-trigger about-trigger--js"></div>
                </div>
                <div class="about-bg">
                    <svg id="demoPerspective" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                         width="100%" height="100%" viewBox="0 0 2560 1600">
                        <defs>
                            <radialGradient id="maskGradientPerspective">
                                <stop offset="50%" stop-color="#fff"/>
                                <stop offset="100%" stop-color="#000"/>
                            </radialGradient>
                            <mask id="theMaskPerspective">
                                <circle id="maskerPerspective" r="300" fill="url(#maskGradientPerspective)" cx="800"
                                        cy="450"/>
                            </mask>
                        </defs>

                        <?php
                        $bg_block_2 = get_field('bg_block_2');
                        $bg_hover_block_2 = get_field('bg_hover_block_2');
                        ?>

                        <image id="linesPerspective"
                               xlink:href="<?php echo $bg_block_2; ?>"
                               x="0" y="0" width="100%" height="100%"/>
                        <g id="maskRevealPerspective" mask="url(#theMaskPerspective)">
                            <image id="regularPerspective"
                                   xlink:href="<?php echo $bg_hover_block_2; ?>"
                                   x="0" y="0" width="100%" height="100%"/>
                        </g>
                    </svg>
                </div>
            </section>
            <section class="work">
                <div class="work-wrap">
                    <div class="work-top">
                        <?php
                        $text_1_block_3 = get_field('text_1_block_3');
                        if ($text_1_block_3) { ?>
                            <div class="work-cursive">
                                <div class="work-cursive--cursive">
                                    <?php echo $text_1_block_3; ?>
                                </div>
                            </div>
                        <?php } ?>
                        <?php
                        $text_2_block_3 = get_field('text_2_block_3');
                        if ($text_2_block_3) { ?>
                            <div class="work-title">
                                <div class="work-title--title">
                                    <?php echo $text_2_block_3; ?>
                                </div>
                            </div>
                        <?php } ?>
                        <?php
                        $text_3_block_3 = get_field('text_3_block_3');
                        if ($text_3_block_3) { ?>
                            <div class="work-desc">
                                <div class="work-desc--desc">
                                    <?php echo $text_3_block_3; ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="work-content">
                        <div class="work-content-left">
                            <div class="work-content-list">
                                <div class="item">
                                    <div class="item-wrap item-wrap--js">
                                        <?php
                                        $text_4_block_3 = get_field('text_4_block_3');
                                        if ($text_4_block_3) { ?>
                                            <div class="item-title">
                                                <div class="item-title--title">
                                                    <?php echo $text_4_block_3; ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php
                                        $text_5_block_3 = get_field('text_5_block_3');
                                        if ($text_5_block_3) { ?>
                                            <div class="item-desc">
                                                <div class="item-desc--desc">
                                                    <?php echo $text_5_block_3; ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php
                                        $link_1_block_3 = get_field('link_1_block_3');
                                        if ($link_1_block_3) { ?>
                                            <div class="item-link">
                                                <a href='<?php echo $link_1_block_3['url']; ?>'
                                                   target="<?php echo $link_1_block_3['target']; ?>"
                                                   class="item-link--link">
                                                    <?php echo $link_1_block_3['title']; ?>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-wrap item-wrap--js">
                                        <?php
                                        $text_6_block_3 = get_field('text_6_block_3');
                                        if ($text_6_block_3) { ?>
                                            <div class="item-title">
                                                <div class="item-title--title">
                                                    <?php echo $text_6_block_3; ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php
                                        $text_7_block_3 = get_field('text_7_block_3');
                                        if ($text_7_block_3) { ?>
                                            <div class="item-desc">
                                                <div class="item-desc--desc">
                                                    <?php echo $text_7_block_3; ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php
                                        $link_2_block_3 = get_field('link_2_block_3');
                                        if ($link_2_block_3) { ?>
                                            <div class="item-link">
                                                <a href='<?php echo $link_2_block_3['url']; ?>'
                                                   target="<?php echo $link_2_block_3['target']; ?>"
                                                   class="item-link--link">
                                                    <?php echo $link_2_block_3['title']; ?>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="work-content-right">
                            <div class="work-img">
                                <img class="img img-desk"
                                     src="<?php echo get_template_directory_uri() ?>/assets/images/home/home-flowers.svg"
                                     alt=""/>
                                <img class="img img-mobile"
                                     src="<?php echo get_template_directory_uri() ?>/assets/images/home/home-flowers-mobile.svg"
                                     alt=""/>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <?php
            $featured_posts = get_field('select_articles');
            if ($featured_posts) { ?>
                <section class="news">
                    <div class="news-wrap">
                        <div class="news-block">
                            <div class="news-row">
                                <?php foreach ($featured_posts as $post) {

                                    ?>
                                    <div class="news-col">
                                        <a class="item" href='<?php the_permalink(); ?>'>
                                            <?php
                                            $blog_image = get_field('image');

                                            if ($blog_image) { ?>
                                                <div class="item-img">
                                                    <img class="img"
                                                         src="<?php echo $blog_image['sizes']['blog_min']; ?>"
                                                         alt=""/>
                                                </div>
                                            <?php } ?>
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
                                        </a>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>
        </div>

    </main><!-- #main -->
<?php
get_footer();

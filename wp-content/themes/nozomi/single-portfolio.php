<?php
get_header();
?>
    <main id="primary" class="site-main">
        <div class="p-single-portfolio-contents">
            <div class="p-single-portfolio-wrap">
                <section class="index-single-portfolio">
                    <div class="index-wrap">
                        <div class="item">
                            <div class="item-wrap">
                                <div class="item-content gsap-anim--js">
                                    <div class="item-content-wrap">
                                        <div class="item-title">
                                            <div class="item-title--title">
                                                <?php the_title(); ?>
                                            </div>
                                        </div>

                                        <?php
                                        $categories = get_the_terms(get_the_ID(), 'portfolio_cat');
                                        if ($categories) { ?>
                                            <div class="item-category">
                                                <div class="item-category-wrap">
                                                    <?php foreach ($categories as $category) { ?>
                                                        <a href="<?php echo get_term_link($category->term_id); ?>"
                                                        class="item-category--category">
                                                            <?php echo $category->name; ?>
                                                        </a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        <?php } ?>
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
                <?php
                $first_image = get_field('image_first_block');
                $first_image_mobile = get_field('image_mobile_first_block');
                if ($first_image || $first_image_mobile) { ?>
                    <section class="screen">
                        <div class="screen-wrap">
                            <div class="item">
                                <div class="item-img  gsap-anim--j">
                                    <picture class="picture">
                                        <source srcset="<?php echo $first_image_mobile['sizes']['home_1']; ?>"
                                                media="(max-width: 768px)">
                                        <img class="img picture-absolute"
                                             data-src="<?php echo $first_image['sizes']['home_2']; ?>"
                                             src="<?php echo $first_image['sizes']['home_2']; ?>">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>

                <?php
                $client_first_block = get_field('client_first_block');
                $services_first_block = get_field('services_first_block');
                $platforms_first_block = get_field('platforms_first_block');
                $link_first_block = get_field('link_first_block');
                $year_first_block = get_field('year_first_block');

                if ($client_first_block || $services_first_block || $platforms_first_block || $link_first_block || $year_first_block) { ?>
                    <section class="specification">
                        <div class="specification-wrap  gsap-anim--j">
                            <div class="specification-ul">
                                <?php

                                if ($client_first_block) { ?>
                                    <div class="specification-li">
                                        <div class="item">
                                            <div class="item-title">
                                                client
                                            </div>
                                            <div class="item-desc">
                                                <?php echo $client_first_block; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php

                                if ($services_first_block) { ?>
                                    <div class="specification-li">
                                        <div class="item">
                                            <div class="item-title">
                                                services
                                            </div>
                                            <div class="item-desc">
                                                <?php echo $services_first_block; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($platforms_first_block) { ?>
                                    <div class="specification-li">
                                        <div class="item">
                                            <div class="item-title">
                                                Platforms
                                            </div>
                                            <div class="item-desc">
                                                <?php echo $platforms_first_block; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($link_first_block) { ?>
                                    <div class="specification-li">
                                        <div class="item">
                                            <div class="item-title">
                                                link
                                            </div>
                                            <div class="item-desc">
                                                <?php
                                                $count = count(get_field('link_first_block'));
                                                $counter = 1;
                                                while (have_rows('link_first_block')): the_row();

                                                    $link_first_block_link = get_sub_field('link');
                                                    ?>
                                                    <a href="<?php echo $link_first_block_link['url']; ?>"
                                                       target="<?php echo $link_first_block_link['target']; ?>"><?php echo $link_first_block_link['title']; ?></a><?php
                                                    if ($counter !== $count) {
                                                        echo ',';
                                                    }

                                                    $counter++; endwhile; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($year_first_block) { ?>
                                    <div class="specification-li">
                                        <div class="item">
                                            <div class="item-title">
                                                year
                                            </div>
                                            <div class="item-desc">
                                                <?php echo $year_first_block; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </section>
                <?php } ?>
                <?php
                $title_about_block = get_field('title_about_block');
                $text_about_block = get_field('text_about_block');
                if ($title_about_block || $text_about_block) { ?>
                    <section class="about">
                        <div class="about-wrap">
                            <div class="about-top  gsap-anim--j">
                                <div class="item">
                                    <div class="item-cursive">
                                        <div class="item-cursive--cursive">
                                            <?php echo $title_about_block; ?>
                                        </div>
                                    </div>
                                    <div class="item-quote">
                                        <div class="item-quote--quote">
                                            <?php echo $text_about_block; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>

                <?php
                $image_what_we_did_block = get_field('image_what_we_did_block');
                $title_block_what_we_did_block = get_field('title_block_what_we_did_block');
                $title_what_we_did_block = get_field('title_what_we_did_block');
                $text_what_we_did_block = get_field('text_what_we_did_block');
                if ($image_what_we_did_block || $title_block_what_we_did_block || $title_what_we_did_block || $text_what_we_did_block) { ?>
                    <section class="development">
                        <div class="development-wrap  gsap-anim--j">
                            <div class="development-row">
                                <?php
                                if ($image_what_we_did_block) { ?>
                                    <div class="development-col development-img">
                                        <div class="item">
                                            <div class="item-img">
                                                <img class="img"
                                                     src="<?php echo $image_what_we_did_block['sizes']['home_1']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php
                                if ($title_block_what_we_did_block || $title_what_we_did_block || $text_what_we_did_block) { ?>
                                    <div class="development-col development-desc">
                                        <div class="item">
                                            <div class="item-cursive">
                                                <div class="item-cursive--cursive">
                                                    <?php echo $title_block_what_we_did_block; ?>
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                <div class="item-title--title">
                                                    <?php echo $title_what_we_did_block; ?>
                                                </div>
                                            </div>
                                            <div class="item-desc">
                                                <div class="item-desc--desc c-article-content">
                                                    <?php echo $text_what_we_did_block; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </section>
                <?php } ?>
                <?php
                $title_block_story_block = get_field('title_block_story_block');
                $title_story_block = get_field('title_story_block');
                $text_story_block = get_field('text_story_block');
                $link_story_block = get_field('link_story_block');
                if ($title_block_story_block || $title_story_block || $text_story_block || $link_story_block) { ?>
                    <section class="story">
                        <div class="story-wrap">
                            <div class="story-desc  gsap-anim--js">
                                <div class="item">
                                    <?php
                                    if ($title_block_story_block) { ?>
                                        <div class="item-cursive">
                                            <div class="item-cursive--cursive">
                                                <?php echo $title_block_story_block; ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($title_story_block) { ?>
                                        <div class="item-title">
                                            <div class="item-title--title">
                                                <?php echo $title_story_block; ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($text_story_block) { ?>
                                        <div class="item-desc">
                                            <div class="item-desc--desc c-article-content">
                                                <?php echo $text_story_block; ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($link_story_block) { ?>
                                        <div class="item-link">
                                            <a href='<?php echo $link_story_block['url']; ?>'
                                               target="<?php echo $link_story_block['target']; ?>"
                                               class="item-link--link">
                                                <?php echo $link_story_block['title']; ?>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>
                <?php
                $image_before_block_clients_review_block = get_field('image_before_block_client’s_review_block');

                if ($image_before_block_clients_review_block) { ?>
                    <section class="design">
                        <div class="design-bottom">
                            <div class="design-img  gsap-anim--j">
                                <div class="item">
                                    <div class="item-img">
                                        <img class="img"
                                             src="<?php echo $image_before_block_clients_review_block['sizes']['home_2']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>

                <?php
                $title_block_clients_review_block = get_field('title_block_client’s_review_block');
                $photo_clients_review_block = get_field('photo_client’s_review_block');
                $review_clients_review_block = get_field('review_client’s_review_block');
                $name_clients_review_block = get_field('name_client’s_review_block');
                $position_clients_review_block = get_field('position_client’s_review_block');
                $image_clients_review_block = get_field('image_client’s_review_block');
                if ($title_block_clients_review_block || $photo_clients_review_block || $review_clients_review_block || $name_clients_review_block || $position_clients_review_block || $image_clients_review_block) { ?>
                    <section class="review">
                        <div class="review-wrap  gsap-anim--j">
                            <div class="review-row">
                                <?php

                                if ($image_clients_review_block) { ?>
                                    <div class="review-col review-img">
                                        <div class="item">
                                            <div class="item-img">
                                                <img class="img"
                                                     src="<?php echo $image_clients_review_block['sizes']['home_1']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="review-col review-desc">
                                    <div class="item">
                                        <?php

                                        if ($title_block_clients_review_block) { ?>
                                            <div class="item-cursive">
                                                <div class="item-cursive--cursive">
                                                    <?php echo $title_block_clients_review_block; ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php

                                        if ($photo_clients_review_block) { ?>
                                            <div class="item-autor">
                                                <div class="item-img">
                                                    <img class="img"
                                                         src="<?php echo $photo_clients_review_block['sizes']['author']; ?>">
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php

                                        if ($review_clients_review_block) { ?>
                                            <div class="item-desc">
                                                <div class="item-desc--desc c-article-content">
                                                    <?php echo $review_clients_review_block; ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <div class="item-name">
                                            <?php

                                            if ($name_clients_review_block) { ?>
                                                <div class="item-name--name">
                                                    <?php echo $name_clients_review_block; ?>
                                                </div>
                                            <?php } ?>
                                            <?php

                                            if ($position_clients_review_block) { ?>
                                                <div class="item-name--status">
                                                    <?php echo $position_clients_review_block; ?>
                                                </div>
                                            <?php } ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>
                <?php
                $title_work_together = get_field('title_work_together');
                $link_work_together = get_field('link_work_together');

                if ($title_work_together || $link_work_together) { ?>
                    <section class="feel">
                        <div class="feel-wrap">
                            <div class="feel-item  gsap-anim--j">
                                <div class="item">
                                    <?php
                                    if ($title_work_together) { ?>
                                        <div class="item-title">
                                            <div class="item-title--title">
                                                <?php echo $title_work_together; ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($link_work_together) { ?>
                                        <div class="item-btns">
                                            <div class="item-btns-btn">
                                                <a href="<?php echo $link_work_together; ?>" target="_blank"
                                                   class="btn btn-feel--js">
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>
            </div>

        </div>
    </main><!-- #main -->
    <div class="c-header-progress">
        <div class="c-header-progress-line c-header-progress--js"></div>
    </div>
<?php

get_footer();
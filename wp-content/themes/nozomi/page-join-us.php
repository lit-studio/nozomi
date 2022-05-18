<?php
/*
 * Template name: Join Us
*/
get_header();
?>
    <main id="primary" class="site-main">
        <div class="p-about-content">

            <div class="p-about-wrap">

                <?php
                $text_first = get_field('title_first_block');


                if ($text_first) { ?>
                    <section class="index-about">
                        <div class="index-wrap">
                            <div class="item">
                                <div class="item-title">
                                    <div class="item-title--title">
                                        <?php echo $text_first; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>
                <section class="infographic">
                    <?php
                    $image_1_first_block = get_field('image_1_first_block');
                    if ($image_1_first_block) { ?>
                        <div class="infographic-top">
                            <div class="infographic-top-img">
                                <div class="item-img">
                                    <img class="img"
                                         src="<?php echo $image_1_first_block['sizes']['home_2']; ?>"
                                         alt=""/>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="infographic-bottom">
                        <?php
                        $image_2_first_block = get_field('image_2_first_block');
                        if ($image_2_first_block) { ?>
                            <div class="infographic-bottom-left">
                                <div class="item-img">
                                    <img class="img"
                                         src="<?php echo $image_2_first_block['sizes']['home_2']; ?>"
                                         alt=""/>
                                </div>
                            </div>
                        <?php } ?>
                        <?php
                        $text_first_block = get_field('text_first_block');
                        if ($text_first_block) { ?>
                            <div class="infographic-wrap">
                                <div class="item-desc">
                                    <div class="item-desc--desc">
                                        <?php echo $text_first_block; ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php
                        $image_3_first_block = get_field('image_3_first_block');
                        if ($image_3_first_block) { ?>
                            <div class="infographic-bottom-right">
                                <div class="item-img">
                                    <img class="img"
                                         src="<?php echo $image_3_first_block['sizes']['home_2']; ?>"
                                         alt=""/>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>
                <section class="about">
                    <div class="about-top">
                        <div class="about-top-wrap">
                            <?php
                            $titlte_1_who_we_are = get_field('titlte_1_who_we_are');
                            if ($titlte_1_who_we_are) { ?>
                                <div class="about-cursive">
                                    <div class="about-cursive--cursive">
                                        <?php echo $titlte_1_who_we_are; ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php
                            $title_2_who_we_are = get_field('title_2_who_we_are');
                            if ($title_2_who_we_are) { ?>
                                <div class="about-title">
                                    <div class="about-title--title">
                                        <?php echo $title_2_who_we_are; ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php
                            $text_who_we_are = get_field('text_who_we_are');
                            if ($text_who_we_are) { ?>
                                <div class="about-desc">
                                    <div class="about-desc--desc">
                                        <?php echo $text_who_we_are; ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php
                    $photo_who_we_are = get_field('photo_who_we_are');
                    if ($photo_who_we_are) { ?>
                        <div class="about-gallery">
                            <div class="about-gallery-wrap">
                                <div class="about-gallery-list">
                                    <?php while (have_rows('photo_who_we_are')): the_row();

                                        ?>
                                        <?php
                                        $photo_who_we_are_photo = get_sub_field('photo');
                                        if ($photo_who_we_are_photo) { ?>
                                            <div class="about-gallery-col">
                                                <div class="item-img">
                                                    <img class="img"
                                                         src="<?php echo $photo_who_we_are_photo['sizes']['join_us']; ?>"
                                                         alt=""/>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php endwhile; ?>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </section>
                <section class="values">
                    <div class="values-wrap">
                        <div class="values-list">
                            <div class="values-col values-col-title">

                                <div class="item">
                                    <?php
                                    $title_1_our_values = get_field('title_1_our_values');
                                    if ($title_1_our_values) { ?>
                                        <div class="item-cursive">
                                            <div class="item-cursive--cursive">
                                                <?php echo $title_1_our_values; ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    $title_2_our_values = get_field('title_2_our_values');
                                    if ($title_2_our_values) { ?>
                                        <div class="item-title">
                                            <div class="about-title--title">
                                                <?php echo $title_2_our_values; ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php while (have_rows('blocks_our_values')) {
                                the_row();
                                $blocks_our_values_image = get_sub_field('image');
                                $blocks_our_values_title = get_sub_field('title');
                                $blocks_our_values_text = get_sub_field('text');
                                ?>
                                <div class="values-col">

                                    <div class="item">
                                        <?php

                                        if ($blocks_our_values_image) { ?>
                                            <div class="item-img">
                                                <img class="img"
                                                     src="<?php echo $blocks_our_values_image['sizes']['home_1']; ?>"
                                                     alt=""/>
                                            </div>
                                        <?php } ?>
                                        <?php

                                        if ($blocks_our_values_title) { ?>
                                            <div class="item-title">
                                                <div class="item-title--title">
                                                    <?php echo $blocks_our_values_title; ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php

                                        if ($blocks_our_values_text) { ?>
                                            <div class="item-desc">
                                                <div class="item-desc--desc">
                                                    <?php echo $blocks_our_values_text; ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </section>
                <section class="positions">
                    <div class="positions-wrap">
                        <?php
                        $title_open_positions = get_field('title_open_positions');
                        if ($title_open_positions) { ?>
                            <div class="positions-title">
                                <div class="positions-cursive">
                                    <div class="positions-cursive--cursive">
                                        <?php echo $title_open_positions; ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php
                        $open_positions = get_field('open_positions');
                        if ($open_positions) { ?>
                            <div class="positions-list">
                                <?php while (have_rows('open_positions')) {
                                    the_row();
                                    $open_positions_name = get_sub_field('name');
                                    $open_positions_location = get_sub_field('location');
                                    $open_positions_link = get_sub_field('link');
                                    ?>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-left">

                                                <?php
                                                if ($open_positions_name) { ?>
                                                    <div class="item-title">
                                                        <div class="item-title--title">
                                                            <?php echo $open_positions_name; ?>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <?php
                                                if ($open_positions_location) { ?>
                                                    <div class="item-location">
                                                        <div class="item-location--location">
                                                            <?php echo $open_positions_location; ?>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <?php
                                            if ($open_positions_link) { ?>
                                                <div class="item-link">
                                                    <a href="<?php echo $open_positions_link; ?>" target="_blank"
                                                       class="item-link--link">
                                                        More details
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        <?php } ?>
                    </div>
                </section>


            </div>
        </div>
    </main><!-- #main -->
<?php
$text_open_positions = get_field('text_open_positions');
$email_open_positions = get_field('email_open_positions');
if ($text_open_positions || $email_open_positions) { ?>
    <section class="join">
        <div class="join-bg">
            <div class="join-wrap">
                <div class="join-item">
                    <div class="item-desc">
                        <div class="item-desc--desc">
                            <?php echo $text_open_positions; ?>
                            <?php

                            if ($email_open_positions) { ?>
                                <a class="item-link" href="mailto:<?php echo $email_open_positions; ?>" title=""
                                   rel="home"><?php echo $email_open_positions; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="join-svg">
                    <div class="item-img">
                        <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/images/join-svg.svg"
                             alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php

get_footer();
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
                                                <div class="item">
                                                    <div class="item-content">
                                                        <div class="item-title">
                                                            With great power comes great responsibility
                                                        </div>
                                                        <div class="item-bottom">
                                                            <div class="item-left">
                                                                <div class="item-name">
                                                                    Name Surname
                                                                </div>
                                                                <div class="item-position">
                                                                    position
                                                                </div>
                                                            </div>
                                                            <div class="item-socials">
                                                                <a class="item-socials-social telegram" href="#">
                                                                    <svg width="100%" height="100%" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M17.2208 3.09747L2.44583 8.79497C1.4375 9.19997 1.44333 9.76247 2.26083 10.0133L6.05416 11.1966L14.8308 5.65914C15.2458 5.40664 15.625 5.54247 15.3133 5.81914L8.2025 12.2366H8.20083L8.2025 12.2375L7.94083 16.1475C8.32416 16.1475 8.49333 15.9716 8.70833 15.7641L10.5508 13.9725L14.3833 16.8033C15.09 17.1925 15.5975 16.9925 15.7733 16.1491L18.2892 4.29247C18.5467 3.25997 17.895 2.79247 17.2208 3.09747Z" fill="#2E2E2E"/>
                                                                    </svg>
                                                                </a>
                                                                <a class="item-socials-social instagram" href="#">
                                                                    <svg width="100%" height="100%" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22087 0.888313C7.19837 0.843313 7.51004 0.833313 10 0.833313C12.49 0.833313 12.8017 0.844146 13.7784 0.888313C14.755 0.93248 15.4217 1.08831 16.005 1.31415C16.6159 1.54498 17.17 1.90581 17.6284 2.37248C18.095 2.82998 18.455 3.38331 18.685 3.99498C18.9117 4.57831 19.0667 5.24498 19.1117 6.21998C19.1567 7.19915 19.1667 7.51081 19.1667 9.99998C19.1667 12.49 19.1559 12.8016 19.1117 13.7791C19.0675 14.7541 18.9117 15.4208 18.685 16.0041C18.455 16.6159 18.0944 17.1701 17.6284 17.6283C17.17 18.095 16.6159 18.455 16.005 18.685C15.4217 18.9116 14.755 19.0666 13.78 19.1116C12.8017 19.1566 12.49 19.1666 10 19.1666C7.51004 19.1666 7.19837 19.1558 6.22087 19.1116C5.24587 19.0675 4.57921 18.9116 3.99587 18.685C3.38414 18.4549 2.82989 18.0944 2.37171 17.6283C1.90536 17.1705 1.54447 16.6165 1.31421 16.005C1.08837 15.4216 0.933374 14.755 0.888374 13.78C0.843374 12.8008 0.833374 12.4891 0.833374 9.99998C0.833374 7.50998 0.844207 7.19831 0.888374 6.22165C0.932541 5.24498 1.08837 4.57831 1.31421 3.99498C1.54481 3.38338 1.90597 2.82941 2.37254 2.37165C2.83007 1.9054 3.38377 1.54452 3.99504 1.31415C4.57837 1.08831 5.24504 0.933313 6.22004 0.888313H6.22087ZM13.7042 2.53831C12.7375 2.49415 12.4475 2.48498 10 2.48498C7.55254 2.48498 7.26254 2.49415 6.29587 2.53831C5.40171 2.57915 4.91671 2.72831 4.59337 2.85415C4.16587 3.02081 3.86004 3.21831 3.53921 3.53915C3.23508 3.83502 3.00102 4.19521 2.85421 4.59331C2.72837 4.91665 2.57921 5.40165 2.53837 6.29581C2.49421 7.26248 2.48504 7.55248 2.48504 9.99998C2.48504 12.4475 2.49421 12.7375 2.53837 13.7041C2.57921 14.5983 2.72837 15.0833 2.85421 15.4066C3.00087 15.8041 3.23504 16.165 3.53921 16.4608C3.83504 16.765 4.19587 16.9991 4.59337 17.1458C4.91671 17.2716 5.40171 17.4208 6.29587 17.4616C7.26254 17.5058 7.55171 17.515 10 17.515C12.4484 17.515 12.7375 17.5058 13.7042 17.4616C14.5984 17.4208 15.0834 17.2716 15.4067 17.1458C15.8342 16.9791 16.14 16.7816 16.4609 16.4608C16.765 16.165 16.9992 15.8041 17.1459 15.4066C17.2717 15.0833 17.4209 14.5983 17.4617 13.7041C17.5059 12.7375 17.515 12.4475 17.515 9.99998C17.515 7.55248 17.5059 7.26248 17.4617 6.29581C17.4209 5.40165 17.2717 4.91665 17.1459 4.59331C16.9792 4.16581 16.7817 3.85998 16.4609 3.53915C16.165 3.23504 15.8048 3.00099 15.4067 2.85415C15.0834 2.72831 14.5984 2.57915 13.7042 2.53831ZM8.82921 12.8258C9.48309 13.098 10.2112 13.1347 10.8891 12.9297C11.5671 12.7248 12.1529 12.2907 12.5464 11.7018C12.9399 11.113 13.1168 10.4057 13.0467 9.7009C12.9767 8.99609 12.6642 8.33746 12.1625 7.83748C11.8427 7.51788 11.456 7.27316 11.0303 7.12093C10.6046 6.96871 10.1504 6.91278 9.70045 6.95716C9.25051 7.00154 8.816 7.14513 8.42821 7.37759C8.04042 7.61005 7.70899 7.9256 7.45779 8.30152C7.20659 8.67744 7.04186 9.10439 6.97547 9.55161C6.90908 9.99884 6.94267 10.4552 7.07382 10.8879C7.20498 11.3206 7.43044 11.7188 7.73397 12.0539C8.03751 12.389 8.41156 12.6526 8.82921 12.8258ZM6.66837 6.66831C7.10589 6.23079 7.62531 5.88373 8.19696 5.64695C8.7686 5.41016 9.38129 5.28829 10 5.28829C10.6188 5.28829 11.2315 5.41016 11.8031 5.64695C12.3748 5.88373 12.8942 6.23079 13.3317 6.66831C13.7692 7.10583 14.1163 7.62525 14.3531 8.19689C14.5899 8.76854 14.7117 9.38123 14.7117 9.99998C14.7117 10.6187 14.5899 11.2314 14.3531 11.8031C14.1163 12.3747 13.7692 12.8941 13.3317 13.3316C12.4481 14.2153 11.2497 14.7117 10 14.7117C8.75042 14.7117 7.55199 14.2153 6.66837 13.3316C5.78476 12.448 5.28835 11.2496 5.28835 9.99998C5.28835 8.75036 5.78476 7.55193 6.66837 6.66831ZM15.7567 5.98998C15.8651 5.8877 15.9519 5.76471 16.012 5.62829C16.072 5.49187 16.104 5.34479 16.1062 5.19575C16.1084 5.04672 16.0806 4.89877 16.0246 4.76065C15.9686 4.62254 15.8854 4.49707 15.78 4.39168C15.6746 4.28629 15.5491 4.20311 15.411 4.14708C15.2729 4.09104 15.125 4.06329 14.9759 4.06547C14.8269 4.06764 14.6798 4.09969 14.5434 4.15973C14.407 4.21976 14.284 4.30656 14.1817 4.41498C13.9828 4.62584 13.8739 4.90591 13.8781 5.19575C13.8823 5.48559 13.9994 5.76238 14.2043 5.96735C14.4093 6.17232 14.6861 6.28934 14.9759 6.29356C15.2658 6.29779 15.5458 6.18889 15.7567 5.98998Z" fill="#2E2E2E"/>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-img">
                                                        <img class="img"
                                                            src="<?php echo $photo_who_we_are_photo['sizes']['join_us']; ?>"
                                                            alt=""/>
                                                    </div>
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
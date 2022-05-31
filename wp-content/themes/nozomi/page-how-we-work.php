<?php
/*
 * Template name: How We Work
*/
get_header();
?>
    <main id="primary" class="site-main">
        <div class="p-how">
            <div class="p-how-wrap">
                <?php
                $title = get_field('title_first_block');
                if ($title) { ?>
                    <section class="index-how">
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
                <?php
                $text_first_block = get_field('text_first_block');
                $image_first_block = get_field('image_first_block');


                if ($text_first_block || $image_first_block) { ?>
                    <section class="screen">
                        <div class="screen-wrap">
                            <div class="item">
                                <?php

                                if ($image_first_block) { ?>
                                    <div class="item-img">
                                        <img class="img"
                                             src="<?php echo $image_first_block['url']; ?>">
                                    </div>
                                <?php } ?>
                                <?php


                                if ($text_first_block) { ?>
                                    <div class="item-content">
                                        <div class="item-desc c-article-content">
                                            <?php echo $text_first_block; ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </section>
                <?php } ?>
                <?php
                $title_block_how_we_work = get_field('title_block_how_we_work');
                $title_how_we_work = get_field('title_how_we_work');
                $image_how_we_work = get_field('image_how_we_work');
                $text_1_how_we_work = get_field('text_1_how_we_work');
                $text_2_how_we_work = get_field('text_2_how_we_work');
                $text_3_how_we_work = get_field('text_3_how_we_work');
                $text_4_how_we_work = get_field('text_4_how_we_work');

                if ($title_block_how_we_work || $title_how_we_work || $image_how_we_work || $text_1_how_we_work || $text_2_how_we_work || $text_3_how_we_work || $text_4_how_we_work) { ?>
                    <section class="work">
                        <div class="work-wrap">
                            <div class="work-top">
                                <?php if ($title_block_how_we_work) { ?>
                                    <div class="work-cursive">
                                        <div class="work-cursive--cursive">
                                            <?php echo $title_block_how_we_work; ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($title_how_we_work) { ?>
                                    <div class="work-title">
                                        <div class="work-title--title">
                                            <?php echo $title_how_we_work; ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="work-content">
                                <div class="work-row">
                                    <?php if ($image_how_we_work) { ?>
                                        <div class="work-col work-img">
                                            <div class="item">
                                                <div class="item-img">
                                                    <img class="img"
                                                         src="<?php echo $image_how_we_work['sizes']['how']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="work-col work-desc">
                                        <div class="item">
                                            <?php if ($text_1_how_we_work) { ?>
                                                <div class="item-title">
                                                    <div class="item-title--title">
                                                        <?php echo $text_1_how_we_work; ?>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php if ($text_2_how_we_work) { ?>
                                                <div class="item-content c-article-content">

                                                    <?php echo $text_2_how_we_work; ?>
                                                </div>
                                            <?php } ?>
                                            <?php if ($text_3_how_we_work) { ?>
                                                <div class="item-component">
                                                    <?php echo $text_3_how_we_work; ?>
                                                </div>
                                            <?php } ?>
                                            <?php if ($text_4_how_we_work) { ?>
                                                <div class="item-component">
                                                    <?php echo $text_4_how_we_work; ?>
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
                $title_block_special_process = get_field('title_block_special_process');
                $tilte_special_process = get_field('tilte_special_process');
                $text_special_process = get_field('text_special_process');
                $link_special_process = get_field('link_special_process');
                $image_special_process = get_field('image_special_process');

                if ($title_block_special_process || $tilte_special_process || $text_special_process || $link_special_process || $image_special_process) { ?>
                    <section class="process">
                        <div class="process-wrap">
                            <div class="process-desc">
                                <div class="item">
                                    <?php if ($title_block_special_process) { ?>
                                        <div class="item-cursive">
                                            <div class="item-cursive--cursive">
                                                <?php echo $title_block_special_process; ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if ($tilte_special_process) { ?>
                                        <div class="item-title">
                                            <div class="item-title--title">
                                                <?php echo $tilte_special_process; ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if ($text_special_process) { ?>
                                        <div class="item-desc">
                                            <div class="item-desc--desc c-article-content">
                                                <?php echo $text_special_process; ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if ($link_special_process) { ?>
                                        <div class="item-link">
                                            <a href='<?php echo $link_special_process['url']; ?>'
                                               target="<?php echo $link_special_process['target']; ?>"
                                               class="item-link--link">
                                                <?php echo $link_special_process['title']; ?>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php if ($image_special_process) { ?>
                                <div class="process-img">
                                    <div class="item-img">
                                        <img class="img"
                                             src="<?php echo $image_special_process['sizes']['home_1']; ?>">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </section>
                <?php } ?>
            </div>
        </div>
    </main><!-- #main -->

<?php

get_footer();
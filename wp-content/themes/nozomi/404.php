<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mikvahcalendar
 */

get_header();
?>

    <main id="primary" class="site-main">

        <section class="p-page-content">
            <div class="site-width">
                <div class="p-page-wrap">
                    <div class="title-block">
                        <div class="title">
                            <h1>
                                Щось пішло не так... 
                            </h1>

                        </div>
                    </div>
                    <div class="title-desc">
                        <div class="title-desc--desc">
                            Перейдіть на головну
                        </div>

                    </div>
                    <div class="title-btns">
                        <div class="title-btns--btns">
                            <a class="btn btn-black" href="<?php echo home_url('/'); ?>" >
                                Головну
                            </a>
                        </div>

                    </div>
                </div>

            </div>


        </section>

    </main><!-- #main -->
<?php
get_footer();

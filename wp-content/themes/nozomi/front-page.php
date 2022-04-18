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
                                            <div class="item-title--title">
                                                <?php echo $text_1_block_1; ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="item-img">
                                        <div class="item-img-item">
                                            <div id='hand_bird' class="item-img-item-lottie">
        
                                            </div>
                                            <!-- <img class="img"
                                                 src="<?php echo get_template_directory_uri() ?>/assets/images/home/illustration-bird.svg"
                                                 alt=""/> -->
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
                                    <image id="lines"
                                           xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/home/fold-bg-grad-min.jpg"
                                           x="0" y="0" width="100%" height="100%"/>
                                    <g id="maskReveal" mask="url(#theMask)">
                                        <image id="regular"
                                               xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/home/fold-bg-hover-min.jpg"
                                               x="0" y="0" width="100%" height="100%"/>
                                    </g>
                                    <!-- <circle id="ring" r="20" fill="none" stroke="#D54242" stroke-width="2" cx="800" cy="450" /> -->
                                    <!-- <circle id="dot" r="4" fill="#D54242" cx="800" cy="450"/> -->
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
                                            <div class="item-video video--js vimeo"
                                                 data-set-vimeo-id="<?php echo $video_1_link_id_block_1; ?>">
                                            <span class="item-video--layout item-video--layout--js">
                                                <!-- <span class="item-video--layout-btn"></span> -->
                                            </span>
                                            </div>
                                        <?php } ?>
                                        <!-- <img class="img"
                                             src="<?php echo get_template_directory_uri() ?>/assets/images/home/home-case-01-min.jpg"
                                             alt=""/> -->
                                </div>
                            </div>
                            <?php
                            $image_block_1 = get_field('image_block_1');
                            if ($image_block_1) { ?>
                                <div class="portfolio-middle-col">
                                    <div class="item">
                                        <div class="item-img parallax-img-block--js">
                                            <img class="img img--js"
                                                 src="<?php echo $image_block_1['sizes']['home_1']; ?>"
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
                                            <div class="item-video video--js vimeo"
                                                 data-set-vimeo-id="<?php echo $video_2_link_id_block_1; ?>">
                                                <span class="item-video--layout item-video--layout--js">
                                                </span>
                                            </div>
                                        <?php } ?>

                                        <!-- <img class="img"
                                             src="<?php echo get_template_directory_uri() ?>/assets/images/home/home-case-03-min.jpg"
                                             alt=""/> -->

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
                                <a href="<?php echo $button_link_block_1; ?>" class="btn btn-border btn-portfolio--js">

                                    <?php /*echo $button_text_block_1;
                                    <!-- <svg width="264" height="64" viewBox="0 0 264 64" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M117.266 3.93877C140.446 3.90559 159.679 3.73967 159.679 3.57376L159.878 3.14238C160.651 2.95254 161.459 2.95254 162.232 3.14238C163.36 3.3083 179.675 3.70649 198.444 3.70649C244.04 4.0715 256.277 4.46969 256.94 5.56473C257.106 5.83019 256.907 6.02929 256.608 6.02929C256.31 6.02929 256.111 6.16202 256.31 6.36112C256.509 6.56021 256.675 6.79249 255.846 7.29024C255.633 7.41807 255.474 7.62908 255.357 8.03176C255.632 9.69639 255.736 11.6445 255.657 13.7168C255.559 16.84 254.912 32.5149 254.912 32.5149C254.912 32.5149 254.679 38.5263 254.468 43.8485C254.481 48.5117 254.318 53.5582 253.954 56.3326L253.623 58.9209H195.359C163.292 58.9541 118.359 59.2527 95.4452 59.5845C72.531 59.9164 43.9132 60.2482 31.7431 60.3809C29.1554 60.4091 26.6741 60.4299 24.3652 60.4491C15.8156 60.5205 9.63053 60.5722 9.16055 60.9118C8.66251 61.2718 8.2799 60.4766 8.41725 59.4902C7.9473 57.707 7.67627 55.5131 7.63463 53.1447C7.5566 50.0209 7.32042 34.3344 7.32042 34.3344C7.32042 34.3344 7.04621 18.6566 7.00309 15.513C6.98294 13.9543 7.06152 12.365 7.23257 10.8189C7.15312 10.4502 7.10567 9.91321 7.10567 9.28121C7.02459 8.41266 7.14957 7.53722 7.47044 6.72613C8.59791 6.02929 18.4135 5.432 32.109 5.19972C36.1298 5.07592 41.1386 4.96655 46.1029 4.85816C51.7837 4.73412 57.4062 4.61136 61.4232 4.46969C68.9508 4.20423 94.0867 3.97195 117.266 3.93877ZM8.67161 58.653C8.8998 58.2295 9.12126 58.2646 9.29319 58.5227C9.49216 58.8213 10.1885 58.9872 10.9181 58.8213C11.5695 58.66 12.2579 58.7551 12.8414 59.0868C13.5378 59.6509 14.6984 59.5513 17.4839 58.6554C19.6726 57.9586 41.5919 57.129 58.9682 57.129C66.6947 57.129 75.0513 56.9963 77.6047 56.8303C80.158 56.6644 91.5654 56.399 102.94 56.2662C114.314 56.1335 125.953 55.868 128.805 55.7353C131.657 55.6026 160.805 55.3703 193.535 55.3703H252.691C252.621 54.3045 252.607 53.17 252.653 51.9959C252.718 49.9224 253.025 42.3167 253.224 37.4383C253.224 37.3256 253.225 37.2193 253.225 37.1197L253.092 37.0534C253.055 36.19 253.14 35.3279 253.344 34.4925C253.378 33.6801 253.397 33.1977 253.397 33.1977C253.397 33.1977 253.529 29.8196 253.683 25.886C253.569 21.8548 253.649 17.8195 253.922 13.7941C254.177 12.7076 254.266 11.5889 254.188 10.4758V7.15751H251.866C251.187 7.14007 250.425 7.07686 249.749 7.02077C249.139 6.97009 248.598 6.92523 248.252 6.92523C245.498 6.60138 242.715 6.60138 239.962 6.92523C239.331 7.29024 197.98 7.15751 190.22 6.92523H182.726C179.012 7.19069 174.568 7.12432 172.778 6.92523C171.69 6.64424 170.549 6.64424 169.461 6.92523C169.362 7.29024 168.467 7.25705 167.273 6.92523C166.45 6.68372 165.575 6.68372 164.753 6.92523C161.257 7.27045 157.734 7.25933 154.241 6.89204C154.148 6.8804 153.814 6.9055 153.315 6.94301C152.392 7.01242 150.904 7.12432 149.333 7.12432C146.017 7.32342 112.856 7.52252 109.54 7.52252C108.644 7.48933 92.4287 7.72161 61.6885 8.25254C49.9827 8.518 33.2365 8.7171 24.482 8.75028C15.7275 8.78346 8.4321 8.98256 8.23314 9.18166C8.12277 9.3304 8.06317 9.51074 8.06317 9.69599C8.06317 9.88125 8.12277 10.0616 8.23314 10.2103C8.51811 11.2737 8.58589 12.3828 8.43333 13.4715C8.45646 13.8931 8.47204 14.3221 8.47989 14.757C8.55792 17.8808 8.79409 33.5673 8.79409 33.5673C8.79409 33.5673 9.06831 49.2451 9.10769 52.3885C9.13776 54.4803 8.98721 56.6298 8.67161 58.653Z"
                                            fill="#2E2E2E"/>
                                        <path d="M47.9115 39H58.4055V36.47H50.8155V32.356H56.7115V29.848H50.8155V26.108H58.1635V23.6H47.9115V39ZM70.3532 39L66.3492 33.214L70.0672 27.912H67.0972L64.8972 31.102L62.6752 27.912H59.7272L63.4232 33.214L59.4192 39H62.3012L64.8972 35.304L67.4932 39H70.3532ZM71.9285 43.488H74.6125V37.79C75.2285 38.648 76.4165 39.176 77.7585 39.176C81.0145 39.176 83.1045 36.844 83.1045 33.456C83.1045 30.068 81.1465 27.736 77.9565 27.736C76.4825 27.736 75.2725 28.352 74.6125 29.298V27.912H71.9285V43.488ZM77.4505 36.844C75.6245 36.844 74.4365 35.502 74.4365 33.456C74.4365 31.41 75.6245 30.068 77.4505 30.068C79.2325 30.068 80.4205 31.41 80.4205 33.456C80.4205 35.502 79.2325 36.844 77.4505 36.844ZM85.0769 39H87.7609V23.16H85.0769V39ZM95.551 39.176C98.917 39.176 101.337 36.756 101.337 33.456C101.337 30.156 98.917 27.736 95.551 27.736C92.163 27.736 89.743 30.156 89.743 33.456C89.743 36.756 92.163 39.176 95.551 39.176ZM95.551 36.844C93.703 36.844 92.471 35.458 92.471 33.456C92.471 31.454 93.703 30.068 95.551 30.068C97.377 30.068 98.609 31.454 98.609 33.456C98.609 35.458 97.377 36.844 95.551 36.844ZM110.005 30.178V27.912H108.707C107.277 27.912 106.419 28.462 105.869 29.87V27.912H103.163V39H105.869V33.764C105.869 31.652 106.551 30.178 108.267 30.178H110.005ZM118.789 35.304C118.503 36.36 117.601 36.932 116.215 36.932C114.499 36.932 113.355 35.788 113.157 34.006H121.341C121.363 33.786 121.385 33.456 121.385 33.082C121.385 30.442 119.713 27.736 115.995 27.736C112.365 27.736 110.561 30.486 110.561 33.412C110.561 36.316 112.585 39.176 116.215 39.176C118.943 39.176 121.011 37.658 121.429 35.304H118.789ZM115.995 29.76C117.601 29.76 118.569 30.816 118.679 32.224H113.223C113.509 30.552 114.477 29.76 115.995 29.76ZM133.278 39.176C136.644 39.176 139.064 36.756 139.064 33.456C139.064 30.156 136.644 27.736 133.278 27.736C129.89 27.736 127.47 30.156 127.47 33.456C127.47 36.756 129.89 39.176 133.278 39.176ZM133.278 36.844C131.43 36.844 130.198 35.458 130.198 33.456C130.198 31.454 131.43 30.068 133.278 30.068C135.104 30.068 136.336 31.454 136.336 33.456C136.336 35.458 135.104 36.844 133.278 36.844ZM151.186 27.912H148.48V33.962C148.48 35.59 147.424 36.778 145.906 36.778C144.542 36.778 143.596 35.722 143.596 34.204V27.912H140.912V34.776C140.912 37.372 142.54 39.176 145.026 39.176C146.61 39.176 147.864 38.494 148.48 37.284V39H151.186V27.912ZM160.45 30.178V27.912H159.152C157.722 27.912 156.864 28.462 156.314 29.87V27.912H153.608V39H156.314V33.764C156.314 31.652 156.996 30.178 158.712 30.178H160.45ZM169.439 39H171.815L174.059 31.542L176.281 39H178.679L182.199 27.912H179.515L177.469 35.326L175.291 27.912H172.805L170.627 35.326L168.603 27.912H165.897L169.439 39ZM188.492 39.176C191.858 39.176 194.278 36.756 194.278 33.456C194.278 30.156 191.858 27.736 188.492 27.736C185.104 27.736 182.684 30.156 182.684 33.456C182.684 36.756 185.104 39.176 188.492 39.176ZM188.492 36.844C186.644 36.844 185.412 35.458 185.412 33.456C185.412 31.454 186.644 30.068 188.492 30.068C190.318 30.068 191.55 31.454 191.55 33.456C191.55 35.458 190.318 36.844 188.492 36.844ZM202.947 30.178V27.912H201.649C200.219 27.912 199.361 28.462 198.811 29.87V27.912H196.105V39H198.811V33.764C198.811 31.652 199.493 30.178 201.209 30.178H202.947ZM212.139 39H215.417L210.533 32.268L215.043 27.912H211.611L207.365 31.96V23.16H204.659V39H207.365V35.326L208.685 34.05L212.139 39Z"
                                            fill="#2E2E2E"/>
                                    </svg> -->
                                    */ ?>
                                </a>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </section>
            <section class="about ">
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
                                    <a href="<?php echo $button_link_block_2; ?>" class="btn  btn-about--js"
                                       >
                                        <?php /* echo $button_text_block_2; 
                                        <!-- <svg width="264" height="64" viewBox="0 0 264 64" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M117.266 3.93877C140.446 3.90559 159.679 3.73967 159.679 3.57376L159.878 3.14238C160.651 2.95254 161.459 2.95254 162.232 3.14238C163.36 3.3083 179.675 3.70649 198.444 3.70649C244.04 4.0715 256.277 4.46969 256.94 5.56473C257.106 5.83019 256.907 6.02929 256.608 6.02929C256.31 6.02929 256.111 6.16202 256.31 6.36112C256.509 6.56021 256.675 6.79249 255.846 7.29024C255.633 7.41807 255.474 7.62908 255.357 8.03176C255.632 9.69639 255.736 11.6445 255.657 13.7168C255.559 16.84 254.912 32.5149 254.912 32.5149C254.912 32.5149 254.679 38.5263 254.468 43.8485C254.481 48.5117 254.318 53.5582 253.954 56.3326L253.623 58.9209H195.359C163.292 58.9541 118.359 59.2527 95.4452 59.5845C72.531 59.9164 43.9132 60.2482 31.7431 60.3809C29.1554 60.4091 26.6741 60.4299 24.3652 60.4491C15.8156 60.5205 9.63053 60.5722 9.16055 60.9118C8.66251 61.2718 8.2799 60.4766 8.41725 59.4902C7.9473 57.707 7.67627 55.5131 7.63463 53.1447C7.5566 50.0209 7.32042 34.3344 7.32042 34.3344C7.32042 34.3344 7.04621 18.6566 7.00309 15.513C6.98294 13.9543 7.06152 12.365 7.23257 10.8189C7.15312 10.4502 7.10567 9.91321 7.10567 9.28121C7.02459 8.41266 7.14957 7.53722 7.47044 6.72613C8.59791 6.02929 18.4135 5.432 32.109 5.19972C36.1298 5.07592 41.1386 4.96655 46.1029 4.85816C51.7837 4.73412 57.4062 4.61136 61.4232 4.46969C68.9508 4.20423 94.0867 3.97195 117.266 3.93877ZM8.67161 58.653C8.8998 58.2295 9.12126 58.2646 9.29319 58.5227C9.49216 58.8213 10.1885 58.9872 10.9181 58.8213C11.5695 58.66 12.2579 58.7551 12.8414 59.0868C13.5378 59.6509 14.6984 59.5513 17.4839 58.6554C19.6726 57.9586 41.5919 57.129 58.9682 57.129C66.6947 57.129 75.0513 56.9963 77.6047 56.8303C80.158 56.6644 91.5654 56.399 102.94 56.2662C114.314 56.1335 125.953 55.868 128.805 55.7353C131.657 55.6026 160.805 55.3703 193.535 55.3703H252.691C252.621 54.3045 252.607 53.17 252.653 51.9959C252.718 49.9224 253.025 42.3167 253.224 37.4383C253.224 37.3256 253.225 37.2193 253.225 37.1197L253.092 37.0534C253.055 36.19 253.14 35.3279 253.344 34.4925C253.378 33.6801 253.397 33.1977 253.397 33.1977C253.397 33.1977 253.529 29.8196 253.683 25.886C253.569 21.8548 253.649 17.8195 253.922 13.7941C254.177 12.7076 254.266 11.5889 254.188 10.4758V7.15751H251.866C251.187 7.14007 250.425 7.07686 249.749 7.02077C249.139 6.97009 248.598 6.92523 248.252 6.92523C245.498 6.60138 242.715 6.60138 239.962 6.92523C239.331 7.29024 197.98 7.15751 190.22 6.92523H182.726C179.012 7.19069 174.568 7.12432 172.778 6.92523C171.69 6.64424 170.549 6.64424 169.461 6.92523C169.362 7.29024 168.467 7.25705 167.273 6.92523C166.45 6.68372 165.575 6.68372 164.753 6.92523C161.257 7.27045 157.734 7.25933 154.241 6.89204C154.148 6.8804 153.814 6.9055 153.315 6.94301C152.392 7.01242 150.904 7.12432 149.333 7.12432C146.017 7.32342 112.856 7.52252 109.54 7.52252C108.644 7.48933 92.4287 7.72161 61.6885 8.25254C49.9827 8.518 33.2365 8.7171 24.482 8.75028C15.7275 8.78346 8.4321 8.98256 8.23314 9.18166C8.12277 9.3304 8.06317 9.51074 8.06317 9.69599C8.06317 9.88125 8.12277 10.0616 8.23314 10.2103C8.51811 11.2737 8.58589 12.3828 8.43333 13.4715C8.45646 13.8931 8.47204 14.3221 8.47989 14.757C8.55792 17.8808 8.79409 33.5673 8.79409 33.5673C8.79409 33.5673 9.06831 49.2451 9.10769 52.3885C9.13776 54.4803 8.98721 56.6298 8.67161 58.653Z"
                                                  fill="#F2F0ED"/>
                                            <path d="M60.684 39H63.412V28.792L67.614 39H69.814L73.994 28.792V39H76.722V23.6H73.378L68.714 34.974L64.05 23.6H60.684V39ZM84.6261 39.176C87.9921 39.176 90.4121 36.756 90.4121 33.456C90.4121 30.156 87.9921 27.736 84.6261 27.736C81.2381 27.736 78.8181 30.156 78.8181 33.456C78.8181 36.756 81.2381 39.176 84.6261 39.176ZM84.6261 36.844C82.7781 36.844 81.5461 35.458 81.5461 33.456C81.5461 31.454 82.7781 30.068 84.6261 30.068C86.4521 30.068 87.6841 31.454 87.6841 33.456C87.6841 35.458 86.4521 36.844 84.6261 36.844ZM99.0803 30.178V27.912H97.7823C96.3523 27.912 95.4943 28.462 94.9443 29.87V27.912H92.2383V39H94.9443V33.764C94.9443 31.652 95.6263 30.178 97.3423 30.178H99.0803ZM107.865 35.304C107.579 36.36 106.677 36.932 105.291 36.932C103.575 36.932 102.431 35.788 102.233 34.006H110.417C110.439 33.786 110.461 33.456 110.461 33.082C110.461 30.442 108.789 27.736 105.071 27.736C101.441 27.736 99.6365 30.486 99.6365 33.412C99.6365 36.316 101.661 39.176 105.291 39.176C108.019 39.176 110.087 37.658 110.505 35.304H107.865ZM105.071 29.76C106.677 29.76 107.645 30.816 107.755 32.224H102.299C102.585 30.552 103.553 29.76 105.071 29.76ZM121.649 27.736C118.767 27.736 116.897 29.452 116.765 31.652H119.185C119.229 30.662 120.087 29.76 121.517 29.76C122.947 29.76 123.783 30.53 123.783 31.608C123.783 32.048 123.519 32.356 122.969 32.356H120.923C118.437 32.356 116.765 33.698 116.765 35.854C116.765 37.768 118.261 39.176 120.461 39.176C122.045 39.176 123.321 38.45 123.783 37.35V39H126.445V31.872C126.445 29.364 124.465 27.736 121.649 27.736ZM121.099 37.174C120.087 37.174 119.383 36.602 119.383 35.744C119.383 34.776 120.153 34.138 121.297 34.138H123.783V34.314C123.783 35.986 122.793 37.174 121.099 37.174ZM134.747 39.176C138.069 39.176 140.027 36.844 140.027 33.456C140.027 30.068 138.069 27.736 134.791 27.736C133.361 27.736 132.173 28.352 131.535 29.254V23.16H128.851V39H131.535V37.614C132.173 38.582 133.405 39.176 134.747 39.176ZM134.351 36.844C132.547 36.844 131.359 35.502 131.359 33.456C131.359 31.41 132.547 30.068 134.351 30.068C136.155 30.068 137.343 31.41 137.343 33.456C137.343 35.502 136.155 36.844 134.351 36.844ZM147.081 39.176C150.447 39.176 152.867 36.756 152.867 33.456C152.867 30.156 150.447 27.736 147.081 27.736C143.693 27.736 141.273 30.156 141.273 33.456C141.273 36.756 143.693 39.176 147.081 39.176ZM147.081 36.844C145.233 36.844 144.001 35.458 144.001 33.456C144.001 31.454 145.233 30.068 147.081 30.068C148.907 30.068 150.139 31.454 150.139 33.456C150.139 35.458 148.907 36.844 147.081 36.844ZM164.989 27.912H162.283V33.962C162.283 35.59 161.227 36.778 159.709 36.778C158.345 36.778 157.399 35.722 157.399 34.204V27.912H154.715V34.776C154.715 37.372 156.343 39.176 158.829 39.176C160.413 39.176 161.667 38.494 162.283 37.284V39H164.989V27.912ZM168.776 24.568V27.912H166.598V30.178H168.776V35.128C168.776 37.592 170.36 39 172.78 39H174.562V36.712H173.088C172.076 36.712 171.482 36.14 171.482 35.018V30.178H174.562V27.912H171.482V24.568H168.776ZM191.394 27.912H188.688V33.962C188.688 35.59 187.632 36.778 186.114 36.778C184.75 36.778 183.804 35.722 183.804 34.204V27.912H181.12V34.776C181.12 37.372 182.748 39.176 185.234 39.176C186.818 39.176 188.072 38.494 188.688 37.284V39H191.394V27.912ZM197.82 39.176C200.416 39.176 202.11 37.812 202.11 35.722C202.11 30.706 195.95 33.346 195.95 30.948C195.95 30.2 196.588 29.76 197.556 29.76C198.414 29.76 199.36 30.288 199.514 31.322H201.978C201.868 29.166 200.086 27.736 197.49 27.736C195.202 27.736 193.508 29.1 193.508 31.036C193.508 35.722 199.58 33.368 199.58 35.832C199.58 36.492 198.876 37.02 197.82 37.02C196.61 37.02 195.796 36.36 195.686 35.304H193.222C193.354 37.68 195.136 39.176 197.82 39.176Z"
                                                  fill="#F2F0ED"/>
                                        </svg> -->
                                        */ ?>
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
                        <image id="linesPerspective"
                               xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/home/about-bg-min.jpg"
                               x="0" y="0" width="100%" height="100%"/>
                        <g id="maskRevealPerspective" mask="url(#theMaskPerspective)">
                            <image id="regularPerspective"
                                   xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/home/about-bg-hover-min.jpg"
                                   x="0" y="0" width="100%" height="100%"/>
                        </g>
                        <!-- <circle id="ring" r="20" fill="none" stroke="#D54242" stroke-width="2" cx="800" cy="450" /> -->
                        <!-- <circle id="dotPerspective" r="4" fill="#D54242" cx="800" cy="450"/> -->
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
            <section class="news">
                <div class="news-wrap">
                    <div class="news-block">
                        <div class="news-row">
                            <div class="news-col">
                                <div class="item">
                                    <div class="item-img">
                                        <img class="img"
                                             src="<?php echo get_template_directory_uri() ?>/assets/images/home/home-article-1-min.jpg"
                                             alt=""/>
                                    </div>
                                    <div class="item-tag">
                                        <div class="item-tag--tag">
                                            DESIGN
                                        </div>
                                    </div>
                                    <div class="item-title">
                                        <div class="item-title--title">
                                            Co-creating new era of health
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-col">
                                <div class="item">
                                    <div class="item-img">
                                        <img class="img"
                                             src="<?php echo get_template_directory_uri() ?>/assets/images/home/home-article-2-min.jpg"
                                             alt=""/>
                                    </div>
                                    <div class="item-tag">
                                        <div class="item-tag--tag">
                                            Lifestyle
                                        </div>
                                    </div>
                                    <div class="item-title">
                                        <div class="item-title--title">
                                            Remdev Studio. Jumping into 2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main><!-- #main -->
<?php
get_footer();

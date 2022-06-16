<?php
get_header();
?>
    <main id="primary" class="site-main">
        <div class="p-single-blog-content ">
            <section class="index-blog">
                <div class="index-wrap">
                    <div class="item">
                        <div class="item-wrap">
                            <div class="item-content">
                                <div class="item-content-wrap  gsap-anim--js">
                                    <div class="item-tag">
                                        <div class="item-tag--tag">
                                            <a href="#">
                                            <?php
                                            $category = get_the_category();
                                            $firstCategory = $category[0]->cat_name;
                                            echo $firstCategory;

                                            ?>
                                            </a>
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
            <section class="blog">
                <div class="blog-top">
                    <div class="blog-top-wrap gsap-anim--js">
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

                                    <div class="blog-top-share-title">
                                        Share:
                                    </div>
                                    <ul class="blog-top-share-list">
                                        <li class="blog-top-share-li">
                                            <a class="blog-top-share-link facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_permalink(); ?>"
                                               onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=375');return false;"
                                               target="_blank" title="Share on Facebook">
                                                <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_3501_8499)">
                                                        <path d="M0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12Z"
                                                              fill="#E3DCD1"/>
                                                        <path d="M14.397 23.997V15.801H17.162L17.573 12.592H14.397V10.548C14.397 9.62199 14.655 8.98799 15.984 8.98799H17.668V6.12699C16.8486 6.03918 16.025 5.99678 15.201 5.99999C12.757 5.99999 11.079 7.49199 11.079 10.231V12.586H8.33197V15.795H11.085V23.997H14.397Z"
                                                              fill="#2E2E2E"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_3501_8499">
                                                            <path d="M0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12Z"
                                                                  fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="blog-top-share-li">
                                            <a class="blog-top-share-link linkedin" href="javascript:void(0)" onclick="window.open( 'https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>', 'sharer', 'toolbar=0, status=0, width=375, height=500');return false;" title="Linkedin">
                                                <svg width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 16C0 7.16344 7.16344 0 16 0V0C24.8366 0 32 7.16344 32 16V16C32 24.8366 24.8366 32 16 32V32C7.16344 32 0 24.8366 0 16V16Z" fill="#E3DCD1"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9969 13.6427H16.8855V15.0816C17.3016 14.2541 18.3688 13.5105 19.9718 13.5105C23.0448 13.5105 23.7743 15.1579 23.7743 18.1803V23.778H20.6632V18.8686C20.6632 17.1474 20.2471 16.1767 19.1878 16.1767C17.7185 16.1767 17.108 17.2229 17.108 18.8679V23.778H13.9969V13.6427V13.6427ZM8.66208 23.6457H11.7732V13.5105H8.66208V23.6457V23.6457ZM12.2189 10.2057C12.219 10.4665 12.1673 10.7247 12.0667 10.9653C11.9662 11.2059 11.8188 11.4241 11.6332 11.6073C11.2571 11.9811 10.7479 12.1904 10.2176 12.1891C9.68828 12.1887 9.18033 11.98 8.80364 11.6081C8.61869 11.4243 8.47183 11.2058 8.37146 10.9652C8.2711 10.7246 8.2192 10.4665 8.21875 10.2057C8.21875 9.67919 8.42875 9.17519 8.80442 8.80341C9.18077 8.43098 9.68894 8.22218 10.2184 8.22241C10.7489 8.22241 11.2575 8.43163 11.6332 8.80341C12.0081 9.17519 12.2189 9.67919 12.2189 10.2057Z" fill="#2E2E2E"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="blog-top-share-li">
                                            <a class="blog-top-share-link copy" href="#">
                                                <span class="copy-content" style="display: none;"><?php the_permalink(); ?></span>
                                                <svg width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16Z" fill="#E3DCD1"/>
                                                    <circle cx="16" cy="16" r="16" fill="#E3DCD1"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.119 6.39893C13.4368 6.39893 12.7826 6.66991 12.3002 7.15228C11.8179 7.63464 11.5469 8.28886 11.5469 8.97102V10.8333H10.5721C9.88993 10.8333 9.23571 11.1043 8.75335 11.5867C8.27099 12.069 8 12.7232 8 13.4054V23.1616C8 23.8438 8.27099 24.498 8.75335 24.9804C9.23571 25.4627 9.88993 25.7337 10.5721 25.7337H17.6675C18.3497 25.7337 19.0039 25.4627 19.4863 24.9804C19.9686 24.498 20.2396 23.8438 20.2396 23.1616V22.1863H21.2144C21.8966 22.1863 22.5508 21.9153 23.0332 21.4329C23.5155 20.9506 23.7865 20.2963 23.7865 19.6142V11.8464C23.7865 11.5037 23.718 11.1645 23.585 10.8487C23.4521 10.5329 23.2573 10.2468 23.0123 10.0073L20.0722 7.13197C19.5917 6.66213 18.9463 6.39901 18.2742 6.39893H14.119ZM19.4625 20.5898C19.4555 20.5896 19.4485 20.5895 19.4414 20.5895C19.4343 20.5895 19.4273 20.5896 19.4203 20.5898H14.119C13.8602 20.5898 13.6121 20.487 13.4291 20.304C13.2461 20.1211 13.1433 19.8729 13.1433 19.6142V11.6686C13.1439 11.6563 13.1442 11.6439 13.1442 11.6315C13.1442 11.6191 13.1439 11.6068 13.1433 11.5945V8.97102C13.1433 8.71227 13.2461 8.46412 13.4291 8.28115C13.6121 8.09819 13.8602 7.9954 14.119 7.9954H18.2742C18.5291 7.99546 18.7739 8.09529 18.9561 8.27345L21.8964 11.149C21.9893 11.2398 22.0632 11.3483 22.1136 11.4681C22.164 11.5879 22.19 11.7166 22.19 11.8465V19.6142C22.19 19.8729 22.0872 20.1211 21.9043 20.304C21.7213 20.487 21.4732 20.5898 21.2144 20.5898H19.4625ZM11.5469 12.4298V19.6142C11.5469 20.2963 11.8179 20.9506 12.3002 21.4329C12.7826 21.9153 13.4368 22.1863 14.119 22.1863H18.6432V23.1616C18.6432 23.4204 18.5404 23.6685 18.3574 23.8515C18.1744 24.0345 17.9263 24.1372 17.6675 24.1372H10.5721C10.3133 24.1372 10.0652 24.0345 9.88223 23.8515C9.69926 23.6685 9.59647 23.4204 9.59647 23.1616V13.4054C9.59647 13.1466 9.69926 12.8985 9.88223 12.7155C10.0652 12.5326 10.3133 12.4298 10.5721 12.4298H11.5469Z" fill="#2E2E2E"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="blog-top-nav blog-top-nav-right">
                            <?php
                            $next = get_previous_post_link('%link', 'next article', false);
                            echo str_replace('<a ', '<a class="blog-top-nav-link" ', $next);
                            ?>

                        </div>
                    </div>
                </div>

                <?php
                $blog_image = get_field('image');
                $blog_image_description = get_field('description_image');

                if ($blog_image || $blog_image_description) { ?>
                    <div class="blog-img">
                        <div class="item gsap-anim--js">
                            <?php
                            if ($blog_image) { ?>
                                <div class="item-img parallax-img-block--js">
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
            if ($featured_posts): ?>
                <section class="posts">
                    <div class="posts-wrap ">
                        <div class="posts-title">
                            <div class="posts-title--title">
                                Other posts from our blog
                            </div>
                        </div>
                        <div class="posts-list">
                            <?php foreach ($featured_posts as $post):

                                ?>
                                <div class="item">
                                    <div class="item-wrap">
                                        <?php
                                        $blog_image = get_field('image');

                                        if ($blog_image) { ?>
                                         <a class="item-left" href='<?php the_permalink(); ?>'>
                                                <div class="item-img">
                                                    <img class="img"
                                                         src="<?php echo $blog_image['sizes']['blog_min']; ?>"
                                                         alt=""/>
                                                </div>
                                        </a>
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
                <div class="blog-top-share blog-top-share-fixed">
                    <ul class="blog-top-share-list">
                        <li class="blog-top-share-li">
                            <a class="blog-top-share-link facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_permalink(); ?>"
                            onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=375');return false;"
                            target="_blank" title="Share on Facebook">
                                <!-- <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_3501_8499)">
                                        <path d="M0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12Z"
                                            fill="#E3DCD1"/>
                                        <path d="M14.397 23.997V15.801H17.162L17.573 12.592H14.397V10.548C14.397 9.62199 14.655 8.98799 15.984 8.98799H17.668V6.12699C16.8486 6.03918 16.025 5.99678 15.201 5.99999C12.757 5.99999 11.079 7.49199 11.079 10.231V12.586H8.33197V15.795H11.085V23.997H14.397Z"
                                            fill="#2E2E2E"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3501_8499">
                                            <path d="M0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12Z"
                                                fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg> -->
                                <svg width="100%" height="100%" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40.9967 20.9091C40.9967 31.9548 31.1333 40 20.0876 40C9.04194 40 2.36115 30.9091 0.99673 20C-0.367691 9.09091 9.95103 0 20.9967 0C32.0424 0 40.9967 9.8634 40.9967 20.9091Z" fill="#E8E3DB"/>
                                    <path d="M22.2636 28.1791V20.7281H24.7773L25.1509 17.8109H22.2636V15.9527C22.2636 15.1109 22.4982 14.5345 23.7064 14.5345H25.2373V11.9336C24.4924 11.8538 23.7437 11.8152 22.9945 11.8181C20.7727 11.8181 19.2473 13.1745 19.2473 15.6645V17.8054H16.75V20.7227H19.2527V28.1791H22.2636Z" fill="#2E2E2E"/>
                                </svg>

                            </a>
                        </li>
                        <li class="blog-top-share-li">


                            <a class="blog-top-share-link linkedin" href="javascript:void(0)" onclick="window.open( 'https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>', 'sharer', 'toolbar=0, status=0, width=375, height=500');return false;" title="Linkedin">
                            <svg  width="100%" height="100%" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M40.9967 20.9091C40.9967 31.9548 31.1333 40 20.0876 40C9.04194 40 2.36115 30.9091 0.99673 20C-0.367691 9.09091 9.95103 0 20.9967 0C32.0424 0 40.9967 9.8634 40.9967 20.9091Z" fill="#E8E3DB"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6641 13.0591C12.6641 12.6898 12.8108 12.3356 13.0719 12.0745C13.333 11.8133 13.6872 11.6666 14.0565 11.6666H27.9368C28.1198 11.6663 28.3011 11.7021 28.4702 11.772C28.6394 11.8418 28.7931 11.9444 28.9226 12.0737C29.0521 12.203 29.1548 12.3566 29.2248 12.5257C29.2948 12.6948 29.3308 12.876 29.3307 13.0591V26.9394C29.3309 27.1224 29.295 27.3037 29.2251 27.4729C29.1552 27.642 29.0526 27.7957 28.9232 27.9252C28.7938 28.0547 28.6401 28.1574 28.471 28.2274C28.3019 28.2974 28.1206 28.3334 27.9376 28.3333H14.0565C13.8736 28.3333 13.6924 28.2973 13.5235 28.2272C13.3545 28.1572 13.2009 28.0546 13.0716 27.9252C12.9423 27.7958 12.8398 27.6422 12.7698 27.4732C12.6999 27.3042 12.664 27.123 12.6641 26.9401V13.0591ZM19.261 18.0212H21.5179V19.1545C21.8436 18.503 22.6769 17.9166 23.9292 17.9166C26.33 17.9166 26.8989 19.2144 26.8989 21.5954V26.006H24.4694V22.1378C24.4694 20.7818 24.1436 20.0166 23.3163 20.0166C22.1686 20.0166 21.6913 20.8416 21.6913 22.1378V26.006H19.261V18.0212ZM15.0944 25.9022H17.5247V17.9166H15.0944V25.9015V25.9022ZM17.8724 15.3121C17.877 15.5202 17.84 15.7271 17.7635 15.9207C17.687 16.1142 17.5727 16.2906 17.4271 16.4394C17.2816 16.5882 17.1078 16.7064 16.9159 16.7871C16.7241 16.8678 16.518 16.9094 16.3099 16.9094C16.1018 16.9094 15.8957 16.8678 15.7039 16.7871C15.512 16.7064 15.3382 16.5882 15.1927 16.4394C15.0471 16.2906 14.9328 16.1142 14.8563 15.9207C14.7798 15.7271 14.7428 15.5202 14.7474 15.3121C14.7564 14.9036 14.925 14.515 15.217 14.2293C15.5091 13.9436 15.9014 13.7836 16.3099 13.7836C16.7184 13.7836 17.1107 13.9436 17.4028 14.2293C17.6948 14.515 17.8634 14.9036 17.8724 15.3121Z" fill="#2E2E2E"/>
                            </svg>
                         
                            <!-- <svg width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 16C0 7.16344 7.16344 0 16 0V0C24.8366 0 32 7.16344 32 16V16C32 24.8366 24.8366 32 16 32V32C7.16344 32 0 24.8366 0 16V16Z" fill="#E3DCD1"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9969 13.6427H16.8855V15.0816C17.3016 14.2541 18.3688 13.5105 19.9718 13.5105C23.0448 13.5105 23.7743 15.1579 23.7743 18.1803V23.778H20.6632V18.8686C20.6632 17.1474 20.2471 16.1767 19.1878 16.1767C17.7185 16.1767 17.108 17.2229 17.108 18.8679V23.778H13.9969V13.6427V13.6427ZM8.66208 23.6457H11.7732V13.5105H8.66208V23.6457V23.6457ZM12.2189 10.2057C12.219 10.4665 12.1673 10.7247 12.0667 10.9653C11.9662 11.2059 11.8188 11.4241 11.6332 11.6073C11.2571 11.9811 10.7479 12.1904 10.2176 12.1891C9.68828 12.1887 9.18033 11.98 8.80364 11.6081C8.61869 11.4243 8.47183 11.2058 8.37146 10.9652C8.2711 10.7246 8.2192 10.4665 8.21875 10.2057C8.21875 9.67919 8.42875 9.17519 8.80442 8.80341C9.18077 8.43098 9.68894 8.22218 10.2184 8.22241C10.7489 8.22241 11.2575 8.43163 11.6332 8.80341C12.0081 9.17519 12.2189 9.67919 12.2189 10.2057Z" fill="#2E2E2E"/>
                                </svg> -->

                            </a>
                        </li>
                        <li class="blog-top-share-li">

                            <a class="blog-top-share-link copy" href="#">
                                <span class="copy-content" style="display: none;"><?php the_permalink(); ?></span>
                                <svg  width="100%" height="100%" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40.9967 20.9091C40.9967 31.9548 31.1333 40 20.0876 40C9.04194 40 2.36115 30.9091 0.99673 20C-0.367691 9.09091 9.95103 0 20.9967 0C32.0424 0 40.9967 9.8634 40.9967 20.9091Z" fill="#E8E3DB"/>
                                    <path d="M17.9688 13.9393V23.0303C17.9688 23.4321 18.1284 23.8175 18.4125 24.1016C18.6967 24.3858 19.0821 24.5454 19.4839 24.5454H25.5445C25.9464 24.5454 26.3317 24.3858 26.6159 24.1016C26.9 23.8175 27.0597 23.4321 27.0597 23.0303V16.3954C27.0596 16.1936 27.0193 15.9937 26.941 15.8077C26.8626 15.6217 26.7479 15.4532 26.6036 15.3121L24.0922 12.856C23.8092 12.5792 23.429 12.4242 23.0331 12.4242H19.4839C19.0821 12.4242 18.6967 12.5838 18.4125 12.868C18.1284 13.1521 17.9688 13.5375 17.9688 13.9393V13.9393Z" stroke="#2E2E2E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M24.0284 24.5454V26.0605C24.0284 26.4624 23.8688 26.8478 23.5846 27.1319C23.3005 27.416 22.9151 27.5757 22.5133 27.5757H16.4527C16.0508 27.5757 15.6654 27.416 15.3813 27.1319C15.0971 26.8478 14.9375 26.4624 14.9375 26.0605V17.7272C14.9375 17.3253 15.0971 16.94 15.3813 16.6558C15.6654 16.3717 16.0508 16.212 16.4527 16.212H17.9678" stroke="#2E2E2E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <!-- <svg width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16Z" fill="#E3DCD1"/>
                                    <circle cx="16" cy="16" r="16" fill="#E3DCD1"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.119 6.39893C13.4368 6.39893 12.7826 6.66991 12.3002 7.15228C11.8179 7.63464 11.5469 8.28886 11.5469 8.97102V10.8333H10.5721C9.88993 10.8333 9.23571 11.1043 8.75335 11.5867C8.27099 12.069 8 12.7232 8 13.4054V23.1616C8 23.8438 8.27099 24.498 8.75335 24.9804C9.23571 25.4627 9.88993 25.7337 10.5721 25.7337H17.6675C18.3497 25.7337 19.0039 25.4627 19.4863 24.9804C19.9686 24.498 20.2396 23.8438 20.2396 23.1616V22.1863H21.2144C21.8966 22.1863 22.5508 21.9153 23.0332 21.4329C23.5155 20.9506 23.7865 20.2963 23.7865 19.6142V11.8464C23.7865 11.5037 23.718 11.1645 23.585 10.8487C23.4521 10.5329 23.2573 10.2468 23.0123 10.0073L20.0722 7.13197C19.5917 6.66213 18.9463 6.39901 18.2742 6.39893H14.119ZM19.4625 20.5898C19.4555 20.5896 19.4485 20.5895 19.4414 20.5895C19.4343 20.5895 19.4273 20.5896 19.4203 20.5898H14.119C13.8602 20.5898 13.6121 20.487 13.4291 20.304C13.2461 20.1211 13.1433 19.8729 13.1433 19.6142V11.6686C13.1439 11.6563 13.1442 11.6439 13.1442 11.6315C13.1442 11.6191 13.1439 11.6068 13.1433 11.5945V8.97102C13.1433 8.71227 13.2461 8.46412 13.4291 8.28115C13.6121 8.09819 13.8602 7.9954 14.119 7.9954H18.2742C18.5291 7.99546 18.7739 8.09529 18.9561 8.27345L21.8964 11.149C21.9893 11.2398 22.0632 11.3483 22.1136 11.4681C22.164 11.5879 22.19 11.7166 22.19 11.8465V19.6142C22.19 19.8729 22.0872 20.1211 21.9043 20.304C21.7213 20.487 21.4732 20.5898 21.2144 20.5898H19.4625ZM11.5469 12.4298V19.6142C11.5469 20.2963 11.8179 20.9506 12.3002 21.4329C12.7826 21.9153 13.4368 22.1863 14.119 22.1863H18.6432V23.1616C18.6432 23.4204 18.5404 23.6685 18.3574 23.8515C18.1744 24.0345 17.9263 24.1372 17.6675 24.1372H10.5721C10.3133 24.1372 10.0652 24.0345 9.88223 23.8515C9.69926 23.6685 9.59647 23.4204 9.59647 23.1616V13.4054C9.59647 13.1466 9.69926 12.8985 9.88223 12.7155C10.0652 12.5326 10.3133 12.4298 10.5721 12.4298H11.5469Z" fill="#2E2E2E"/>
                                </svg> -->
                            </a>
                        </li>
                    </ul>
                    <div class="blog-top-share-mobile blog-top-share-mobile--js">
                            <span class="blog-top-share-icon">
                            
                            </span>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </main><!-- #main -->
    <div class="c-copy c-copy--js">
        <div class="c-copy-notice">Link copied to clipboard</div>
    </div>
    <div class="c-header-progress">
        <div class="c-header-progress-line c-header-progress--js"></div>
    </div>
<?php

get_footer();
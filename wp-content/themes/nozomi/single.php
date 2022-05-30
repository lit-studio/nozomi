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
                                echo $firstCategory;

                                ?>
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
                                        <!-- <li class="blog-top-share-li">
                                            <a class="blog-top-share-link inst" href="https://www.instagram.com/?url=<?php the_permalink(); ?>"
                                               onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=375');return false;"
                                               target="_blank" title="Share on Instagram">
                                                <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12Z"
                                                          fill="#2E2E2E"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24ZM12 5.4C10.2072 5.4 9.9828 5.4072 9.279 5.4396H9.2784C8.5764 5.472 8.0964 5.5836 7.6764 5.7462C7.23628 5.91207 6.83762 6.1719 6.5082 6.5076C6.17227 6.83719 5.91223 7.23605 5.7462 7.6764C5.5836 8.0964 5.4714 8.5764 5.4396 9.2796C5.4078 9.9828 5.4 10.2072 5.4 12C5.4 13.7922 5.4072 14.0166 5.4396 14.7216C5.472 15.4236 5.5836 15.9036 5.7462 16.3236C5.91199 16.7639 6.17183 17.1628 6.5076 17.4924C6.83749 17.828 7.23655 18.0876 7.677 18.2532C8.097 18.4164 8.577 18.5286 9.279 18.5604C9.9828 18.5922 10.2072 18.6 12 18.6C13.7928 18.6 14.0172 18.5928 14.7216 18.5604C15.4236 18.528 15.9036 18.4164 16.3236 18.2532C16.7634 18.0876 17.1624 17.8284 17.4924 17.4924C17.828 17.1625 18.0876 16.7635 18.2532 16.323C18.4164 15.903 18.5286 15.423 18.5604 14.721C18.5922 14.0172 18.6 13.7928 18.6 12C18.6 10.2078 18.5928 9.9834 18.5604 9.2784C18.528 8.5764 18.4164 8.0964 18.2532 7.6764C18.0876 7.236 17.8284 6.8376 17.4924 6.5082C17.1624 6.1722 16.7634 5.9124 16.3236 5.7462C15.9036 5.5836 15.4236 5.4714 14.7204 5.4396C14.0172 5.4078 13.7928 5.4 12 5.4ZM12 6.5892C13.7622 6.5892 13.971 6.5958 14.667 6.6276C15.3108 6.657 15.66 6.7644 15.8928 6.855C16.1794 6.96073 16.4388 7.12924 16.6518 7.3482C16.8828 7.5792 17.025 7.7994 17.145 8.1072C17.2356 8.34 17.343 8.6892 17.3724 9.333C17.4042 10.029 17.4108 10.2378 17.4108 12C17.4108 13.7622 17.4042 13.971 17.3724 14.667C17.343 15.3108 17.2356 15.66 17.145 15.8928C17.0394 16.179 16.8708 16.4388 16.6518 16.6518C16.4208 16.8828 16.2006 17.025 15.8928 17.145C15.66 17.2356 15.3108 17.343 14.667 17.3724C13.971 17.4042 13.7628 17.4108 12 17.4108C10.2372 17.4108 10.029 17.4042 9.333 17.3724C8.6892 17.343 8.34 17.2356 8.1072 17.145C7.821 17.0394 7.5612 16.8708 7.3482 16.6518C7.1292 16.4388 6.9606 16.179 6.855 15.8928C6.7644 15.66 6.657 15.3108 6.6276 14.667C6.5958 13.971 6.5892 13.7622 6.5892 12C6.5892 10.2378 6.5958 10.029 6.6276 9.333C6.657 8.6892 6.7644 8.34 6.855 8.1072C6.96071 7.82057 7.12923 7.56123 7.3482 7.3482C7.5792 7.1172 7.7994 6.975 8.1072 6.855C8.34 6.7644 8.6892 6.657 9.333 6.6276C10.029 6.5958 10.2378 6.5892 12 6.5892ZM12.6402 14.1094C12.152 14.257 11.6278 14.2306 11.157 14.0346C10.8563 13.9099 10.587 13.7201 10.3684 13.4788C10.1499 13.2376 9.98756 12.9508 9.89312 12.6393C9.79869 12.3278 9.77451 11.9992 9.82231 11.6772C9.87011 11.3552 9.98872 11.0478 10.1696 10.7771C10.3504 10.5064 10.5891 10.2793 10.8683 10.1119C11.1475 9.94451 11.4603 9.84112 11.7843 9.80917C12.1083 9.77722 12.4353 9.81749 12.7418 9.92709C13.0483 10.0367 13.3267 10.2129 13.557 10.443C13.9182 10.803 14.1432 11.2772 14.1936 11.7847C14.244 12.2921 14.1167 12.8013 13.8334 13.2253C13.55 13.6494 13.1283 13.9618 12.6402 14.1094ZM10.7018 8.86582C10.2902 9.0363 9.91621 9.28619 9.6012 9.6012C8.965 10.2374 8.60758 11.1003 8.60758 12C8.60758 12.8997 8.965 13.7626 9.6012 14.3988C10.2374 15.035 11.1003 15.3924 12 15.3924C12.8997 15.3924 13.7626 15.035 14.3988 14.3988C14.7138 14.0838 14.9637 13.7098 15.1342 13.2982C15.3047 12.8866 15.3924 12.4455 15.3924 12C15.3924 11.5545 15.3047 11.1134 15.1342 10.7018C14.9637 10.2902 14.7138 9.91621 14.3988 9.6012C14.0838 9.28619 13.7098 9.0363 13.2982 8.86582C12.8866 8.69533 12.4455 8.60758 12 8.60758C11.5545 8.60758 11.1134 8.69533 10.7018 8.86582ZM16.3286 8.85238C16.2854 8.95061 16.2229 9.03916 16.1448 9.1128C15.993 9.25601 15.7913 9.33442 15.5826 9.33138C15.374 9.32834 15.1747 9.24408 15.0271 9.09651C14.8795 8.94893 14.7953 8.74964 14.7922 8.54096C14.7892 8.33227 14.8676 8.13062 15.0108 7.9788C15.0844 7.90074 15.173 7.83824 15.2712 7.79502C15.3694 7.75179 15.4753 7.72871 15.5826 7.72715C15.6899 7.72559 15.7965 7.74557 15.8959 7.78591C15.9954 7.82625 16.0857 7.88614 16.1616 7.96202C16.2375 8.03791 16.2973 8.12824 16.3377 8.22769C16.378 8.32713 16.398 8.43365 16.3965 8.54096C16.3949 8.64826 16.3718 8.75416 16.3286 8.85238Z"
                                                          fill="#E3DCD1"/>
                                                </svg>
                                            </a>
                                        </li> -->
                                        <li class="blog-top-share-li">


                                            <a class="blog-top-share-link linkedin" href="javascript:void(0)" onclick="window.open( 'https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>', 'sharer', 'toolbar=0, status=0, width=375, height=500');return false;" title="Linkedin">
                                                <!-- <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12Z"
                                                          fill="#2E2E2E"/>
                                                    <path d="M12 0C5.3725 0 0 5.3725 0 12C0 18.6275 5.3725 24 12 24C18.6275 24 24 18.6275 24 12C24 5.3725 18.6275 0 12 0ZM9.0625 16.9738H6.6325V9.15375H9.0625V16.9738ZM7.8325 8.19375C7.065 8.19375 6.56875 7.65 6.56875 6.9775C6.56875 6.29125 7.08 5.76375 7.86375 5.76375C8.6475 5.76375 9.1275 6.29125 9.1425 6.9775C9.1425 7.65 8.6475 8.19375 7.8325 8.19375ZM17.9375 16.9738H15.5075V12.64C15.5075 11.6313 15.155 10.9462 14.2763 10.9462C13.605 10.9462 13.2063 11.41 13.03 11.8563C12.965 12.015 12.9488 12.24 12.9488 12.4638V16.9725H10.5175V11.6475C10.5175 10.6713 10.4862 9.855 10.4537 9.1525H12.565L12.6763 10.2388H12.725C13.045 9.72875 13.8288 8.97625 15.14 8.97625C16.7388 8.97625 17.9375 10.0475 17.9375 12.35V16.9738Z"
                                                          fill="#E3DCD1"/>
                                                </svg> -->
                                                <svg width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 16C0 7.16344 7.16344 0 16 0V0C24.8366 0 32 7.16344 32 16V16C32 24.8366 24.8366 32 16 32V32C7.16344 32 0 24.8366 0 16V16Z" fill="#E3DCD1"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9969 13.6427H16.8855V15.0816C17.3016 14.2541 18.3688 13.5105 19.9718 13.5105C23.0448 13.5105 23.7743 15.1579 23.7743 18.1803V23.778H20.6632V18.8686C20.6632 17.1474 20.2471 16.1767 19.1878 16.1767C17.7185 16.1767 17.108 17.2229 17.108 18.8679V23.778H13.9969V13.6427V13.6427ZM8.66208 23.6457H11.7732V13.5105H8.66208V23.6457V23.6457ZM12.2189 10.2057C12.219 10.4665 12.1673 10.7247 12.0667 10.9653C11.9662 11.2059 11.8188 11.4241 11.6332 11.6073C11.2571 11.9811 10.7479 12.1904 10.2176 12.1891C9.68828 12.1887 9.18033 11.98 8.80364 11.6081C8.61869 11.4243 8.47183 11.2058 8.37146 10.9652C8.2711 10.7246 8.2192 10.4665 8.21875 10.2057C8.21875 9.67919 8.42875 9.17519 8.80442 8.80341C9.18077 8.43098 9.68894 8.22218 10.2184 8.22241C10.7489 8.22241 11.2575 8.43163 11.6332 8.80341C12.0081 9.17519 12.2189 9.67919 12.2189 10.2057Z" fill="#2E2E2E"/>
                                                </svg>

                                            </a>
                                        </li>
                                        <li class="blog-top-share-li">

                                            <a class="blog-top-share-link copy" href="#">
                                                <span class="copy-content" style="display: none;"><?php the_permalink(); ?></span>
                                                <!-- <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12Z"
                                                          fill="#2E2E2E"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24ZM9.22517 5.36423C9.58694 5.00246 10.0776 4.79922 10.5892 4.79922H13.7057C14.2097 4.79928 14.6938 4.99662 15.0542 5.349L17.2592 7.5055C17.443 7.68514 17.589 7.89969 17.6888 8.13654C17.7885 8.3734 17.8398 8.6278 17.8399 8.88479V14.7107C17.8399 15.2223 17.6366 15.7129 17.2749 16.0747C16.9131 16.4365 16.4224 16.6397 15.9108 16.6397H15.1797V17.3712C15.1797 17.8829 14.9765 18.3735 14.6147 18.7353C14.2529 19.0971 13.7623 19.3003 13.2507 19.3003H7.92907C7.41745 19.3003 6.92678 19.0971 6.56501 18.7353C6.20324 18.3735 6 17.8829 6 17.3712V10.0541C6 9.54245 6.20324 9.05178 6.56501 8.69001C6.92678 8.32824 7.41745 8.125 7.92907 8.125H8.66016V6.72829C8.66016 6.21667 8.8634 5.726 9.22517 5.36423ZM14.581 15.4422L14.5969 15.4424H15.9108C16.1049 15.4424 16.291 15.3653 16.4282 15.2281C16.5654 15.0908 16.6425 14.9047 16.6425 14.7107V8.88493C16.6425 8.78748 16.623 8.69094 16.5852 8.60112C16.5474 8.51127 16.492 8.42989 16.4223 8.36176L14.2171 6.20511C14.0804 6.07149 13.8968 5.99662 13.7057 5.99657H10.5892C10.3952 5.99657 10.2091 6.07367 10.0718 6.21089C9.9346 6.34811 9.85751 6.53423 9.85751 6.72829V8.6959C9.85793 8.70511 9.85814 8.71437 9.85814 8.72368C9.85814 8.73299 9.85793 8.74225 9.85751 8.75146V14.7107C9.85751 14.9047 9.9346 15.0908 10.0718 15.2281C10.2091 15.3653 10.3952 15.4424 10.5892 15.4424H14.5652L14.581 15.4422ZM8.66016 14.7107V9.32236H7.92907C7.73501 9.32236 7.54889 9.39945 7.41167 9.53667C7.27445 9.67389 7.19736 9.86001 7.19736 10.0541V17.3712C7.19736 17.5653 7.27445 17.7514 7.41167 17.8886C7.54889 18.0259 7.73501 18.103 7.92907 18.103H13.2507C13.4447 18.103 13.6308 18.0259 13.7681 17.8886C13.9053 17.7514 13.9824 17.5653 13.9824 17.3712V16.6397H10.5892C10.0776 16.6397 9.58694 16.4365 9.22517 16.0747C8.8634 15.7129 8.66016 15.2223 8.66016 14.7107Z"
                                                          fill="#E3DCD1"/>
                                                </svg> -->
                                                <svg width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16Z" fill="#E3DCD1"/>
                                                    <circle cx="16" cy="16" r="16" fill="#E3DCD1"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.119 6.39893C13.4368 6.39893 12.7826 6.66991 12.3002 7.15228C11.8179 7.63464 11.5469 8.28886 11.5469 8.97102V10.8333H10.5721C9.88993 10.8333 9.23571 11.1043 8.75335 11.5867C8.27099 12.069 8 12.7232 8 13.4054V23.1616C8 23.8438 8.27099 24.498 8.75335 24.9804C9.23571 25.4627 9.88993 25.7337 10.5721 25.7337H17.6675C18.3497 25.7337 19.0039 25.4627 19.4863 24.9804C19.9686 24.498 20.2396 23.8438 20.2396 23.1616V22.1863H21.2144C21.8966 22.1863 22.5508 21.9153 23.0332 21.4329C23.5155 20.9506 23.7865 20.2963 23.7865 19.6142V11.8464C23.7865 11.5037 23.718 11.1645 23.585 10.8487C23.4521 10.5329 23.2573 10.2468 23.0123 10.0073L20.0722 7.13197C19.5917 6.66213 18.9463 6.39901 18.2742 6.39893H14.119ZM19.4625 20.5898C19.4555 20.5896 19.4485 20.5895 19.4414 20.5895C19.4343 20.5895 19.4273 20.5896 19.4203 20.5898H14.119C13.8602 20.5898 13.6121 20.487 13.4291 20.304C13.2461 20.1211 13.1433 19.8729 13.1433 19.6142V11.6686C13.1439 11.6563 13.1442 11.6439 13.1442 11.6315C13.1442 11.6191 13.1439 11.6068 13.1433 11.5945V8.97102C13.1433 8.71227 13.2461 8.46412 13.4291 8.28115C13.6121 8.09819 13.8602 7.9954 14.119 7.9954H18.2742C18.5291 7.99546 18.7739 8.09529 18.9561 8.27345L21.8964 11.149C21.9893 11.2398 22.0632 11.3483 22.1136 11.4681C22.164 11.5879 22.19 11.7166 22.19 11.8465V19.6142C22.19 19.8729 22.0872 20.1211 21.9043 20.304C21.7213 20.487 21.4732 20.5898 21.2144 20.5898H19.4625ZM11.5469 12.4298V19.6142C11.5469 20.2963 11.8179 20.9506 12.3002 21.4329C12.7826 21.9153 13.4368 22.1863 14.119 22.1863H18.6432V23.1616C18.6432 23.4204 18.5404 23.6685 18.3574 23.8515C18.1744 24.0345 17.9263 24.1372 17.6675 24.1372H10.5721C10.3133 24.1372 10.0652 24.0345 9.88223 23.8515C9.69926 23.6685 9.59647 23.4204 9.59647 23.1616V13.4054C9.59647 13.1466 9.69926 12.8985 9.88223 12.7155C10.0652 12.5326 10.3133 12.4298 10.5721 12.4298H11.5469Z" fill="#2E2E2E"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="blog-top-share-mobile blog-top-share-mobile--js">
                                            <span class="blog-top-share-icon">
                                            
                                            </span>
                                    </div>
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
                        <div class="item">
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
                    <div class="posts-wrap">
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
            <?php endif; ?>
        </div>
    </main><!-- #main -->
    <div class="c-header-progress">
        <div class="c-header-progress-line c-header-progress--js"></div>
    </div>
<?php

get_footer();
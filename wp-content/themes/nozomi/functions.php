<?php
function remove_wordpress_version_number()
{
    return '';
}

add_filter('the_generator', 'remove_wordpress_version_number');
function remove_version_from_scripts($src)
{
    if (strpos($src, '?ver='))
        $src = remove_query_arg('ver', $src);
    return $src;
}

add_filter('style_loader_src', 'remove_version_from_scripts');
add_filter('script_loader_src', 'remove_version_from_scripts');

$manifest = json_decode(file_get_contents(get_stylesheet_directory() . '/mix-manifest.json'), true);


function change_menu_label()
{
    global $menu, $submenu;

    // remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');

}

register_nav_menus(
    array(
        'primary' => __('Menu header'),
        'primary1' => __('Menu footer'),
    )
);
add_action('admin_menu', 'change_menu_label');

if (!function_exists('dd')) {
    function dd(...$args)
    {

        ini_set("highlight.comment", "#969896; font-style: italic");
        ini_set("highlight.default", "#FFFFFF");
        ini_set("highlight.html", "#D16568");
        ini_set("highlight.keyword", "#7FA3BC; font-weight: bold");
        ini_set("highlight.string", "#F2C47E");
        foreach ($args as $arg) {
            $output = highlight_string(var_export($arg, true), true);
            echo "<div style=\"background-color: #1C1E21; padding: 1rem; margin-bottom:20px\">{$output}</div>";
        }
        //  die();
    }
}


function login_logo()
{ ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg);
            width: 180px;
            height: 96px;
            background-size: contain;
        }
    </style>
<?php }

add_action('login_enqueue_scripts', 'login_logo');

function login_logo_url()
{
    // dd(home_url());
    return home_url();
}

add_filter('login_headerurl', 'login_logo_url');

function login_logo_url_title()
{
    return 'nozomi';
}

add_action('wp_head', 'nozomi_add_favicon');

function nozomi_add_favicon()
{
    ?>
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon/favicon.ico" sizes="16x16">
    <link rel="apple-touch-icon" sizes="57x57"
          href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
          href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
          href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
          href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
          href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
          href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
          href="<?php echo get_template_directory_uri() ?>/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php echo get_template_directory_uri() ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
          href="<?php echo get_template_directory_uri() ?>/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo get_template_directory_uri() ?>/favicon/favicon-16x16.png">
    <?php /*
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon/favicon.ico" sizes="32x32">
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon/favicon.ico" sizes="192x192">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/favicon/favicon.ico">
     */ ?>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage"
          content="<?php echo get_template_directory_uri() ?>/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php
}

add_action('wp_enqueue_scripts', function () {
    global $manifest, $wp_scripts;
    wp_enqueue_style('nozomi-style', get_template_directory_uri() . $manifest['/front.css'], [], null);
    wp_register_script('nozomi-script', get_template_directory_uri() . $manifest['/front.js'], [], false, true);
    wp_enqueue_script('nozomi-script');

    $nozomiData = [
        'url' => $_SERVER['REQUEST_URI'],
        'rootUrl' => get_bloginfo('template_url')
    ];
    if (is_page()) $nozomiData['page'] = 'page';
    if (is_front_page()) $nozomiData['page'] = 'home';
    if (is_page_template('page-blog.php')) $nozomiData['page'] = 'blog';
    if (is_category()) $nozomiData['page'] = 'blog';
    if (is_singular('post')) $nozomiData['page'] = 'single-blog';
    if (is_page_template('page-join-us.php')) $nozomiData['page'] = 'about';
    if (is_page_template('page-portfolio.php')) $nozomiData['page'] = 'portfolio';
    if (is_tax('portfolio_cat')) $nozomiData['page'] = 'portfolio';
    if (is_page_template('page-how-we-work.php')) $nozomiData['page'] = 'how-we-work';
    if (is_singular('portfolio')) $nozomiData['page'] = 'single-portfolio';

    //    if (is_page_template('page-contact.php')) $nozomiData['page'] = 'contact';
    wp_localize_script('nozomi-script', 'nozomiData', $nozomiData);
    // dd($nozomiData['page']);

});

add_filter('body_class', function ($classes) {
    if (is_page()) array_push($classes, 'p-page');
    if (is_404()) array_push($classes, 'p-404');
    if (is_front_page()) array_push($classes, 'p-home');
    if (is_page_template('page-blog.php')) array_push($classes, 'p-blog');
    if (is_category()) array_push($classes, 'p-blog');
    if (is_singular('post')) array_push($classes, 'p-single-blog');
    if (is_page_template('page-join-us.php')) array_push($classes, 'p-about');
    if (is_page_template('page-portfolio.php')) array_push($classes, 'p-portfolio');
    if (is_tax('portfolio_cat')) array_push($classes, 'p-portfolio');
    if (is_page_template('page-how-we-work.php')) array_push($classes, 'p-how');
    if (is_singular('portfolio')) array_push($classes, 'p-single-portfolio');
//    if (is_page_template('page-contact.php')) array_push($classes, 'p-contact');


    if (isset($classes['class-to-remove'])) {
        unset($classes['class-to-remove']);
    }


    return $classes;
});


add_filter('upload_mimes', 'svg_upload_allow');

function svg_upload_allow($mimes)
{
    $mimes['svg'] = 'image/svg+xml';

    return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);


function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{


    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>='))
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    else
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));


    if ($dosvg) {


        if (current_user_can('manage_options')) {

            $data['ext'] = 'svg';
            $data['type'] = 'image/svg+xml';
        } else {
            $data['ext'] = $type_and_ext['type'] = false;
        }

    }

    return $data;
}

add_filter('wp_prepare_attachment_for_js', 'show_svg_in_media_library');

function show_svg_in_media_library($response)
{
    if ($response['mime'] === 'image/svg+xml') {

        $response['image'] = [
            'src' => $response['url'],
        ];
    }

    return $response;
}

add_action('admin_init', 'remove_acf_options_page', 99);
function remove_acf_options_page()
{
    remove_menu_page('acf-options');
}

if (function_exists('acf_add_options_page')) {


//    acf_add_options_sub_page('General');
//    acf_add_options_sub_page('Header');
    acf_add_options_page('Footer');

}
remove_action('wp_head', 'wp_generator');

register_taxonomy('portfolio_cat', array('portfolio'), [
    'label' => '',
    'labels' => [
        'name' => __('Portfolio categories', 'nozomi'),
        'singular_name' => __('Portfolio categories', 'nozomi'),
    ],
    'public' => true,
    'show_in_rest'        => true,
    'hierarchical' => true,
    'rewrite' => true,
]);
add_action('init', 'create_portfolio');
function create_portfolio()
{
    $labels = array(
        'name' => _x('Portfolio', 'post type general name'),
        'singular_name' => _x('Portfolio', 'post type singular name'),
        'add_new' => __('Add item'),
        'add_new_item' => __('Add item'),
        'edit_item' => __('Edit item'),
        'new_item' => __('Add item'),
        'view_item' => __('View item'),
        'search_items' => __('Search Portfolio'),
        'not_found' => __('No Portfolio found'),
        'not_found_in_trash' => __('No Portfolio found in Trash'),
        'parent_item_colon' => ''
    );
    $supports = array('title', 'editor');
    register_post_type(
        'portfolio',
        array(
            'labels' => $labels,
            'hierarchical' => true,
            'public' => true,
            'supports' => $supports,
            'rewrite' => array('slug' => 'portfolio-item'),
        )
    );
}

add_image_size('home_1', '1680', '9999', false);
add_image_size('how', '2408', '9999', false);
add_image_size('home_2', '4720', '9999', false);
add_image_size('author', '288', '288', true);
add_image_size('blog', '5120', '9999', false);
add_image_size('blog_min', '15600', '880', true);
add_image_size('join_us', '1162', '1162', true);

function acf_select_author_choices($field)
{

    // reset choices
    $field['choices'] = array();


    // if has rows
    if (have_rows('authors', 15)) {

        // while has rows
        $counter = 1;
        while (have_rows('authors', 15)) {

            // instantiate row
            the_row();


            // vars
            $value = $counter;
            $author_img = get_sub_field('image');
            $label = '<div class="item-img"><img class="img" src="' . $author_img['sizes']['author'] . '" alt="" /></div><div class="item-desc"><div class="item-name"><div class="item-name--name">' . get_sub_field('name') . '</div></div><div class="item-status"><div class="item-status--status">' . get_sub_field('position') . '</div></div></div>';


            // append to choices
            $field['choices'][$value] = $label;

            $counter++;
        }

    }


    // return the field
    return $field;

}

add_filter('acf/load_field/name=select_author', 'acf_select_author_choices');

function my_acf_admin_head()
{
    ?>
    <style type="text/css">

        [data-name="select_author"] .acf-selection {
            display: flex;
        }

        [data-name="select_author"] .item-img {
            display: flex;
            align-items: center;
        }
        [data-name="select_author"] .item-img .img {
            width: 20px;
        }

        [data-name="select_author"] .item-name {
            display: inline-block;
            font-weight: bold;
            padding-left: 10px;
            padding-right: 10px;
        }

        [data-name="select_author"] .item-status {
            display: inline-block;
        }



        #select2-acf-field_628238cde14ad-results li {
            display: flex;
        }

        #select2-acf-field_628238cde14ad-results .item-img {
            display: flex;
            align-items: center;
        }
        #select2-acf-field_628238cde14ad-results .item-img .img {
            width: 20px;
        }

        #select2-acf-field_628238cde14ad-results .item-name {
            display: inline-block;
            font-weight: bold;
            padding-left: 10px;
            padding-right: 10px;
        }

        #select2-acf-field_628238cde14ad-results .item-status {
            display: inline-block;
        }


    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');

// Remove tags support from posts
function myprefix_unregister_tags() {
    unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'myprefix_unregister_tags');

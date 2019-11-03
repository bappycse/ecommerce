<?php

ini_set('upload_max_size','500M');
ini_set('post_max_size','100M');
ini_set('max_execution_time','300');

function hateemtai_blog_theme_setup()
{
    load_theme_textdomain("hateemtai_blog");
    add_theme_support("post-thumbnails");
    add_theme_support("custom-logo");
    add_theme_support("title-tag");
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'comment-list'));
    add_theme_support("post-formats", array("image", "gallery", "quote", "audio", "video", "link"));
    add_image_size('featured-image', 375, 250);
    add_image_size('custom-size', 100, 67);
    add_image_size('home-post-thumb', 360, 240);
    add_image_size('cat-post-thumb', 130, 87);
    add_image_size('lifestyle-post-thumb', 230, 153);
    add_image_size('popular-posts', 100, 67);
    add_image_size('all-posts', 300, 200);
    add_image_size('cat-home-thumb', 750, 500);
    add_editor_style("/assets/css/editor-style.css");



    register_nav_menus(array(
        "primary"   => __("Top menu", "hateemtai_blog"),
        "mobile"   => __("Mobile Menu", "hateemtai_blog"),
        "secondary" => __("Footer menu", "hateemtai_blog")
    ));
    add_image_size("hateemtai_blog-home-square", 400, 400, true);
}

add_action("after_setup_theme", "hateemtai_blog_theme_setup");

function hateemtai_blog_assets()
{

    wp_enqueue_style("bootstrap-css", get_theme_file_uri("assets/css/bootstrap.min.css"), null, "1.0");
    wp_enqueue_style("fontawesome-css", get_theme_file_uri("/assets/css/font-awesome.min.css"), null, "1.0");
    wp_enqueue_style("main-css", get_theme_file_uri("assets/css/style.css"), null, "1.0");
    wp_enqueue_style("hateemtai_blog-css", get_stylesheet_uri(), null, '1.5');
    wp_enqueue_script("jquery-js", get_theme_file_uri("assets/js/jquery.min.js"), null, "1.0");
    wp_enqueue_script("bootstrap-js", get_theme_file_uri("/assets/js/bootstrap.min.js"), null, "1.0");
    wp_enqueue_script("steller-js", get_theme_file_uri("/assets/js/jquery.stellar.min.js"), array("jquery"), "1.0", true);
    wp_enqueue_script('hateemtai_blog-loadmore-js', get_template_directory_uri() . '/assets/js/loadmore.js', array('jquery'), '1.5', true);
    wp_enqueue_script("main-js", get_theme_file_uri("/assets/js/main.js"), array("jquery"), "1.0", true);
}

add_action("wp_enqueue_scripts", "hateemtai_blog_assets");


function shapeSpace_display_popular_posts($atts)
{

    extract(shortcode_atts(array(
        'num' => 6,
        'cat' => '',
    ), $atts));

    $temps = explode(',', $cat);
    $array = array();
    foreach ($temps as $temp) $array[] = trim($temp);

    $cats = !empty($cat) ? $array : '';

    ?>

    <?php $popular = new WP_Query(
            array(
                'meta_key'       => 'popular_posts',
                'meta_value'     => '1',
                'posts_per_page' => 5,
                'order' => 'DESC',

            )
        );

        while ($popular->have_posts()) :
            $popular->the_post();
            $postcat = get_the_category($popular->post->ID);
            $trimed_title = wp_trim_words(get_the_title(), 5, NULL);
            ?>

        <div class="post post-widget">
            <a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('popular-posts'); ?></a>
            <div class="post-body">
                <div class="post-category">
                    <?php for ($i = 0; $i < count($postcat); $i++) : ?>
                        <a href="<?php echo get_category_link($postcat[$i]->term_id); ?>"><?php echo $postcat[$i]->name  ?></a>
                    <?php endfor;  ?>
                </div>
                <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo $trimed_title; ?></a></h3>
            </div>
        </div>
    <?php endwhile;
        wp_reset_postdata(); ?>
<?php }

add_shortcode('diy_pop_posts', 'shapeSpace_display_popular_posts');

function get_max_page_number()
{
    global $wp_query;

    return $wp_query->max_num_pages;
}

function homepage_all_category()
{
    $api_url = "https://api.hateemtai.com/api/Productcategories/";
    $api_data = file_get_contents($api_url);
    $data = json_decode($api_data);
    ?>
    <div class="related-category">
        <div class="section-title" style="margin: 20px 0 30px -6px">
            <h2 class="title">Shop by Category</h2>
        </div>
        <div class="row">
            <?php
                $limit_id = 0;
                foreach ($data as $cat_data) {
                    $category_name = strtolower($cat_data->category);
                    $category_name = str_replace("'s", "s", $category_name);
                    $category_name = str_replace("&", "", $category_name);
                    $cat_url =  preg_split("/[\s,]+/", $category_name);
                    $cat_url = join("-", $cat_url) . "-";
                    ?>
                <div class="col-sm-3 col-md-3 col-lg-2 api-image-area <?php if ($limit_id > 17) {
                                                                                    echo "box-hidden";
                                                                                }; ?>">
                    <div class="api-cat-area">
                        <div class="api-image">
                            <?php echo "<a class='' href='http://hateemtai.com/$cat_url$cat_data->categoryId' target='_blank'><img class='api-img' src='https://hateemtaicdn.azureedge.net/prod/images/Category/$cat_data->image'></a>"; ?>
                        </div>
                        <div class="cat-body">
                            <h3 class="api-post-title text-center"><?php echo $cat_data->category; ?></h3>
                        </div>
                    </div>
                </div>
                <?php
                        if ($limit_id > 17) { ?>
                    <div class="col-sm-3 col-md-3 col-lg-12 api-image-area text-center">
                        <a id="load-more-cat"><i class="fa fa-angle-double-down" style="font-size: 26px;
    color: #ccc;cursor:pointer;"></i></a>
                        <a id="load-more-cat-up"><i class="fa fa-angle-double-up" style="font-size: 26px;
    color: #ccc;cursor:pointer;"></i></a>
                    </div>
            <?php };
                    $limit_id++;
                }
                ?>
        </div>
    </div>
    <?php

    }

    add_shortcode('home_all_category', 'homepage_all_category');

    function any_hateemtai_all_category($attributes)
    {
        if (isset($attributes['type'])) {
            $type = $attributes['type'];
        } else {
            $type = "";
        }
        if ($type == 'category') {
            $api_url = "https://api.hateemtai.com/api/Productcategories/";
            $api_data = file_get_contents($api_url);
            $data = json_decode($api_data);
            ob_start();
            ?>
        <div class="related-category">
            <h3 class="api-main-title">Shop Categories</h3>
            <div class="row">
                <?php
                        foreach ($data as $cat_data) {
                            $category_name = strtolower($cat_data->category);
                            $category_name = str_replace("'s", "s", $category_name);
                            $category_name = str_replace("&", "", $category_name);
                            $cat_url = preg_split("/[\s,]+/", $category_name);
                            $cat_url = join("-", $cat_url) . "-";
                            ?>
                    <div class="col-md-3 api-image-area">
                        <div class="api-cat-area">
                            <div class="api-image">
                                <?php echo "<a class='' href='http://hateemtai.com/$cat_url$cat_data->categoryId' target='_blank'><img src='https://hateemtaicdn.azureedge.net/prod/images/Category/$cat_data->image'></a>"; ?>
                            </div>
                            <div class="cat-body">
                                <h3 class="api-post-title text-center"><?php echo $cat_data->category; ?></h3>
                            </div>
                        </div>
                    </div>
                <?php
                        }
                        ?>
            </div>
        </div>
        <?php
            } else {
                echo "Not found category";
            }
            return ob_get_clean();
        }

        add_shortcode('all_category', 'any_hateemtai_all_category');

        function hateemtai_sub_category($attributes)
        {
            if (($attributes['type'] == "subcategory") && ($attributes['id'] > 32)) {
                //echo "Category is found";
                $json_url = "http://api.hateemtai.com/api/Productcategories/";
                $json = file_get_contents($json_url);
                $alldata = json_decode($json);
                $id = $attributes['id'];
                ob_start();
                foreach ($alldata as $data) {
                    $parent_cat = $data->category;
                    if ($data->categoryId != $id) {
                        continue;
                    }
                    $scs = $data->productSubCategories;
                    ?>
            <div class="section-row sub-category-area">
                <div class="row">
                    <div class="col-12">
                        <h3 class="title-sub">Shop Categories</h3>
                        <ul class="hateem-sub-category">
                            <?php
                                        foreach ($scs as $sc) {
                                            $parent_cat_name = strtolower($parent_cat);
                                            $parent_cat_name = str_replace("'s", "s", $parent_cat_name);
                                            $parent_cat_name = str_replace("&", "", $parent_cat_name);
                                            $parent_cat_name =  preg_split("/[\s,]+/", $parent_cat_name);
                                            $parent_cat_url = join("-", $parent_cat_name) . "/";
                                            $sub_category_name = strtolower($sc->subCategory);
                                            $sub_category_name = str_replace("'s", "s", $sub_category_name);
                                            $sub_category_name = str_replace("&", "", $sub_category_name);
                                            $sub_cat_url =  preg_split("/[\s,]+/", $sub_category_name);
                                            $sub_cat_url = join("-", $sub_cat_url) . "-";
                                            echo "<li><a href='http://hateemtai.com/$parent_cat_url$sub_cat_url$sc->subCategoryId' target='_blank'>$sc->subCategory</a></li>";
                                        }
                                        ?>
                        </ul>
                    </div>
                </div>
            </div>
<?php
        }
    } else {
        echo "Sub Category id is not found";
    }
    return ob_get_clean();
}

add_shortcode('sub_category', 'hateemtai_sub_category');

add_action('widgets_init', function () {

    register_sidebar(array(
        'name'          => 'Main Site Banner',
        'id'            => 'main-banner-image',
        'before_widget' => '<div class="main-banner-image">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => ''
    ));
});

<?php 

/*
|--------------------------------------------------------------------------
| Enqueue scripts
|--------------------------------------------------------------------------
*/

function sjd_scripts() {

    
    // SCRIPTS
    // Remove jquery
    // wp_deregister_script('jquery');

    // User scripts    
    wp_enqueue_script(
        'bundle',
        get_template_directory_uri() . '/dist/bundle.js',
        null,
        md5_file(get_template_directory() . '/dist/bundle.js'),
        true
    );

    // Pass WordPress data into our JS
    $js_data = array(
        'siteURL' => get_site_url(),
        'themeURL' => get_stylesheet_directory_uri(),
        'ajaxURL' => admin_url('admin-ajax.php'),
        'pageID' => get_the_id()
    );
    wp_localize_script( 'bundle', 'siteData',  $js_data);

    // User styles
    wp_enqueue_style( 
        'style', 
        get_template_directory_uri() . '/dist/main.css', 
        null, 
        md5_file(get_template_directory() . '/dist/main.css') 
    );

}

add_action( 'wp_enqueue_scripts', 'sjd_scripts' );

/*
|--------------------------------------------------------------------------
| Basic setup
|--------------------------------------------------------------------------
*/

// Hide admin bar
show_admin_bar(false);

// Clean up header
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );

// Theme support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

/*
|--------------------------------------------------------------------------
| Custom Post Types
|--------------------------------------------------------------------------
*/

function add_post_types() {
    // Custom post type for Case Studies
    $singular = "Case Study";
    $plural = "Case Studies";
    $args = array(
        'labels' => array(
            "name" => __( "$plural" ),
            "singular_name" => __( "$singular" ),
            "add_new" => __( "Add New" ),
            "add_new_item" => __( "Add New $singular" ),
            "edit" => __( "Edit" ),
            "edit_item" => __( "Edit $singular" ),
            "new_item" => __( "New $singular" ),
            "view" => __( "View $singular" ),
            "view_item" => __( "View $singular" ),
            "search_items" => __( "Search $plural" ),
            "not_found" => __( "No $plural found." ),
            "not_found_in_trash" => __( "No $plural found in Trash." )
        ),
        'public' => true,
        'menu_icon' => 'dashicons-admin-page',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'has_archive' => "case-studies",
        'hierarchical' => false
    );
    register_post_type( 'case-study', $args );
}
add_action( 'init', 'add_post_types' );
function add_taxonomies() {
    // Custom post type for Industries
    $singular = "Industry";
    $plural = "Industries";
    $args = array(
        "labels" => array(
            "name" => _x( "$plural", "taxonomy general name", "textdomain" ),
            "singular_name" => _x( "$singular", "taxonomy singular name", "textdomain" ),
            "search_items" => __( "Search $plural", "textdomain" ),
            "all_items" => __( "All $plural", "textdomain" ),
            "parent_item" => __( "Parent $singular", "textdomain" ),
            "parent_item_colon" => __( "Parent $singular:", "textdomain" ),
            "edit_item" => __( "Edit $singular", "textdomain" ),
            "update_item" => __( "Update $singular", "textdomain" ),
            "add_new_item" => __( "Add New $singular", "textdomain" ),
            "new_item_name" => __( "New $singular Name", "textdomain" ),
            "menu_name" => __( "$plural", "textdomain" ),
            "separate_items_with_commas" => __( "Separate $plural with commas", "textdomain" ),
            "choose_from_most_used" => __( "Choose from the most used $plural", "textdomain" )
        ),
        "hierarchical" => true,
        "show_ui" => true,
        "show_admin_column" => true,
        "query_var" => true
    );
    register_taxonomy( "industry", array( "case-study" ), $args );
    // Custom post type for Expertises
    $singular = "Expertise";
    $plural = "Expertises";
    $args = array(
        "labels" => array(
            "name" => _x( "$plural", "taxonomy general name", "textdomain" ),
            "singular_name" => _x( "$singular", "taxonomy singular name", "textdomain" ),
            "search_items" => __( "Search $plural", "textdomain" ),
            "all_items" => __( "All $plural", "textdomain" ),
            "parent_item" => __( "Parent $singular", "textdomain" ),
            "parent_item_colon" => __( "Parent $singular:", "textdomain" ),
            "edit_item" => __( "Edit $singular", "textdomain" ),
            "update_item" => __( "Update $singular", "textdomain" ),
            "add_new_item" => __( "Add New $singular", "textdomain" ),
            "new_item_name" => __( "New $singular Name", "textdomain" ),
            "menu_name" => __( "$plural", "textdomain" ),
            "separate_items_with_commas" => __( "Separate $plural with commas", "textdomain" ),
            "choose_from_most_used" => __( "Choose from the most used $plural", "textdomain" )
        ),
        "hierarchical" => true,
        "show_ui" => true,
        "show_admin_column" => true,
        "query_var" => true
    );
    register_taxonomy( "expertise", array( "case-study" ), $args );
}
add_action( 'init', 'add_taxonomies' );

/*
|--------------------------------------------------------------------------
| Shortcodes
|--------------------------------------------------------------------------
*/

function row_of_images_shortcode($atts, $content) {

    // Remove all tags except image tags
    $content = strip_tags($content, '<img>');

    // Wrap each image in p tags
    $content = str_replace( '<img', '<p><img', $content );
    $content = str_replace( '</img>', '</img></p>', $content );

    ob_start();?>

    <div class="row-of-images">
        <?php echo $content; ?>
    </div>

    <? return ob_get_clean();
}

add_shortcode('row-of-images', 'row_of_images_shortcode');
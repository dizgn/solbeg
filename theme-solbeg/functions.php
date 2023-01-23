<?php 






function load_posts_by_category() {
    $category_id = $_POST['category_id'];
    $args = array(
        'post_type' => 'post',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'term_id',
                'terms'    => $category_id
            )
        )
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post();
            require( locate_template( 'loop.php' ) );
        endwhile;
    else :
        // Display no posts found message
    endif;
    wp_reset_postdata();
    die();
}
add_action( 'wp_ajax_load_posts_by_category', 'load_posts_by_category' );
add_action( 'wp_ajax_nopriv_load_posts_by_category', 'load_posts_by_category' );





add_filter('show_admin_bar', '__return_false');


// Add custom field to posts
function my_theme_add_custom_field() {
    add_post_meta( get_the_ID(), 'custom_field', '', true );
}
add_action( 'save_post', 'my_theme_add_custom_field' );

// Enqueue Styles and Scripts
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Register Navigation Menus
register_nav_menus( array(
    'header-menu' => __( 'Header Menu', 'my-theme' ),
) );

// Add Theme Support
add_theme_support( 'post-thumbnails' );

// Set thumbnail size
set_post_thumbnail_size( 300, 200 );



// Load Theme Text Domain
function my_theme_setup() {
    load_theme_textdomain( 'my-theme', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );
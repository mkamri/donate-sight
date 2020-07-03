<?php

/************************************************************************
project_files - include styles and scripts
************************************************************************/
/**
 * Load bootstrap from CDN
 * https://getbootstrap.com/
 *
 * Added functions to add the integrity and crossorigin attributes to the style and script tags.
 */
function enqueue_load_bootstrap() {
    // Add bootstrap CSS
    wp_register_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false, NULL, 'all' );
    wp_enqueue_style( 'bootstrap-css' );

    // Add popper js
    wp_register_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', ['jquery'], NULL, true );
    wp_enqueue_script( 'popper-js' );

    // Add bootstrap js
    wp_register_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['jquery'], NULL, true );
    wp_enqueue_script( 'bootstrap-js' );
}

// Add integrity and cross origin attributes to the bootstrap css.
function add_bootstrap_css_attributes( $html, $handle ) {
    if ( $handle === 'bootstrap-css' ) {
        return str_replace( '/>', 'integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />', $html );
    }
    return $html;
}
add_filter( 'style_loader_tag', 'add_bootstrap_css_attributes', 10, 2 );

// Add integrity and cross origin attributes to the bootstrap script.
function add_bootstrap_script_attributes( $html, $handle ) {
    if ( $handle === 'bootstrap-js' ) {
        return str_replace( '></script>', ' integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>', $html );
    }
    return $html;
}
add_filter('script_loader_tag', 'add_bootstrap_script_attributes', 10, 2);

// Add integrity and cross origin attributes to the popper script.
function add_popper_script_attributes( $html, $handle ) {
    if ( $handle === 'popper-js' ) {
        return str_replace( '></script>', ' integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>', $html );
    }
    return $html;
}
add_filter('script_loader_tag', 'add_popper_script_attributes', 10, 2);

add_action( 'wp_enqueue_scripts', 'enqueue_load_bootstrap' );



// Add theme styles and fonts

function theme_styles() {
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css', '', filemtime(get_template_directory() . '/css/main.css') );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap' );
    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );


/************************************************************************
REGISTER WIDGET AREAS
************************************************************************/
function register_widget_areas() {

    register_sidebar( array(
      'name'          => 'Footer area left',
      'id'            => 'footer_area_left',
      'description'   => 'Footer widget area left',
      'before_widget' => '<section class="footer-area footer-area-left">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ));

    register_sidebar( array(
        'name'          => 'Front page contact form',
        'id'            => 'front_contact_form',
        'description'   => 'This is the space for the contact form on the front page.',
        'before_widget' => '<section class="front-contact">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
      ));

    register_sidebar( array(
        'name'          => 'Contact Us Page Form',
        'id'            => 'contact_us_page_form',
        'description'   => 'Main form on the Contact Us page.',
        'before_widget' => '<section class="contact-us-contact">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar( array(
        'name'          => 'Volunteer Page Form',
        'id'            => 'volunteer_page_form',
        'description'   => 'Main form on the Volunteer page.',
        'before_widget' => '<section class="volunteer-contact">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar( array(
        'name'          => 'Surgeon Form',
        'id'            => 'surgeon_form',
        'description'   => 'Main form on the Surgeon Form page.',
        'before_widget' => '<section class="surgeon-form-contact">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
    
  }
  
  add_action( 'widgets_init', 'register_widget_areas' );
  

/************************************************************************
THEME SUPPORTS
************************************************************************/
function theme_supports() {
    add_theme_support( 'post-thumbnails', array( 'post' ) );
}
add_action( 'after_setup_theme', 'theme_supports' );

/************************************************************************
GET DATE FOR FOOTER
************************************************************************/

function comicpress_copyright() {
    $years = array( 2019, date( 'Y' ) );
    $years = array_unique( array_filter( $years ) );
    $copyright = implode(' - ', $years);
    return '©' . $copyright;
}
    ?>
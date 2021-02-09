<?php

function register_menus() {
  register_nav_menus(
    array(
      'huvud-meny' => __( 'Huvudnavigering' ),
      'andra-meny' => __( 'Målgruppsnavigering' ),
      'tredje-meny' => __( 'Sidfotsnavigering' ),
      'fjarde-meny' => __( 'Innehållsnavigering' ),
      'femte-meny' => __( 'Kapitelfotsnavigering' )
    )
  );
}

add_action( 'init', 'register_menus' );
add_theme_support( 'menus' );

/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function sfi_search_form( $form ) {
  $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url() . '" >
  <div class="sfi-search-form-wrapper">
  <input type="text" class="input input-search" placeholder="Sök här ..." value="'. get_search_query() .'" name="s" id="s"  autocomplete/>
  <button alt="Sökknapp" type="submit" class="button button-solid button-search " id="search-btn">
    <i class="fas fa-search"></i>
    <p>Sök</p>
  </button>
  </div>
  </form>';

  return $form;
}
add_filter( 'get_search_form', 'sfi_search_form' );


if(!function_exists('colorizer')){
  function colorizer() {
      global $post;
      $deps = array('jquery');
      $version= '1.0'; 
      $in_footer = true;
      wp_enqueue_script('colorizer', get_stylesheet_directory_uri() . '/js/colorizer.js', $deps, $version, $in_footer);
      wp_localize_script('colorizer', 'colorizer_vars', array(
              'postID' => $post->ID
          )
      );
  }
}
add_action('wp_enqueue_scripts', 'colorizer');


/* For the search-function */
add_action( 'pre_get_posts', function( $query ) {

  // Check that it is the query we want to change: front-end search query
  if( $query->is_main_query() && ! is_admin() && $query->is_search() ) {

      // Change the query parameters
      $query->set( 'posts_per_page', 20 );

  }

} );

/* Add excerpts for Pages */
add_post_type_support( 'page', 'excerpt' );

/* Add support for Thumbnails in Pages */
add_theme_support( 'post-thumbnails' );


/* Add custom support for Wordpress-pages with custom templates */
add_filter( 'wp_title', 'wpdocs_hack_wp_title_for_home' );
 
/**
 * Customize the title for the home page, if one is not set.
 *
 * @param string $title The original title.
 * @return string The title to use.
 */
function wpdocs_hack_wp_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = __( 'Privat ekonomi på enkel svenska', 'textdomain' ) . '  ' . get_bloginfo( 'description' );
  }
  return $title;
}

?>
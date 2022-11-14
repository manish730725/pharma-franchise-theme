<?php
  function register_my_menus() {
  register_nav_menus(
    array(
      'footer-menu' => __( 'footer Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}

add_action( 'init', 'register_my_menus' );


add_theme_support( 'post-thumbnails' );
      function excerpt($limit) {
        $excerpt = explode(' ', get_the_excerpt(), $limit);
  
        if (count($excerpt) >= $limit) {
            array_pop($excerpt);
            $excerpt = implode(" ", $excerpt) . '...';
        } else {
            $excerpt = implode(" ", $excerpt);
        }
  
        $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
  
        return $excerpt;
  }
  
  function content($limit) {
      $content = explode(' ', get_the_content(), $limit);
  
      if (count($content) >= $limit) {
          array_pop($content);
          $content = implode(" ", $content) . '...';
      } else {
          $content = implode(" ", $content);
      }
  
      $content = preg_replace('/\[.+\]/','', $content);
      $content = apply_filters('the_content', $content); 
      $content = str_replace(']]>', ']]&gt;', $content);
  
      return $content;
  }
//   function generate_taxonomy_rewrite_rules( $wp_rewrite ) {

//     $rules = array();

//     $post_types = get_post_types( array( 'public' => true, '_builtin' => false ), 'objects' );
//     $taxonomies = get_taxonomies( array( 'public' => true, '_builtin' => false ), 'objects' );

//     foreach ( $post_types as $post_type ) {
//         $post_type_name = $post_type->name;
//         $post_type_slug = $post_type->rewrite['slug'];

//         foreach ( $taxonomies as $taxonomy ) {
//             if ( $taxonomy->object_type[0] == $post_type_name ) {
//                 $terms = get_categories( array( 'type' => $post_type_name, 'taxonomy' => $taxonomy->name, 'hide_empty' => 0 ) );
//                 foreach ( $terms as $term ) {
//                     $rules[$post_type_slug . '/' . $term->slug . '/?$'] = 'index.php?' . $term->taxonomy . '=' . $term->slug;
//                     $rules[$post_type_slug . '/' . $term->slug . '/page/?([0-9]{1,})/?$'] = 'index.php?' . $term->taxonomy . '=' . $term->slug . '&paged=' . $wp_rewrite->preg_index( 1 );
//                 }
//             }
//         }
//     }

//     $wp_rewrite->rules = $rules + $wp_rewrite->rules;

// }

// add_action('generate_rewrite_rules', 'generate_taxonomy_rewrite_rules');
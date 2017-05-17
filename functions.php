<?php 

//Enqueue scripts and styles for use
add_action( 'wp_enqueue_scripts', 'startertheme_load_scripts' );
function startertheme_load_scripts(){
    wp_enqueue_style( 'startertheme', get_template_directory_uri() . '/style.css');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js');
    wp_enqueue_script( 'ykn-customjs', get_template_directory_uri() . '/assets/js/ynk-custom.js');
}

//Register menus
function startertheme_register_menus() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('utility-menu',__( 'Utility Menu' ));
  register_nav_menu('footer-menu-1',__( 'Footer Menu One' ));
  register_nav_menu('footer-menu-2',__( 'Footer Menu Two' ));
  register_nav_menu('footer-menu-3',__( 'Footer Menu Three' ));
  register_nav_menu('footer-menu-4',__( 'Footer Menu Four' ));
  register_nav_menu('footer-menu-5',__( 'Footer Menu Five' ));
  register_nav_menu('footer-menu-6',__( 'Footer Menu Six' ));
  register_nav_menu('footer-menu-7',__( 'Footer Menu Seven' ));
  register_nav_menu('sidebar-products',__( 'Sidebar Products' ));
  
}
add_action( 'init', 'startertheme_register_menus' );


add_theme_support( 'post-thumbnails');




function ynk_product_types() {
  register_taxonomy(
    'product-types',
    'products',
    array(
      'label' => __( 'Product Types' ),
      'hierarchical'      =>  true,
      'query_var'    => true,
      'rewrite' => array( 'slug' => 'product-types','with_front' => true ),
    )
  );
}
add_action( 'init', 'ynk_product_types' );



function ynk_product_sectors() {
  register_taxonomy(
    'product-sectors',
    'products',
    array(
      'label' => __( 'Product Sectors' ),
      'hierarchical'      =>  true,
      'rewrite' => array( 'slug' => 'product-sectors', 'with_front' => true ),
    )
  );
}
add_action( 'init', 'ynk_product_sectors' );


add_action( 'init', 'ynk_products' );

function ynk_products() {
  register_post_type( 'products',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => false,
      'publicly_queryable' => true,
      'rewrite'=> array('slug'=>'products'),
      'show_ui' => true,
      'query_var' => true,
      'menu_icon' => 'dashicons-cart',
      'hierarchical' => false,
      'menu_position' => 3,
      'supports' => array('title', 'editor', 'thumbnail'),
      'taxonomies' => array( 'product-types', 'product-sectors' )

    )
  );
}







add_filter( 'manage_edit-products_columns', 'ynk_products_columns' ) ;

function ynk_products_columns( $columns ) {

  $columns = array(
    'cb' => '<input type="checkbox" />',
    'title' => __( 'Product' ),
    'sector' => __( 'Sector' ),
    'date' => __( 'Date' )
  );

  return $columns;
}


add_action( 'manage_products_posts_custom_column', 'ynk_manage_product_columns', 10, 2 );

function ynk_manage_product_columns( $column, $post_id ) {
  global $post;

  switch( $column ) {



    case 'sector' :

    $sector = wp_get_post_terms( $post->ID, 'product-sectors');

        if (isset($sector[0]->name)):

          echo $sector[0]->name;
      endif;
      break;



    /* Just break out of the switch statement for everything else. */
    default :
      break;
  }
}

;?>
<?php

function twomiles_resources () {

//   if (is_Page('login') ) {
//     wp_enqueue_style('two_style', get_template_directory_uri() . '/css/style.css', array(), 1.0);
//   }
  wp_enqueue_style('twomiles_style', get_template_directory_uri() . '/css/main.css', array(), 1.0);
  wp_enqueue_style('twomiles_style_fontAwesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
  );

  wp_enqueue_script('twomiles_script', get_template_directory_uri() . '/js/script.js', array(), 1.0, true);

}


add_action( 'wp_enqueue_scripts', 'twomiles_resources' );


//REMOVE UNCESSARY <p>
//remove_filter('the_content', 'wpautop');
//add_filter('the_content', 'removeEmptyParagraphs',99999);

// CUSTOM POST TYPE FOR STAFF

function twomiles_CPT_staff() {
  $labels = array(
    'name'               => _x( 'Staffs',  'post type general name' ),
    'singular_name'      => _x( 'Staff' ,'post type singular name'),
    'add_new'            => _x( 'Add New', "Staff" ),
    'add_new_item'       => __( 'Add New Staff' ),
    'edit_item'          => __( 'Edit Staff' ),
    'new_item'           => __( 'New Staff' ),
    'all_items'          => __( 'All Staff' ),
    'view_item'          => __( 'View Staff' ),
    'search_items'       => __( 'Search Staff' ),
    'not_found'          => __( 'No Staff found' ),
    'not_found_in_trash' => __( 'No Staff found in the trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Staff'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Two Miles Staff',
    'public'        => true,
    'menu_icon'     => 'dashicons-businessman',
    //'menu_icon'     => ' http://localhost/training/wp-content/uploads/2019/11/icon.png',
    'menu_position' => 5,
    'taxonomies'    => array('category', 'position'),
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'staff', $args ); 
}
add_action( 'init', 'twomiles_CPT_staff' );


function twomiles_CPT_staff_taxonomy() {
  $labels = array(
    'name' => _x( 'Group', 'taxonomy general name' ),
    'singular_name' => _x( 'Group', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Group' ),
    'all_items' => __( 'All Group' ),
    'parent_item' => __( 'Parent Group' ),
    'parent_item_colon' => __( 'Parent Group:' ),
    'edit_item' => __( 'Edit Group' ), 
    'update_item' => __( 'Update Group' ),
    'add_new_item' => __( 'Add New Group' ),
    'new_item_name' => __( 'New Group Name' ),
    'menu_name' => __( 'Group' ),
  );    
 
// Now register the taxonomy
 $args = array(
  'hierarchical' => true,
  'labels' => $labels,
  'show_ui' => true,
  'show_admin_column' => true,
  'query_var' => true,
  'rewrite' => array( 'slug' => 'group' )
 );
  register_taxonomy('post',array('staff'), $args);
}

add_action( 'init', 'twomiles_CPT_staff_taxonomy', 0 );



function twomiles_CPT_News() {
  $labels = array(
    'name'               => _x( 'News Article',  'post type general name' ),
    'singular_name'      => _x( 'News' ,'post type singular name'),
    'add_new'            => _x( 'Add New', "News" ),
    'add_new_item'       => __( 'Add New News' ),
    'edit_item'          => __( 'Edit News' ),
    'new_item'           => __( 'New News' ),
    'all_items'          => __( 'All News' ),
    'view_item'          => __( 'View News' ),
    'search_items'       => __( 'Search News' ),
    'not_found'          => __( 'No News found' ),
    'not_found_in_trash' => __( 'No News found in the trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'News'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Two Miles News',
    'public'        => true,
    'menu_icon'     => 'dashicons-welcome-widgets-menus',
    //'menu_icon'     => ' http://localhost/training/wp-content/uploads/2019/11/icon.png',
    'menu_position' => 5,
    'taxonomies'    => array('category'),
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => false,
    'rewrite'       => array( 'slug' => 'news-articles' )
  );
  register_post_type( 'News', $args ); 
}
add_action( 'init', 'twomiles_CPT_News' );


function twomiles_CPT_References() {
  $labels = array(
    'name'               => _x( 'References',  'post type general name' ),
    'singular_name'      => _x( 'Reference' ,'post type singular name'),
    'add_new'            => _x( 'Add Reference', "News" ),
    'add_new_item'       => __( 'Add Reference News' ),
    'edit_item'          => __( 'Edit Reference' ),
    'new_item'           => __( 'New Reference' ),
    'all_items'          => __( 'All Reference' ),
    'view_item'          => __( 'View Reference' ),
    'search_items'       => __( 'Search Reference' ),
    'not_found'          => __( 'No Reference found' ),
    'not_found_in_trash' => __( 'No Reference found in the trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Reference'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Two Miles References',
    'public'        => true,
    'menu_icon'     => 'dashicons-welcome-widgets-menus',
    //'menu_icon'     => ' http://localhost/training/wp-content/uploads/2019/11/icon.png',
    'menu_position' => 5,
    'taxonomies'    => array('category', 'post_tag'),
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => false,
  );
  register_post_type( 'References', $args ); 
}
add_action( 'init', 'twomiles_CPT_References' );



function twomiles_menu() {
	add_theme_support('menus');
  register_nav_menu('Login Menu', 'This is the login menu');
  register_nav_menu('Logout Menu', 'This is the logout menu');
}

add_action('init', 'twomiles_menu');


//ADD THEME SUPPORT

function twomiles_theme_support () {
  add_theme_support('post-thumbnails');
  //CUSTOM POST IMG SIZE
  add_image_size( 'news-thumbnails', 120, 120, true );
  add_image_size( 'news-banner', 1020, 600, true );
}

add_action ('after_setup_theme', 'twomiles_theme_support');





//GET PAGE TEMPLATE NAME
// add_action('wp_head', 'show_template');
// function show_template() {
//     global $template;
//     echo basename($template);
// }



//ACTIVATE SIDEBAR WIDGETS

add_action( 'widgets_init', 'twomiles_reference_sidebar' );
function twomiles_reference_sidebar() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'references',
            'name'          => __( 'Reference Sidebar' ),
            'description'   => __( 'References single sidebar' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

// ADD CUSTOM POST TYPE TO SIDEBAR WIDGET - NAGANA PEO DI KO GAGAMITIN!!!
add_filter( 'widget_posts_args', 'twomiles_addCptTooWidget');

function twomiles_addCptTooWidget($args) {
    $args['post_type'] = array('post', 'references');
    return $args;
}

function twomiles_reference_searchfilter($query) {
 
  if ($query->is_search && !is_admin() ) {
      $query->set('post_type',array('references'));
      //$taxquery = array(array('taxonomy' => 'seacole_product_tags'));
  }
return $query;
}
add_filter('pre_get_posts','twomiles_reference_searchfilter');

//login-redirection
// function wpum_custom_redirect_to_homepage( $url ) {
//   return home_url();
// }
// add_filter( 'wpum_get_login_redirect', 'wpum_custom_redirect_to_homepage' );



add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

//Pagination
function my_post_count_queries( $query ) {
  if (!is_admin() && $query->is_main_query()){
    if(is_home()){
       $query->set('posts_per_page', 1);
    }
  }
}
add_action( 'pre_get_posts', 'my_post_count_queries' );

//CUSTOM STYLE FOR EDIT POST

// function twomiles_add_editor_styles() {
//   add_editor_style( 'custom-editor-style.css' );
//   }
// add_action( 'init', 'twomiles_add_editor_styles' );
// Callback function to insert 'styleselect' into the $buttons array
function twomiles_custom_mce( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_3', 'twomiles_custom_mce' );
//add custom styles to the WordPress editor
// Callback function to filter the MCE settings
function twomiles_before_insert_format( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Article Box',  
			'block' => 'div',  
			'classes' => 'article-group-box',
			'wrapper' => true,
    ),

    array(  
			'title' => 'PDF',  
			'block' => 'div',  
			'classes' => 'link-file fas fa-file-pdf',
			'wrapper' => true,
    ),

    array(  
			'title' => 'MS Word',  
			'block' => 'div',  
			'classes' => 'link-file  fas fa-file-word',
			'wrapper' => true,
    ),

    array(  
			'title' => 'MS Excel',  
			'block' => 'div',  
			'classes' => 'link-file  fas fa-file-excel',
			'wrapper' => true,
    ),
    
    array(  
			'title' => 'Gray Background',  
			'block' => 'div',  
			'classes' => 'bg-gray text-light p-1',
			'wrapper' => true,
    )



	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = wp_json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'twomiles_before_insert_format' );  



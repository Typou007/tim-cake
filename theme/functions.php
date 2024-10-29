<?php

// Ajoute le support pour les images à la une au thème personnalisé
add_theme_support('post-thumbnails');

// Menu
function pw_creer_menu() {
	register_nav_menu('menu_principal', 'Menu principal');
}
add_action('init', 'pw_creer_menu');

// CPT jeu

//gateau CPT

// Register Custom Post Type
function création_cpt_recette() {

	$labels = array(
		'name'                  => _x( 'gateaux', 'Post Type General Name', 'gateau' ),
		'singular_name'         => _x( 'gateau', 'Post Type Singular Name', 'gateau' ),
		'menu_name'             => __( 'gateaux', 'gateau' ),
		'name_admin_bar'        => __( 'Post Type', 'gateau' ),
		'archives'              => __( 'Item Archives', 'gateau' ),
		'attributes'            => __( 'Item Attributes', 'gateau' ),
		'parent_item_colon'     => __( 'Parent Item:', 'gateau' ),
		'all_items'             => __( 'All Items', 'gateau' ),
		'add_new_item'          => __( 'Add New Item', 'gateau' ),
		'add_new'               => __( 'ajouter un gateau', 'gateau' ),
		'new_item'              => __( 'nouveau gateau', 'gateau' ),
		'edit_item'             => __( 'modifier gateau', 'gateau' ),
		'update_item'           => __( 'MAJ d\'un gateau', 'gateau' ),
		'view_item'             => __( 'View Item', 'gateau' ),
		'view_items'            => __( 'View Items', 'gateau' ),
		'search_items'          => __( 'Search Item', 'gateau' ),
		'not_found'             => __( 'Not found', 'gateau' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'gateau' ),
		'featured_image'        => __( 'Featured Image', 'gateau' ),
		'set_featured_image'    => __( 'Set featured image', 'gateau' ),
		'remove_featured_image' => __( 'Remove featured image', 'gateau' ),
		'use_featured_image'    => __( 'Use as featured image', 'gateau' ),
		'insert_into_item'      => __( 'Insert into item', 'gateau' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'gateau' ),
		'items_list'            => __( 'Items list', 'gateau' ),
		'items_list_navigation' => __( 'Items list navigation', 'gateau' ),
		'filter_items_list'     => __( 'Filter items list', 'gateau' ),
	);
	$args = array(
		'label'                 => __( 'gateau', 'gateau' ),
		'description'           => __( 'Post Type Description', 'gateau' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-buddicons-friends',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gateau', $args );

}
add_action( 'init', 'création_cpt_recette', 0 );

// CPT chef

// Register Custom Post Type
function création_cpt_chef() {

	$labels = array(
		'name'                  => _x( 'chefs', 'Post Type General Name', 'chef' ),
		'singular_name'         => _x( 'chef', 'Post Type Singular Name', 'chef' ),
		'menu_name'             => __( 'chef', 'chef' ),
		'name_admin_bar'        => __( 'Post Type', 'chef' ),
		'archives'              => __( 'Item Archives', 'chef' ),
		'attributes'            => __( 'Item Attributes', 'chef' ),
		'parent_item_colon'     => __( 'Parent Item:', 'chef' ),
		'all_items'             => __( 'All Items', 'chef' ),
		'add_new_item'          => __( 'Add New Item', 'chef' ),
		'add_new'               => __( 'ajouter un chef', 'chef' ),
		'new_item'              => __( 'nouveau chef', 'chef' ),
		'edit_item'             => __( 'modifier chef', 'chef' ),
		'update_item'           => __( 'MAJ d\'un chef', 'chef' ),
		'view_item'             => __( 'View Item', 'chef' ),
		'view_items'            => __( 'View Items', 'chef' ),
		'search_items'          => __( 'Search Item', 'chef' ),
		'not_found'             => __( 'Not found', 'chef' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'chef' ),
		'featured_image'        => __( 'Featured Image', 'chef' ),
		'set_featured_image'    => __( 'Set featured image', 'chef' ),
		'remove_featured_image' => __( 'Remove featured image', 'chef' ),
		'use_featured_image'    => __( 'Use as featured image', 'chef' ),
		'insert_into_item'      => __( 'Insert into item', 'chef' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'chef' ),
		'items_list'            => __( 'Items list', 'chef' ),
		'items_list_navigation' => __( 'Items list navigation', 'chef' ),
		'filter_items_list'     => __( 'Filter items list', 'chef' ),
	);
	$args = array(
		'label'                 => __( 'chef', 'chef' ),
		'description'           => __( 'Post Type Description', 'chef' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-carrot',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'chef', $args );

}
add_action( 'init', 'création_cpt_chef', 0 );

//Page d'options ACF
if(function_exists('acf_add_options_page')){

	//on ajoute une page d'option
	acf_add_options_page(array(
		'page_title' => 'Options générales',
		'menu_title' => 'Options générales',
		'page_slug' => 'pw-theme-options-generales',
		'capability' => 'edit_posts',
		'redirect' => false
	));
}
//icon
function get_svg_icon($icon_name) {
    $file_path = get_template_directory() . '/assets/icons/' . $icon_name . '.svg';
    
    if (file_exists($file_path)) {
        return file_get_contents($file_path);
    } else {
        return 'Le fichier icons est introuvable.';
    }
}
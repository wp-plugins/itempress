<?php

function register_cpt_item(){
    $args = array( 
        'labels' => array( 
	        'name' => _x( 'Items', 'item' ),
	        'singular_name' => _x( 'Item', 'item' ),
	        'add_new' => _x( 'Add New', 'item' ),
	        'add_new_item' => _x( 'Add New Item', 'item' ),
	        'edit_item' => _x( 'Edit Item', 'item' ),
	        'new_item' => _x( 'New Item', 'item' ),
	        'view_item' => _x( 'View Item', 'item' ),
	        'search_items' => _x( 'Search items', 'item' ),
	        'not_found' => _x( 'No items found', 'item' ),
	        'not_found_in_trash' => _x( 'No items found in Trash', 'item' ),
	        'parent_item_colon' => _x( 'Parent Item:', 'item' ),
	        'menu_name' => _x( 'Items', 'item' ),
    	),
        'hierarchical' => true,
        'description' => 'item',
        'supports' => array( 
        	'title', 
        	'editor', 
        	'author', 
        	'comments',
        	'revisions',
        	'page-attributes'
        ),
        'taxonomies' => array( 
        	'item_category', 
        	'item_post_tag' 
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' =>true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 
        	'slug' => 'items'
        ),
        'capability_type' => 'post'
    );

	if(get_option('itempress-base')){
		$args['rewrite']['slug'] = get_option('itempress-base');
	}

    register_post_type( 'items', $args );
}

?>
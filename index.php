<?php
/*
Plugin Name: ItemPress
Plugin URI: http://wordpress.org/plugins/itempress/
Description: ItemPress is simply a robust custom post type designed to help you create content with the freedom of ambiguity. It has the power to organize lists, manage projects, or take notes all with the power of WordPress!
Version: 0.3.3
Author: Aubrey Portwood
Author URI: http://profiles.wordpress.org/aubreypwd/
License: GPL2
Tags: projects, project, management, notes, remembering, tasks, bugs, issue, tracker
 */

/*  Copyright 2013  Aubrey Portwood  (email : aubreypwd@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

include "items-simple-custom-post-order/items-simple-custom-post-order.php";
include "items-tc-custom-taxonomy-filter/items-tc-custom-taxonomy-filter.php";
include "custom-post-type.php";
include "taxonomy.php";
include "content-meta.php";
include "sortables.php";
include "itempress-settings.php";
include "itempress-activation.php";

$itempress_tax = new itempress_tax();

function itempress_init(){
	
	register_cpt_item(); //Create out Items custom post type
	items_sorter(); //Make sure we can sort Items

	global $itempress_tax;
	$itempress_tax->init_tax();
	do_action('itempress_add_tax');
	$itempress_tax->register_tax();
	
	items_tax_associated_users();
	itempress_make_sortable();
}

add_action('init','itempress_init');
add_action('plugins_loaded','items_menu_order_if_my_tax');
add_filter( 'the_content', 'items_content_add' );
add_action( 'wp_before_admin_bar_render', 'items_wp_admin_bar' );

function items_menu_order($query) {
	global $itempress_tax;
	foreach($itempress_tax->get_tax() as $tax){
		if(is_tax($tax['taxonomy'])){
			$query->set('orderby', 'menu_order');
			$query->set('order', 'ASC');
			return $query;
		}
	}
}

function items_menu_order_if_my_tax(){
	add_filter( 'pre_get_posts', 'items_menu_order' );
}

function items_sorter(){
	update_option('scporder_options',array(
		'objects'=>array(
			'items'
		)
	));
}

function items_wp_admin_bar() {
    global $wp_admin_bar;
    if(is_admin()){
	    $wp_admin_bar->add_menu( array(
	        'parent' => 'site-name',
	        'id' => 'new_media',
	        'title' => __('View Items'),
	        'href' => site_url() . "/items"
	    ) );
	}else{
	    $wp_admin_bar->add_menu( array(
	        'parent' => 'site-name',
	        'id' => 'new_media',
	        'title' => __('Items'),
	        'href' => admin_url() . "edit.php?post_type=items"
	    ) );	
	}
}

function items_css() {
	wp_enqueue_style( 'items_css', plugins_url('style.css', __FILE__));
}

?>
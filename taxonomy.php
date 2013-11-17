<?php

class itempress_tax
{
	public function register_tax(){
		foreach($this->get_tax() as $tax){
			if(get_option('itempress-base-'.$tax['taxonomy'])){
				$tax['args']['rewrite']['slug'] = get_option('itempress-base-'.$tax['taxonomy']);
			}

			register_taxonomy(
				$tax['taxonomy'],
				'items',
				$tax['args']
			);
		}
	}

	private $tax=array();

	public function add_tax($tax){
		$this->tax[]=$tax;
	}

	public function get_tax(){
		return $this->tax;
	}

	public function init_tax(){
		$this->add_tax(array(
			'taxonomy'=>'item_post_tag',
			'args'=>array(
				'label' =>'Labels',
				'rewrite' => array(
					'slug' => 'label'
				),
				'capabilities' => array(
					'assign_terms' => 'edit_posts',
					'edit_terms' => 'edit_posts'
				),
				'show_in_nav_menus'=>true,
				'hierarchical'=>true,
				'show_admin_column'=>true,
				'labels'=>array(
					'name' => 'Labels',
					'singular_name' => 'Label', 'taxonomy singular name',
					'search_items' => 'Search Labels',
					'all_items' => 'All Labels',
					'parent_item' => 'Parent Labels',
					'parent_item_colon' => 'Parent Label:',
					'edit_item' => 'Edit Label',
					'update_item' => 'Update Label',
					'add_new_item' => 'Add New Label',
					'new_item_name' => 'New Label',
					'menu_name' => 'Labels',
					'meta_name' => 'Labeled'
				)
			)
		));

		$this->add_tax(array(
			'taxonomy'=>'item_on',
			'args'=>array(
				'label' =>'Associations',
				'rewrite' =>array(
					'slug' => 'associated' 
				),
				'capabilities' =>array( 
					'assign_terms' => 'edit_posts',
					'edit_terms' => 'edit_posts'
				),
				'show_in_nav_menus'=>true,
				'hierarchical'=>true,
				'show_admin_column'=>true,
				'labels'=> array(
					'name'              => 'Associations',
					'singular_name'     => 'Association',
					'search_items'      => 'Search Associations',
					'all_items'         => 'All Associations',
					'parent_item'       => 'Parent Associations',
					'parent_item_colon' => 'Parent Association:',
					'edit_item'         => 'Edit Association',
					'update_item'       => 'Update Association',
					'add_new_item'      => 'Add New Association',
					'new_item_name'     => 'New Association',
					'menu_name'         => 'Associations',
					'meta_name'			=> 'Associated'
				)
			)			
		));
	}
}

function items_tax_associated_users() {

	$users = get_users();

	if($users) foreach($users as $user){
		$results=wp_insert_term(
			"@".$user->user_login,
			'item_on',
			array(
				'description'=> "Associated with ".$user->display_name,
				'slug' => $user->user_login
			)
		);
		if(isset($results->error_data)) if($results->error_data['term_exists']){
			wp_update_term($results->error_data['term_exists'], 
				'item_on', 
				array(
					'name' => "@".$user->user_login,
					'description'=> "Associated with ".$user->display_name,
					'slug' => $user->user_login
				)
			);
		}
	}

}

?>
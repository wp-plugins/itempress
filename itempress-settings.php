<?php

function itempress_settings_optional($args){ ?>
	<input name="<?php echo $args['name'] ?>" id="<?php echo $args['name'] ?>" type="text" value="<?php echo get_option($args['name']);?>" class="regular-text code">
<?php }

add_action('admin_init', 'itempress_admin_init'); 

function itempress_admin_init(){

	add_settings_field(
		'itempress-base',
		__('Itempress base'),
		'itempress_settings_optional',
		'permalink',
		'optional',
		array(
			'name'=>'itempress-base',
		)
	);

	if(isset($_POST['itempress-base'])){			
		update_option(
			'itempress-base', 
			itempress_base_sanitize($_POST['itempress-base'])
		);
	}

	global $itempress_tax;

	foreach($itempress_tax->get_tax() as $tax){

		add_settings_field(
			'itempress-base-'.$tax['taxonomy'],
			"ItemPress ".$tax['args']['labels']['name'] . " base",
			'itempress_settings_optional',
			'permalink',
			'optional',
			array(
				'name'=>'itempress-base-'.$tax['taxonomy']
			)
		);

		if(isset( $_POST['itempress-base-'.$tax['taxonomy']] )){			
			update_option(
				'itempress-base-'.$tax['taxonomy'], 
				itempress_base_sanitize($_POST['itempress-base-'.$tax['taxonomy']])
			);
		}

	}

}

function itempress_base_sanitize($slug){
	$itempress_perm_allowed_ch = "/[^a-z0-9.-]+/i";
	$slug = str_replace(" ", "-", $slug);
	$slug = strtolower($slug);
	$slug = preg_replace($itempress_perm_allowed_ch, "", $slug);
	return $slug;
}

?>
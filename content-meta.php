<?php

/**
 * Adds sections to your items on the frontend
 */
function items_content_add($content) {
	global $post;
	global $itempress_tax;

	foreach($itempress_tax->get_tax() as $tax){
		$content .= get_the_term_list( 
			$post->ID, 
			$tax['taxonomy'], 
			'<hr class="items-hr">
			<p class="items-labels">
			<strong class="'.$tax['taxonomy'].'-label">'.__($tax['args']['labels']['meta_name']).': </strong>
			<span class="item-'.$tax['taxonomy'].'">
			', 
			'</span>, ', 
			'</strong>
			</p>' 
		);		
	}

	return $content;
}

?>
<?php

function items_sort_tax_select( $clauses, $wp_query ) {
	global $wpdb;
	global $itempress_tax;

	foreach($itempress_tax->get_tax() as $tax){

			if ( isset( $wp_query->query['orderby'] ) && $tax['taxonomy'] == $wp_query->query['orderby'] ) {
				
				$clauses['join'] .= " LEFT JOIN (
					SELECT object_id, GROUP_CONCAT(name ORDER BY name ASC) AS ".$tax['taxonomy']."
					FROM $wpdb->term_relationships
					INNER JOIN $wpdb->term_taxonomy USING (term_taxonomy_id)
					INNER JOIN $wpdb->terms USING (term_id)
					WHERE taxonomy = '".$tax['taxonomy']."'
					GROUP BY object_id
				) AS ".$tax['taxonomy']."_terms ON ($wpdb->posts.ID = ".$tax['taxonomy']."_terms.object_id)";

				$clauses['orderby'] = ''.$tax['taxonomy'].'_terms.'.$tax['taxonomy'].' ';

				$clauses['orderby'] .= ( 'ASC' == strtoupper( $wp_query->get('order') ) ) ? 'ASC' : 'DESC';
			
			}

	}

	return $clauses;
}

function items_column_tax( $columns ) {  
	global $itempress_tax;

	foreach($itempress_tax->get_tax() as $tax){
	    $columns['taxonomy-'.$tax['taxonomy']] = $tax['taxonomy'];
	}

    return $columns; 
}


function itempress_make_sortable(){
	add_filter( 'posts_clauses', 'items_sort_tax_select', 10, 2 );

	add_filter( 'manage_edit-items_sortable_columns', 'items_column_tax' );
}

?>
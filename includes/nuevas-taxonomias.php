<?php
if ( ! function_exists( 'code_longuitudes_taxonomy' ) ) {

// Register Custom Taxonomy
function code_longuitudes_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Longuitudes', 'Taxonomy General Name', 'slan' ),
		'singular_name'              => _x( 'Longuitud', 'Taxonomy Singular Name', 'slan' ),
		'menu_name'                  => __( 'Longuitudes', 'slan' ),
		'all_items'                  => __( 'Ver todos', 'slan' ),
		'parent_item'                => __( 'Longuitud superior', 'slan' ),
		'parent_item_colon'          => __( 'Longuitud superior', 'slan' ),
		'new_item_name'              => __( 'Nombre de la nueva Longuitud', 'slan' ),
		'add_new_item'               => __( 'Agregar nueva Longuitud', 'slan' ),
		'edit_item'                  => __( 'Editar Longuitud', 'slan' ),
		'update_item'                => __( 'Actualizar Longuitud', 'slan' ),
		'view_item'                  => __( 'Ver Longuitud', 'slan' ),
		'separate_items_with_commas' => __( 'Separar Longuitud por comas', 'slan' ),
		'add_or_remove_items'        => __( 'Agregar o eliminar Longuitudes', 'slan' ),
		'choose_from_most_used'      => __( 'Escoge entre los mas usados', 'slan' ),
		'popular_items'              => __( 'Longuitudes populares', 'slan' ),
		'search_items'               => __( 'Buscar Longuitudes', 'slan' ),
		'not_found'                  => __( 'No encontrado', 'slan' ),
		'no_terms'                   => __( 'No hay Longuitudes', 'slan' ),
		'items_list'                 => __( 'Lista de Longuitudes', 'slan' ),

	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'longuitudes', array( 'post' ), $args );

}
add_action( 'init', 'code_longuitudes_taxonomy', 0 );

}

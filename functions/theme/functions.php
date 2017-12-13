<?php

/**
 * En este archivo se incluyen las funciones del tema 
 *
 */


/** ==============================================================================================================
 *                                              FUNCIONES DEL TEMA
 *  ==============================================================================================================
 */




// ------------ colunmas  ---------------------------

// add_action( 'manage_posts_custom_column' , 'cltvo_tax_col', 10, 2 ); 
// add_action( 'manage_crdmn_proyecto_pt_posts_custom_column' , 'cltvo_tax_col', 10, 2 );

// add_filter( 'manage_edit-post_columns', 'cltvo_nueva_col_post' );
// add_filter( 'manage_edit-crdmn_proyecto_pt_columns', 'cltvo_nueva_col_proy' );



/** ==============================================================================================================
 *                                                TIPOS DE POSTS   
 *  ==============================================================================================================
 */



// funciones aqui ...
   function dnl_imagenes_dailywork($parent_id ) { 
 	//imageb con meta value: imagen_titular
	$img_tam_compl_args = array(
		'posts_per_page' => -1,
		'post_parent' => $parent_id,
		'post_type' => 'attachment',
		'post_status' => 'inherit',
		'post_mime_type' => 'image',
		
	);

	$img_tam_compls = get_posts($img_tam_compl_args);

	return $img_tam_compls;//regresa un arreglo con src la direccion de la imagen
   };


?>
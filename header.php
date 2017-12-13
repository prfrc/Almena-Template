<!DOCTYPE html>
<html lang="<?php echo substr(get_bloginfo ( 'language' ), 0, 2);?>">
<head>
	<meta charset="UTF-8">
	<title><?php
		global $page, $paged;

		wp_title( '|', true, 'right' );
		bloginfo( 'name' );

		$site_description = get_bloginfo( 'description', 'display' );

		// if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	?></title>

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="<?php echo THEMEURL;?>humans.txt">

	<?php
	//generar el favicon usando http://www.favicomatic.com/ y agregar los archivos a images/favicon/
	include_once('inc/favicon.php');?>

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content=""/>
	<meta property="og:title" content=""/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css" />

	<?php wp_head(); ?>
</head>
<body >
	<?php

	/**
	 *CLTVO: poner esto en true sólo en la versiones locales.
	 */

	if( !defined('CLTVO_ISLOCAL') || ( CLTVO_ISLOCAL != true) ){ include_once('inc/analytics.php'); }

	?>

	<!--[if gt IE 8]><div style="z-index: 1000; padding: 5px 0; text-align: center; position: absolute; top: 0; left: 0; width: 100%; background-color: #312822;"><p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: white;">Consider <a style="color: #EA7640;
	text-decoration: underline;" href="http://www.google.com/intl/es/chrome/browser/" target="_blank">updating your browser</a> in order to render this site correctly.</p></div><!-->
<!--<![endif]-->

	<!-- Aquí podría abrir el main-wrap -->

		<a href="#" data-scroll-nav="inicio" class="logo-inicio">

			          <img src="<?php bloginfo('template_url');?>/images/logotipo.svg"  />
			          
			 

		</a> 
	<div class="contenedor-men "  >
		<div class="row ">
			<div class="columns grande-10 chico-12 centered ">
	         
	             <div class="opcion contenedor-m nosotros-menu ">
	            <a href="#" data-scroll-nav="nosotros">NOSOTROS</a> 
	             </div>
	              <div class="opcion contenedor-m comida-menu">
	            	<a href="#"  data-scroll-nav="comida">MENÚ</a> 
	             </div>
	         </div>
	    </div>
	</div>
	<a href="tel:555-555-5555" target="_Blank"><img class="puntero-telefono" src="<?php bloginfo('template_url');?>/images/telefono.svg"/><span class="texto-telefono">Teléfono</span></a>
	<a href="https://api.whatsapp.com/send?phone=5215576687668&text=I'm%20interested%20in%20your%20car%20for%20sale" target="_Blank"><img class="puntero-whatsapp" src="<?php bloginfo('template_url');?>/images/whatsapp.svg"/><span class="texto-whatsapp">Whatsapp</span></a>
    <a href="http://www.instagram.com/atipico.mexico" target="_Blank"><img class="instagram" src="<?php bloginfo('template_url');?>/images/instagram.svg"/></a>
    <a href="http://fb.me/atipico.mexico" target="_Blank"><img class="facebook" src="<?php bloginfo('template_url');?>/images/facebook.svg"/></a>
	 <a href="https://www.google.com/maps/search/?api=1&query=19.430670, -99.196602		&query_place_id=ChIJxfJkDAIC0oUR2l6z5S3vSQ4" target="_Blank"><img class="puntero-direccion" src="<?php bloginfo('template_url');?>/images/ubicacion.svg"/><span class="texto-direccion">Ubicación</span><div class="direccion">Virgilio 6, Polanco.</div></a>
    <div class="somos">Ordena por <a href="https://api.whatsapp.com/send?phone=5215576687668&text=I'm%20interested%20in%20your%20car%20for%20sale" target="_Blank">Whatsapp</a> o <a href="tel:555-555-5555">Llamanos</a></div>
    <?php 
    	;
    	$fecha = date("l"); 
    	$horas = date("H");
    	

    	if ($fecha == "Sunday") {
    			$dia = "Domingo";
			  	$texto_hora = "9am - 6pm";

    		
    	} else if ($fecha == "Monday") {
    			$dia = "Lunes";
			  	$texto_hora = "9am - 6pm";
					
    	}else if ($fecha == "Tuesday") {
    			$dia = "Martes";
			  	$texto_hora = "9am - 6pm";
					
    	}else if ($fecha == "Wednesday") {
    			$dia = "Miércoles";
			  	$texto_hora = "9am - 1:30am";
					
    	}else if ($fecha == "Thursday") {
    			$dia = "Jueves";
			  	$texto_hora = "9am - 1:30am";
					
    	}else if ($fecha == "Friday") {
    			$dia = "Viernes";
			  	$texto_hora = "9am - 1:30am";
					
    	}else if ($fecha == "Saturday") {
    			$dia = "Sábado";
			  	$texto_hora = "9am - 1:30am";
					
    	}

    ?>
    
    
    <div class="status-restaurante <?php echo $color ?>"><span class="dia-header"><?php echo $dia; ?> </span><?php echo $texto_hora; ?></div>






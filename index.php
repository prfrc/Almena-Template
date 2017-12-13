<?php get_header(); ?>
<div class="row " data-scroll-index="inicio">
	 

	<div class="columns grande-10 chico-12 centered ">
		<?php $post_portada = get_post(get_page_by_title( 'Portada' ));
	  $imagenes_slider = dnl_imagenes_dailywork($post_portada->ID); // Traemos la imagen del poster  ?>
		<?php if($imagenes_slider):?>
            <div class="swiper-container">
                <div class="swiper-wrapper">
     
                    <?php foreach( $imagenes_slider as $imagen_slider ):?>
                    <?php $src = wp_get_attachment_image_src($imagen_slider->ID, 'full', true);
                            $alt = get_post_meta($imagen_slider->ID, '_wp_attachment_image_alt', true);?>
                            <div class="swiper-slide">             
                                <img alt="<?php echo $alt; ?>" src="<?php echo $src[0];?>"  <?php if (count($imagenes_slider) < 2):?> class="imagen-sola zoom-js"<?php else:?> class=" zoom-js"<?php endif ;?>  >
                            </div>  
                    <?php endforeach; ?>
                        </div>
                </div>
           
        <?php endif;?> 
	</div>
</div>




<div class="row comida" data-scroll-index="comida">
	<?php $categorias_principales = get_categories( array(
	    'orderby' => 'slug',
	    'parent'  => 0
	) );?>
	<?php foreach( $categorias_principales as $categoria_principal ):?>
	<?php $categorias_atipicas = get_categories( 
			array('parent'  => get_cat_ID($categoria_principal->name),
		) );
			$args = array(
			    'posts_per_page'   => -1,
			    'category'         => get_cat_ID($categoria_principal->name),
			   	    
			);

			$posts = get_posts($args);

			if (!empty($posts)) :
		?>



		<div class="row">
			<div class="columns grande-10 centered ">
			<h2><?php echo $categoria_principal->name; ?></h2>
			</div>
		</div>





		
		<?php foreach( $categorias_atipicas as $categoria_atipica ):?>
			<div class="row">
				<div class="columns grande-10 centered ">
				<h3><?php echo $categoria_atipica->name; ?></h3>
				</div>
			</div>
		<div class="row ">
			<div class="columns grande-10 centered">
				<div class="cuadricula ">
				 	
					<?php
					$args_atipico = array(
					    'posts_per_page'   => -1,
					    'category'         => get_cat_ID($categoria_atipica->name),
					    'orderby'          => 'name',
					    
					    
					);

					$posts_atipico = get_posts($args_atipico);
					foreach( $posts_atipico as $post_atipico ):?>
					

					<?php 
					 $imagenepost = dnl_imagenes_dailywork($post_atipico->ID);

							$src = wp_get_attachment_image_src($imagenepost[0]->ID, 'full', true);
					        $alt = get_post_meta($post_atipico->ID, '_wp_attachment_image_alt', true);?>
					      				      
					
					<div class="cuadro  grande-4 medio-6  chico-12  " >
						<div class="platillo">
							
					 		<img src="<?php echo $src[0];?>"/>
					 		<h5>

					 			<?php echo $post_atipico->post_title; ?>
					 		</h5>
					 		<p>
					 			<?php echo $post_atipico->post_content; ?></p>
				 		</div>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
		</div>
		 <?php endforeach; ?>
		<?php endif; ?>
	 <?php endforeach; ?>
</div>


<?php $post_nosotros = get_post(get_page_by_title( 'Nosotros' ));?>
	<?php 
	$imagen_nosotros = dnl_imagenes_dailywork($post_nosotros->ID);

	$src_nosotros = wp_get_attachment_image_src($imagen_nosotros[0]->ID, 'full', true);
	$alt_nosotros = get_post_meta($post_nosotros->ID, '_wp_attachment_image_alt', true);?>

<div class="row nosotros" data-scroll-index="nosotros">
	<div class="columns grande-10 centered">
		<div class="cuadricula ">
		 	<div class="cuadro  grande-4 medio-12  chico-12 " >
		 		<img src="<?php echo $src_nosotros[0];?>"/>
			</div>
			<div class="cuadro  grande-8 medio-12  chico-12 " >
		 		<p> <?php echo $post_nosotros->post_content; ?></p></div>
			
		</div>
	</div>
</div>	
        


       

<div class="row  informacion-completa">
	<div class="columns grande-10 centered">
		<div class="cuadricula ">
		 	<div class="cuadro  grande-7 medio-6  chico-12 contenedor-contacto " >
		 		<h4>Ubicación<br>-</h4>
		 		
            <p>Virgilio 6, Polanco, Ciudad de México.</p>
            <h4>Escríbenos<br>-</h4>

						<form id="contact-form_JS">
								<div>
									<input id="cont_nombre_JS" value="" placeholder="Nombre" name="contact-form_JS[Nombre]" form="contact-form_JS" required="" type="text">

								</div>
								<div>
									<input type="text" id="cont_mail_JS" value=""  placeholder="E-mail" name = "contact-form_JS[E-mail]" form = "contact-form_JS" required >
								</div>
								<div>
									<input type="text" id="cont_telefono_JS" value="" placeholder="Teléfono" name = "contact-form_JS[Teléfono]" form = "contact-form_JS">
								</div>
								<div>
								<input type="text" id="cont_mens_JS"  value="" placeholder="Mensaje" name = "contact-form_JS[Mensaje]" form = "contact-form_JS">

								
								</div>
							
							
							
							
								<div class="g-recaptcha" data-sitekey="6Lf8zQQTAAAAAHEuAajIZuEUIvUnZBH2FNizpMxM"></div> 
								
							
							
								<input type="submit" value="&#8627;Enviar" id="contact_sub_JS" form = "contact-form_JS" >
						</form>
			
			</div>
			<div class="cuadro  grande-5 medio-6  chico-12  columna-derecha" >
				<h4>Horarios<br>-</h4> 
				<p>Domingo a Martes <br>
				9:00am - 6:00pm<br>
				Miércoles a Sábado <br>
				9:00am - 1.30am<br>
			</p>
				<h4>Mail<br>-</h4> 

		 		 <p><a href="mailto:contacto@atipico.mx" >contacto@atipico.mx</a></p>

		 		 <h4>Redes<br>-</h4> 

				<p><a href="http://fb.me/atipico.mexico" target="_Blank">Facebook. </a> <a href="http://instagram.com/atipico.mexico" target="_Blank">Instagram. </a></p>
		
			</div>
			
			
		</div>
	</div>
</div>
      	
<?php get_footer(); ?>

<?php

get_header();


while ( have_posts() ) :

	if($post -> post_title == "À propos" ) {
		$contenu_apropos = get_field("editeur");
		if ( $contenu_apropos ) : ?>
			<div class="editeur"> <?php echo  $contenu_apropos; ?> </div>
			
		<?php
		exit;
		endif;
	}else{
		$introduction = get_field( 'cat_introduction' );
		$image_bg = get_field( 'cat_image_bg' ); 
		if( empty ( $image_bg ) ){
			$image_bg = wp_get_attachment_url( 30 ) ;
		} ?>
		<div id="banniere_page" style="background-image: url(<?php echo $image_bg ?>)" class="banniere banniere_page">
			<div class="wrapper_etroit ">
				<p><?php echo esc_html( $introduction ); ?></p>
			</div>
		</div>
		<div>
			<?php get_template_part( 'template-parts/articles_categorie' ); ?>
		</div>
			<?php exit;
	 }
	



endwhile;


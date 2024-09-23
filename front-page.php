<?php
// header
get_header();

$slogan = get_field( 'accueil_slogan' );
$intro = get_field( 'accueil_introduction' );
$image_bg = get_field( 'accueil_image_bg' );

// echo $image_bg;

if( empty ( $image_bg ) ){
	$image_bg = wp_get_attachment_url( 30 ) ;
}
?>



<!-- insertion banniere -->
<section  style="background-image: url(<?php echo $image_bg ?>)" class="banniere">

	<h2 id="accueil_slogan"><?php echo esc_html($slogan); ?></h2>

</section>

<!-- insertion intro  -->
<section class="wrapper">
	<p><?php echo esc_html($intro); ?></p>
</section>
<?php

// array des categories d'article
$article_categories = get_field_object('field_66f077565d9d4')['choices'];
// print_r($article_categories);

if($article_categories):
?>
	<div>
		<?php
		foreach($article_categories as $key => $value) :
			?>
			<div class="section_tire">
				<h2 class="categorie_titre">  <?php echo esc_html($value); ?> </h2>
				<?php
				// args pour la requete
				$args = array(
					'posts_per_page'    => 4,
					'post_type'     => 'article',
					'meta_query'    => array(
						'relation'      => 'AND',
						array(
							'key'       => 'article_categorie',
							'value'     => $key,
							'compare'   => '=',
						),
						array(
							'key'       => 'article_actif',
							'value'     => '1',
							'compare'   => '=',
						),
					),
				);
				// requete
				$the_query = new WP_Query( $args );
				// afficher les articles
				if( $the_query->have_posts() ): ?>
					<div class="post_display">

					<?php while( $the_query->have_posts() ) : 
						$the_query->the_post();

						get_template_part( 'template-parts/tuile' );
				
					endwhile; ?>
					</div>
					<?php
		 		endif; ?>
			
			</div>
			<?php
		endforeach; ?>

	</div>
<?php
endif;




// footer
get_footer();


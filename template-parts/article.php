<?php

$champs = get_fields();
$article_description = $champs[ 'article_description' ];
$article_prix = $champs[ 'article_prix' ];
$article_categorie = $champs[ 'article_categorie' ];
$article_image = $champs[ 'article_image' ];

?>


<article class="container">
	<h2><?php the_title(); ?></h2>
	<div>
		<?php if ( $article_image ) : ?>
			
				<img src="<?php echo $article_image ?>" alt="<?php esc_attr( the_title() ); ?>">
			
		<?php endif; ?>
		<div class="contenu_texte">
			<?php if ( $article_categorie ) : ?>
				<p class="article_categorie_label">Catégorie:</p>
			 <p ><?php echo esc_html( $article_categorie ) ?> </p>
			<?php endif; ?>

			<div >
				<p class="article_description_label">Description:</p>
				<?php if ( $article_description ) : ?>
					<p class="article_description"><?php echo esc_html( $article_description ); ?></p>
				<?php endif; ?>
			</div>
			<?php if ( $article_prix ) : ?>
				<p class="article_prix_label">Prix:</p>
			<p class="article_prix"><?php echo esc_html( $article_prix ); ?> $</p>
			<?php endif; ?>
		</div>
	</div>
</article>
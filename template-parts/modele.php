<?php
$champs = get_fields();
// print_r($champs);
$article_image = $champs['article_image'];

?>

<article class="modele post_display_item">
	<a href="<?php the_permalink(); ?>">
        <div>
            <?php if ( $article_image ) : ?>
                    <img src="<?php echo $article_image ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <h4><?php the_title(); ?></h4>
        </div>
	</a>
</article>

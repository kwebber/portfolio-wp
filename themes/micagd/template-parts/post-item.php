<article <?php post_class() ?> id="item-<?php the_ID() ?>">
	<?php the_post_thumbnail( 'big-thumb' ); ?>
	<h2>
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	<?php the_title(); ?>
	</h2>
	<?php the_excerpt(); ?>
</article>
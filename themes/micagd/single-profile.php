<article <?php post_class() ?> id="item-<?php the_ID() ?>">
	<?php the_post_thumbnail( 'big-thumb' ); ?>
	<h1>
		<?php the_title(); ?>
	</h1>

	<div>
		<img src="<?php the_field( 'image'); ?>" alt="<?php the_field( 'name'); ?>">
		<h2>
			<?php the_field( 'name' ); ?>
		</h2>
		<p>
			<a href="<?php the_field( 'website' ); ?>">
				<?php the_field( 'website'); ?>
			</a>
		</p>
	</div>
	<?php the_content(); ?>
</article>


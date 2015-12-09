<?php get_header(); ?>


<?php if ( have_posts() ) : ?>
	<?php 
		while ( have_posts() ): the_post(); 
	?>
	<?php 
		if ( has_category( 5 ) ):	
	?>

		<?php get_template_part( 'template-parts/single', 'profile' ); ?>

	<?php else : ?>
		<?php get_template_part( 'template-parts/post', 'item' ); ?>
	<?php endif ; ?>
	<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
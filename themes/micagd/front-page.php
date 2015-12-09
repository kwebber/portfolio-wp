<?php get_header(); ?>

<h2>Big Hero Image Here</h2>


<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ): the_post(); 
		?>
		<?php get_template_part( 'template-parts/post', 'item' ); ?>
	<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
<?php get_header(); ?>

<div class="content-section page-row-expanded">
	<div class="container">
		<h2>Big Hero Image Here</h2>


		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ): the_post(); 
				?>
				<?php get_template_part( 'template-parts/post', 'item' ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>


<?php get_footer(); ?>
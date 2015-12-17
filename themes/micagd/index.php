<?php get_header(); ?>

<div class="content-section page-row page-row-expanded">
	<div class="container">
		<div class="row">
			<div class="twelve columns">


<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ): the_post(); 
		?>
		<?php get_template_part( 'template-parts/post', 'item' ); ?>
	<?php endwhile; ?>
<?php endif; ?>

			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
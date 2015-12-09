<?php 
	$socialArgs = array(
		'theme_location' => 'social',
		'container' => 'nav',
		'container_class' => 'site-menu'
	);

	$departmentArgs = array(
		'theme_location' => 'dept',
		'container' => 'nav',
		'container_class' => 'dept-menu'
		)
?> 

<?php wp_nav_menu( $socialArgs ); ?>
<?php wp_nav_menu( $departmentArgs ); ?>

</body>
</html>

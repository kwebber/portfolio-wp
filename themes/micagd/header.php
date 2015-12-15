<?php 
	$navArgs = array(
		'theme_location' => 'primary',
		'container' => 'nav',
		'container_class' => 'site-menu'
	);
?> 

<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php is_front_page() ? bloginfo('name') : wp_title( '' ); ?>
		</title>
		<?php /*wp_head();*/ ?>

		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/styles/vendor/normalize.css">
	    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/styles/vendor/jquery.bxslider.css" />
	    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/styles/vendor/skeleton.css">
	    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/styles/vendor/skeleton-styles.css">
	    <script src="https://use.fonticons.com/e8e95619.js"></script>
	    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/styles/main.css">

	</head>

	<body <?php /* body_class(); */ ?>>

	<div class="page-row">
		<div class="header-section">
		    <header class="container">
		        <div class="row">
		                <div class="twelve columns">
		                        <a href="/" class="home-link"><span class="logo"><?php bloginfo('name'); ?></span></a><span class="sub-logo"><em>Graphic Design</em></span>
		                    <nav class="u-pull-right">
		                        <div class="nav-toggle u-pull-right"><i class="nav-toggle icon icon-bars" id="js-nav-toggle"></i></div>
		                        <ul class="nav" id="js-nav-menu" style="background-color: white; padding-left: 10px;">
		                          <li><a href="about.html">About</a></li>
		                          <li><a href="index.html">Portfolio</a></li>
		                          <li><a href="resume.html">Resume</a></li>
		                        </ul>
		                    </nav>

		                </div>
		            </div>
		        </header>
		    </div>
	</div>

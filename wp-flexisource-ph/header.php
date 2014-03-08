<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/flat-ui.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<img src="<?php echo get_template_directory_uri(); ?>/images/image-logo.png" border="0">
			</div>
			<div class="col-lg-7 menuContainer">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav' ) ); ?>
			</div>
		</div>
	</div>
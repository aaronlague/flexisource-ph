<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package flexisource_ph
 */

get_header(); ?>

<div class="">
	
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>

</div>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package flexisource_ph
 */

get_header(); ?>
	<section class="sliderSection">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/image-placeholder.png" border="0" />
				</div>
			</div>
		</div>
	</section>	
	<section class="contentSection">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 contentTab">
					<div class="row">
						<div class="col-md-4">
							<h1>WHO WE ARE</h1>
							<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed laoreet dolor. Fusce imperdiet euismod odio, et vehicula nisl commodo sed. Morbi ultricies dignissim eros sit amet malesuada. Aenean sodales mi vitae suscipit tempor. Proin velit velit, scelerisque dictum pellentesque et, posuere a sem. Phasellus massa magna, placerat quis posuere in, gravida ac odio. Praesent et ante vitae purus volutpat pellentesque dignissim vitae nisl. Maecenas elementum felis at justo luctus posuere.</p>
						</div>
						<div class="col-md-4">
							<h1>WHAT WE DO</h1>
							<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed laoreet dolor. Fusce imperdiet euismod odio, et vehicula nisl commodo sed. Morbi ultricies dignissim eros sit amet malesuada. Aenean sodales mi vitae suscipit tempor. Proin velit velit, scelerisque dictum pellentesque et, posuere a sem. Phasellus massa magna, placerat quis posuere in, gravida ac odio. Praesent et ante vitae purus volutpat pellentesque dignissim vitae nisl. Maecenas elementum felis at justo luctus posuere.</p>
						</div>
						<div class="col-md-4">
							<h1>WHAT SETS US APART</h1>
							<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed laoreet dolor. Fusce imperdiet euismod odio, et vehicula nisl commodo sed. Morbi ultricies dignissim eros sit amet malesuada. Aenean sodales mi vitae suscipit tempor. Proin velit velit, scelerisque dictum pellentesque et, posuere a sem. Phasellus massa magna, placerat quis posuere in, gravida ac odio. Praesent et ante vitae purus volutpat pellentesque dignissim vitae nisl. Maecenas elementum felis at justo luctus posuere.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mainContent">
			<div class="row">
				<div class="col-lg-12">
					<h2>WHY FLEXISOURCE?</h2>
					<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed laoreet dolor. Fusce imperdiet euismod odio, et vehicula nisl commodo sed. Morbi ultricies dignissim eros sit amet malesuada. Aenean sodales mi vitae suscipit tempor. Proin velit velit, scelerisque dictum pellentesque et, posuere a sem. Phasellus massa magna, placerat quis posuere in, gravida ac odio. Praesent et ante vitae purus volutpat pellentesque dignissim vitae nisl. Maecenas elementum felis at justo luctus posuere.</p>

					<h2>OUR PARTNERS</h2>
					<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed laoreet dolor. Fusce imperdiet euismod odio, et vehicula nisl commodo sed. Morbi ultricies dignissim eros sit amet malesuada. Aenean sodales mi vitae suscipit tempor. Proin velit velit, scelerisque dictum pellentesque et, posuere a sem. Phasellus massa magna, placerat quis posuere in, gravida ac odio. Praesent et ante vitae purus volutpat pellentesque dignissim vitae nisl. Maecenas elementum felis at justo luctus posuere.</p>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
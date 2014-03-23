<?php
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>

<?php get_template_part('biss', 'global'); ?>
	
<section id="global_title" class="container">
	<div class="row">
		<div class="col-xs-12">
			<h2>Find Us Here</h2>
		</div>
	</div>
</section>
	
<section class="container">
	<div class="row">
		<div class="google_maps col-xs-12">
			<?php get_template_part('biss', 'maps'); ?>
		</div>
	</div>
</section>
	
<section id="socmed_cont" class="container">
	<div class="row">
		<div class="col-xs-6">
			<a href="http://twitter.com/<?php the_field('twitter', '75'); ?>" target="_blank">
				<img class="left" src="<?php echo get_template_directory_uri() .'/assets/img/twcont.png' ?>" />
				<span class="block grey">Twiiter</span>
				<span class="block">@<?php the_field('twitter', '75'); ?></span>
			</a>
		</div>
		<div class="col-xs-6">
			<a href="http://facebook.com/<?php the_field('facebook', '75'); ?>" target="_blank">
				<img class="left" src="<?php echo get_template_directory_uri() .'/assets/img/fbcont.png' ?>" />
				<span class="block grey">Facebook</span>
				<span class="block">@<?php the_field('facebook', '75'); ?></span>
			</a>
		</div>			
	</div>
</section>
	
<section id="bottom_form" class="container">
	<div class="row">
		<div class="text_center col-xs-12">
			<button type="button" class="btn btn-warning">
				Contact Form
			</button>
		</div>			
	</div>	
</section>

<section class="form100">
	<div class="container">
		<div class="row">
			<?php the_field('contact_form'); ?>
		</div>
	</div>
</section>		
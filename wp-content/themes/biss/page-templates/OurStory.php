<?php
/**
 * Template Name: OurStory Page
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>
	<?php get_template_part('biss', 'global'); ?>
	
	<section id="story_top" class="container martop30 marbot30">
		<div class="row">
			<div class="col-xs-6">
				<img src="<?php the_field('profile_picture_our_story');?>" />
			</div>
			<div class="col-xs-6 panel_orange">
				<h3>PROFILE</h3>
				<p><?php the_field('profile_description_our_story');?></p>
			</div>			
		</div>
	</section>
	
	
	<div class="bg_white">
	<section id="global_title" class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>Mission</h2>
			</div>
		</div>
	</section>		
	
	<section class="container marbot20">
		<?php the_field('mission_description_our_story'); ?>			
	</section>
	
	<section id="tagline" class="container text_center">
		<div class="row">
			<div class="col-xs-12">
				<h2><?php the_field('tagline_our_story'); ?></h2>
			</div>
		</div>
	</section>
	
	<section class="container padbot20">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="form-group">
					<a href="<?php the_field('link_url_our_story'); ?>">
						<button type="submit" id="btn_ourstory" class="btn btn-success">
							Apply For Admission
						</button>
					</a>
				</div>
			</div>
		</div>	
	</section>
	</div>  <!-- BG White -->
<?php get_footer(); ?>
<?php
/**
 * Template Name: Front Page Template
 *
 * @package WordPress
 */

get_header(); ?>

<section class="slidehome">
	<section class="global_banner">
		<img src="<?php the_field('front_page_image');?>" />
		<div class="banner_desc">
			<div class="container">
				<div class="row">
				<div class="col-xs-12">
					<h3><?php the_field('front_page_slide_title');?></h3>
					<p><?php the_field('front_page_slide_description');?></p>
				</div>
				</div>
			</div>
		</div>
	</section>
</section>

<section id="res_feat" class="container">
	<div class="row">
		<div class="col-xs-6 col-md-6">
			<?php get_template_part('biss', 'highlights'); ?>
		</div>
		<div class="col-xs-6 col-md-6">
			<?php get_template_part('biss', 'search'); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
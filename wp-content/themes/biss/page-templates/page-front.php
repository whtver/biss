<?php
/**
 * Template Name: Front Page Template
 *
 * @package WordPress
 */
?>
<?php get_header(); ?>
<section class="slidehome">
	<div class="clearfix nav_cont_slide">
		<a href="#" class="col-xs-6 cus_prev">&laquo;</a>
		<a href="#" class="col-xs-6 cus_next">&raquo;</a>
	</div>
	<div id="slides">
		<?php if( have_rows('slider_contents') ): ?>
 
			<?php while( have_rows('slider_contents') ): the_row(); 

				// vars
				$title = get_sub_field('front_page_slide_title');
				$description = get_sub_field('front_page_slide_description');
				$call_to_action_text = get_sub_field('front_page_slide_call_to_action_text');
				$call_to_action_url = get_sub_field('front_page_slide_call_to_action_url');
				$image_url = get_sub_field('front_page_slide_image'); 
		 
				?>
		 		
		 		<div>
					<div class="slide_caption">
						<h3><?php echo $title ?></h3>
						<p><?php echo $description ?></p>
						<?php if ($call_to_action_text): ?>
							<div class="row">
								<div class="col-xs-8">
									<a href="<?php echo $call_to_action_url ?>">
										<button type="button" class="btn btn-success"><?php echo $call_to_action_text ?></button>
									</a>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<img src="<?php echo $image_url ?>" />
				</div>
		 
			<?php endwhile; ?>
		 
		<?php endif; ?>
	</div>
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
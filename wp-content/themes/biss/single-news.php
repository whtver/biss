<?php get_header(); ?>
<div class="bg_white">
	<section class="global_banner">
		<?php $image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<img src="<?php the_field('header_image_news'); ?>" />
		<div class="banner_desc post_title">
			<div class="container">
				<div class="row">
				<div class="col-xs-12">
					<?php the_title('<h3>', '</h3>') ?>
				</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="post" class="container martop30">
		<div class="row">
			<div class="col-md-12 marbot20">
				<p class="date_post single_date"><?php the_time('F d, Y'); ?></p>			
				<p><img src="<?php echo $image_url ?>" /></a></p>
				<div class="single_content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<p><?php the_content();?></p>
					<?php 
					endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
				</div>
			</div>		
		</div>
	</section>
	</div> <!-- BG White -->
<?php get_footer(); ?>
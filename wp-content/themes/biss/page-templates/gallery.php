<?php
/**
 * Template Name: Gallery Page
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>
	<?php get_template_part('biss', 'global'); ?>

	<section class="container martop30">
		<div class="row">
			<div class="col-xs-6">
				<div id="caption" class="caption-container"></div>
			</div>
			<div class="col-xs-6">
				<div id="controls" class="controls"></div>
			</div>			
		</div>
	</section>
	
	<section id="gallery_cont">
		<div id="gallery">
			<div class="slideshow-container">
				<div id="loading" class="loader"></div>
				<div id="slideshow" class="clearfix slideshow"></div>
			</div>
		</div>
		<div id="thumbs" class="marbot20">
			<ul class="thumbs noscript clearfix">
				<?php while( have_rows('images') ): the_row(); ?>
				<li class="col-xs-4 padnol">
					<?php $image = get_sub_field('image_gallery');?>
					<a class="thumb" name="leaf" href="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>">
						<img src="<?php echo $image['sizes']['gallery-thumb']; ?>" />
					</a>
					<div class="caption">
						<div class="image-title"><?php echo $image['caption']; ?></div>
					</div>
				</li>
				<?php endwhile; ?>				
			</ul>
		</div>
	</section>

<?php get_footer(); ?>
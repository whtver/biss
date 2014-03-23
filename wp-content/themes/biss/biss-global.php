<section class="global_banner">
	<img src="<?php the_field('image_banner'); ?>" />
	<div class="banner_desc">
		<div class="container">
			<div class="row">
			<div class="col-xs-12">
				<?php the_title('<h3>', '</h3'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<p><?php the_content();?></p>
					<?php 
					endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
			</div>
			</div>
		</div>
	</div>
</section>
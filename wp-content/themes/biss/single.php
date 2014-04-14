<div class="width100">
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p><?php the_field('subheading_post'); ?></p>
		</div>
	</div>
	</div>
</div>
<div class="container padbot20">
	<div class="row">
		<div class="col-md-12 padnol">
			<img class="long_thumb" src="<?php the_field('banner_post') ?>" />		
		</div>
		<div class="col-md-12">
			<?php if( have_rows('content_items_post') ): ?>
				<?php while( have_rows('content_items_post') ): the_row(); 
					$header = get_sub_field('header_content_item');
					$description = get_sub_field('description_content_item'); ?>
					<h3><?php echo $header ?></h3>
					<?php echo $description ?>
					<?php $i++ ?>
				<?php endwhile; ?>
			<?php endif; ?>	
		</div>				
	</div>
</div>
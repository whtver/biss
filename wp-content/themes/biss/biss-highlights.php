<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Highlights</h3>
	</div>
	<div class="panel-body orange">
		<?php 
			$the_query = new WP_Query( array('posts_per_page' => 3, 'category_name' => 'highlights') ); ?>

			<?php if ( $the_query->have_posts() ) : ?>
				<?php $i = 1; ?>

			  	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			  		<?php $image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
					<div class="row featured_art">
						  <div class="col-xs-3">
						  	<?php if($i == 1): ?>
								<a href="#" class="thumbnail">
								  <img src="<?php echo $image_url ?>">
								</a>
								<p class="date_hl mobile_tricky" style="display: none;"><?php echo get_the_date(); ?></p>
							<?php else: ?>
								<p class="date_hl"><?php echo get_the_date(); ?></p>
							<?php endif; ?>
						  </div>
						<div class="col-xs-9">
							<?php if($i == 1): ?>
								<div class="feat_art">
									<p class="date_hl"><?php echo get_the_date(); ?></p>
									<h4><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
									<p class="feat_desc"><?php echo get_the_excerpt(); ?></p>
								</div>
							<?php else: ?>
								<h4><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
							<?php endif; ?>
						</div>
					</div>
					<?php $i++ ?>
				<?php endwhile; ?>

			 	<?php wp_reset_postdata(); ?>

			<?php else:  ?>
			  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</div>
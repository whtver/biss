<li class = "col-md-6">
	<a href="#" class="thumb_link"><?php the_post_thumbnail('archive-thumb');?></a>
	<div class="post_box">					
		<p class="date_post"><?php the_time('F d, Y'); ?></p>
		<h3 class="borbot"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p><?php the_excerpt(); ?></p>
	</div>
</li>
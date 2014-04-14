<?php get_header(); ?>

<div class="width100 classes">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class="padbot20"><?php the_field('subheading_post'); ?></p>
				<div class="clearfix">
					<div class="col-md-7 padnol">
						<div class="form-group">
							<a href="<?php the_field('link_to_apply_class'); ?>"><button type="submit" class="btn btn-success">
								Apply For Admission
							</button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h4>Level Tersedia:</h4>
				<ul class="level_cont clearfix">
					<?php while( have_rows('class_level') ): the_row();  ?>
					<li><?php echo get_sub_field('class_level_name'); ?></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<section id="global_title" class="container">
	<div class="row">
		<div class="col-xs-12">
			<h2>Curriculum</h2>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-md-12 padnol marbot20">
			<img class="long_thumb" src="<?php the_field('banner_post'); ?>" />		
		</div>
		<div class="col-md-12">
			<div id="horizontalTab" class="padbot25">
				<ul class="clearfix resp-tabs-list">
					<?php while( have_rows('class_type_class')): the_row(); ?>
						<li><?php the_sub_field('class_type_name'); ?></li>
					<?php endwhile; ?>
				</ul>
				<div class="resp-tabs-container">
					<?php while( have_rows('class_type_class')): the_row(); ?>
						<div>
						<?php while (have_rows('class_type_details')): the_row(); ?>
							<div class="accor_cont">
								<h4><?php the_sub_field('class_name'); ?></h4>
								<p><?php the_sub_field('class_description'); ?></p>
							</div>
						<?php endwhile; ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 ">
			<div class="form-group">
				<a href="<?php the_field('link_to_apply_class'); ?>"><button type="submit" class="btn btn-success">
					Apply For Admission
				</button></a>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

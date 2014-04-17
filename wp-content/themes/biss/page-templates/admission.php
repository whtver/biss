<?php
/**
 * Template Name: Admission Page
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>
	<?php get_template_part('biss', 'global'); ?>
	
	<section id="list_admission" class="marbot30 martop30 container">
		<h3>Persyaratan</h3>
		<?php $i = 1; ?>
		<?php while( have_rows('persyaratan_list') ): the_row();  ?>
			<div class="row <?php echo $class = ($i == 1 ?  "bortop" : ""); ?>">
				<div class="col-xs-1 text_center"><?php echo $i;?></div>
				<div class="col-xs-11"><?php echo get_sub_field('persyaratan_content'); $i++; ?></div>
			</div>
		<?php endwhile; ?>		
	</section>
	
	<section id="step_admission" class="marbot20 container">
		<h3>Tata Cara Pendaftaran</h3>
		<div class="row">
			<div class="col-xs-3">
				<img class="res_none" src="<?php echo get_template_directory_uri(); ?>/assets/img/admission/cara1.png" />
				<div class="cara_cont">
					<p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/admission/1.png" /></p>
					<p><?php the_field('syarat_1'); ?></p>
				</div>
			</div>
			<div class="col-xs-3">
				<img class="res_none" src="<?php echo get_template_directory_uri(); ?>/assets/img/admission/cara2.png" />
				<div class="cara_cont">
					<p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/admission/2.png" /></p>
					<p><?php the_field('syarat_2'); ?></p>
				</div>				
			</div>
			<div class="col-xs-3">
				<img class="res_none" src="<?php echo get_template_directory_uri(); ?>/assets/img/admission/cara3.png" />
				<div class="cara_cont">
					<p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/admission/3.png" /></p>
					<p><?php the_field('syarat_3'); ?></p>
				</div>					
			</div>
			<div class="col-xs-3">
				<img class="res_none" src="<?php echo get_template_directory_uri(); ?>/assets/img/admission/cara4.png" />
				<div class="cara_cont">
					<p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/admission/4.png" /></p>
					<p><?php the_field('syarat_4'); ?></p>
				</div>					
			</div>			
		</div>	
	</section>
	
	<section class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 ">
				<div class="form-group">
					<button type="submit" class="btn btn-success">
						Apply For Admission
					</button>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>	
	</section>
	
	
	<div class="bg_white">
	
	<section id="global_title" class="container marbotnon">
		<div class="row">
			<div class="col-xs-12">
				<h2>Biaya - biaya</h2>
			</div>
		</div>
	</section>	
	
<div class="container">
	<div class="row">
		<div class="panel-group" id="accordion">
		  <?php $i = 1; ?>
		  <?php while( have_rows('biaya_class_name') ): the_row();  ?>
		  <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#accor_<?php echo $i; ?>">
					<?php echo get_sub_field('nama_class_category');?>
				<?php if(get_sub_field('guru_kelas') != ''):?>
					<span><em>Guru: </em><?php echo get_sub_field('guru_kelas'); ?></span>
				<?php endif; ?>
				</a>
			  </h4>
			</div>
			<div id="accor_<?php echo $i; ?>" class="panel-collapse collapse">
			  <div class="panel-body">
				
				<!-- BEGIN Accordion Content -->
				<?php while( have_rows('class_category_price') ): the_row();  ?>
				<div class="row">
					<div class="col-xs-8">
						<h4><?php echo get_sub_field('class_name_price_category');?></h4>
					</div>
					<div class="col-xs-4">
						<h4 class="orange">
							<?php echo get_sub_field('class_name_price_category_harga');?>
							<span><?php echo get_sub_field('class_name_price_category_duration');?></span>
						</h4>
					</div>
					<?php while( have_rows('sub_class_name_price_category') ): the_row();  ?>
						<div class="clearfix">
							<div class="col-xs-8">
								<h5><?php echo get_sub_field('sub_class_name_price_category_name');?></h5>
							</div>
							<div class="col-xs-4">
								<h5 class="orange">
									<?php echo get_sub_field('sub_class_name_price_category_name_price');?>
									<span><?php echo get_sub_field('sub_class_name_price_category_name_duration');?></span>
								</h5>
							</div>
						</div>
					<?php endwhile;?>					
				</div>
				<?php $i++; ?>

			  <?php endwhile;?>

			  <!-- END Accordion Content -->
			  
			  </div>
			</div>
		  </div>
		<?php endwhile;?>
			</div>
		  </div>		  
		</div>		
	</div>
</div>

	
	<section id="bottom_form" class="container">
		<div class="row">
			<div class="text_center col-xs-12">
				<button type="button" class="btn btn-warning">
					APPLY FOR ADMISSION
				</button>
			</div>			
		</div>	
	</section>
	<section class="form100">
		<div class="container">
			<div class="row">
				<?php the_field('admission_form'); ?>
			</div>
		</div>
	</section>

	</div> <!-- BG White -->

<?php get_footer(); ?>
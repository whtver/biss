<?php
/**
 * Template Name: Front Page Template
 *
 * @package WordPress
 */

get_header(); ?>

<section class="slidehome">
	<section class="global_banner">
		<img src="<?php echo get_template_directory_uri() .'/assets/img/banner/home.jpg' ?>" />
		<div class="banner_desc">
			<div class="container">
				<div class="row">
				<div class="col-xs-12">
					<h3>Home</h3>
					<p>Dengan kurikulum khusus yang mampu memberikan keseimbangan antara aspek seni dan aspek mental, Sekolah Bina Seni Suara memiliki tujuan utama menumbuhkan pengetahuan teori dan praktek bermusik melalui perhatian khusus dan istimewa.</p>
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
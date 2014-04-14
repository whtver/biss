<?php
/*
Template Name: archive
*/
?>
<?php get_header(); ?>

	<?php get_template_part('biss', 'global'); ?>
	<!-- AJAX LOAD MORE -->
	<section id="ajax-load-more" class="container martop30">
		<div id="post">
		<ul class="listing" data-path="<?php echo get_template_directory_uri(); ?>/ajax-load-more" data-post-type="post" data-category="news" data-taxonomy="" data-tag="" data-display-posts="2" data-scroll="true" data-button-text="LOAD MORE">
		<!-- Load Ajax Posts Here -->
		</ul>
		</div>
	</section>
	<!-- /end AJAX LOAD MORE -->	
<?php get_footer(); ?>

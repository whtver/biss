<?php
/**
 * Template Name: Class Page
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>
	<?php get_template_part('biss', 'global'); ?>
	
	<section id="global_title" class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>classes available</h2>
			</div>
		</div>
	</section>

	<section id="tab_nav" class="container">
		<?php $rows = get_field('submenu_repeater' ); ?>
		<?php $count = count($rows) ?>
		<?php $column_size = floor(12 / $count) ?>
		<?php $i = 1 ?>
		<div class="row">
			<?php if( have_rows('submenu_repeater') ): ?>
				<?php while( have_rows('submenu_repeater') ): the_row(); 
					$icon = get_sub_field('icon_submenu');
					$title = get_sub_field('title_submenu');
					$link = get_sub_field('post_url_submenu'); ?>
					<a id = "<?php echo $title ?>" href="<?php echo $link ?>" class="col-xs-<?php echo $column_size ?> bg_white" data-toggle="tabajax" data-target="#tab_<?php echo $i ?>">
						<img src="<?php echo $icon ?>" />
						<p><?php echo $title ?></p>
					</a>
					<?php $i++ ?>
				<?php endwhile; ?>
			<?php endif; ?>	
		</div>
	</section>

	<div class="tab-content">
		<?php $x = 1 ?>
		<?php while($x < $count): ?>
			<div class="tab post padbot20 bg_white" id="tab_<?php echo $x ?>">
			</div>
			<?php $x++ ?>
		<?php endwhile; ?>
	</div>
	
	<section id="curriculum" class="container padbot30 martop30">
		<div class="row">
			<div class="col-xs-6 cur_green">
				<img src="<?php the_field('room_concert_image'); ?>" />
				<div class="panel_green">
					<h3>ROOM CONCERT</h3>
					<p><?php the_field('room_concert_description'); ?></p>
				</div>
			</div>
			<div class="col-xs-6 cur_orange">
				<img src="<?php the_field('sertifikat_image'); ?>" />
				<div class="panel_orange">
					<h3>SERTIFIKAT ABRSM</h3>
					<p><?php the_field('sertifikat_description'); ?></p>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		$(document).ready(function () {
		    $("#<?php echo get_query_var('class-type'); ?>").trigger('click');
		});
	</script>
<?php get_footer(); ?>
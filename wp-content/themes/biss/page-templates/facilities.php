<?php
/**
 * Template Name: Facilities Page
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>

	<?php get_template_part('biss', 'global'); ?>
	
	<section id="global_title" class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>Facilities</h2>
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
					<a href="<?php echo $link ?>" class="col-xs-<?php echo $column_size ?>" data-toggle="tabajax" data-target="#tab_<?php echo $i ?>">
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
			<div class="tab-pane post" id="tab_<?php echo $x ?>">
				<div class="text-center">
					<img src="http://i.stack.imgur.com/Pi5r5.gif" />
				</div>
			</div>
			<?php $x++ ?>
		<?php endwhile; ?>
	</div>

<?php get_footer(); ?>
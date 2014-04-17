<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-8">
				<h3><?php the_field('footer_title', '75'); ?></h3>
				<?php the_field('footer_address', '75'); ?>
			</div>
			<div class="col-xs-4">
				<div class="row">
					<div class="col-md-6">
						<a href="http://twitter.com/<?php the_field('twitter', '75'); ?>" target="_blank" class="foot_tw">
							<span class="cyan">Twitter</span>
							<span>@<?php the_field('twitter', '75'); ?></span>
						</a>
					</div>
					<div class="col-md-6">
						<a href="http://facebook.com/<?php the_field('facebook', '75'); ?>" target="_blank" class="foot_fb">
							<span class="cyan">Facebook</span>
							<span>@<?php the_field('facebook', '75'); ?></span>
						</a>
					</div>
				</div>
			</div>			
		</div>			
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="copy">
				<p>&copy; Copyright 2013 Bina Seni Suara. All Rights Reserved. </p>
				</div>
			</div>
		</div>			
	</div>	
</footer>
<?php wp_footer(); ?>
</body>
</html>
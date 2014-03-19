<div class="panel panel-default">
	<div class="panel-heading green">
		<h3 class="panel-title"><?php the_field('search_form_title') ?></h3>
	</div>
	<div class="panel-body green">
		<form role="search form" action="<?php echo site_url('/'); ?>" method="get">
			<div class="row">
				<div class="col-md-10">
					<div class="form-group">
						<input type="search" name="s" class="form-control" id="exampleInputEmail2" placeholder="ENTER SEARCH KEYWORD">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<button type="submit" class="btn btn-success">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</div>
				</div>
			</div>
			<p><?php if(get_field('search_form_description')) {
					the_field('search_form_description');
				}  ?></p>
		</form>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading green">
		<h3 class="panel-title"><?php the_field('search_form_title') ?></h3>
	</div>
	<div class="panel-body green">
		<form role="search form" action="<?php echo site_url('/classes/'); ?>" method="get">
			<div class="row">
				<div class="col-md-10">
					<div class="form-group">
						<select name="class-type" class="form-control styled_select" aria-invalid="false">
							<option value="Vokal">Kelas Vokal</option>
							<option value="Gitar">Kelas Gitar</option>
							<option value="Piano">Kelas Piano</option>
							<option value="Biola">Kelas Biola</option>
							<option value="Dance">Kelas Dance</option>
							<option value="Khusus">Kelas Khusus</option>
						</select>
					</div>
				</div>
				<div class="col-md-2 pad_left">
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

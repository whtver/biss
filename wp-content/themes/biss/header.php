
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6 oldie" lang="en"> <![endif]--> 
<!--[if IE 7 ]>    <html class="no-js ie7 oldie" lang="en"> <![endif]--> 
<!--[if IE 8 ]>    <html class="no-js ie8 oldie" lang="en"> <![endif]--> 
<!--[if IE 9 ]>    <html class="no-js ie9" lang="en"> <![endif]--> 
<!--[if (gte IE 10)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]--> 
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="assets/img/favicon.ico" rel="icon" type="image/x-icon" />
    <!--[if IE]>
      <script src="<?php echo get_template_directory_uri(). '/assets/js/html5shiv.js' ?>"></script>
      <script src="<?php echo get_template_directory_uri(). '/assets/js/respond.min.js' ?>"></script>
    <![endif]-->
  <?php wp_head(); ?>
  <script src="<?php echo get_template_directory_uri(). '/assets/js/customselect.js' ?>"></script>
</head>
	
<body>

<header id="header">
  <!-- Fixed navbar -->
	<div class="navbar-wrapper">
    <div class="container">
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
  			<img src="<?php echo retrieve_logo()['logo_non_mobile']; ?>" class="img-responsive" />
  		  </a>
          </div>
          <?php wp_nav_menu( array('menu' => 'Top primary menu', 'container_class' => 'navbar-collapse collapse', 'items_wrap' => '<ul id="%1$s" class="nav navbar-nav navbar-right">%3$s</ul>' )); ?>
        </div>
      </div>
    </div>
  </div>
</header>

<?php //print '<pre>'.var_dump(retrieve_logo()).'</pre>'; ?>
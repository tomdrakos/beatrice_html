<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php if (is_search()): ?>
  <meta name="robots" content="noindex, nofollow" />
  <?php endif;?>

  <title>
    <?php bloginfo('name');?> |
    <?php is_home() ? bloginfo('description') : wp_title('');?>
  </title>

  <!-- TODO: Use directiories from functions -->

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
  <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css' />
  <!-- <link rel="stylesheet" href='<?php echo font_awesome_url(); ?>' integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous"> -->
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=latin-ext" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/nav.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
    crossorigin="anonymous">

  <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  <?php wp_head();?>

</head>

<body <?php body_class();?>>
  <header>
  <!-- <nav class="navbar fixed-top navbar-light navbar-expand-sm navbar-template">
    <a class="navbar-brand" href="#">
      <img class="header-icon-logo" src="<?php echo get_template_directory_uri();?>/icon/beatrice_logo.svg">
    </a>
    <div class="d-flex flex-row order-2 order-sm-3">
      <ul class="navbar-nav flex-row">
        <li><a class="nav-link px-2" href="#"><img class="header-icon" src="<?php echo get_template_directory_uri();?>/icon/facebook_icon.svg"></a></li>
        <li><a class="nav-link px-2" href="#"><img class="header-icon" src="<?php echo get_template_directory_uri();?>/icon/linkedin_icon.svg"></a></li>
      </ul>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse order-3 order-sm-2" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Produkty</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Cennik</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Kontakt</a></li>
        <li class="nav-item d-none d-sm-block"><a class="nav-link" href="#"> | </a></li>
      </ul>
    </div>
      
<?php
  wp_nav_menu([
      'menu' => 'top',
      'theme_location' => 'top',
      'container' => 'div',
      'container_id' => 'bs4navbar',
      'container_class' => 'collapse navbar-collapse',
      'menu_id' => false,
      'menu_class' => 'navbar-nav ml-auto',
      'depth' => 2,
      'fallback_cb' => 'bs4navwalker::fallback',
      'walker' => new bs4navwalker(),
  ]);
?>
    </nav> -->


<nav class="navbar fixed-top navbar-light navbar-expand-sm navbar-template" role="navigation">
<a class="navbar-brand" href="#">
      <img class="header-icon-logo" src="<?php echo get_template_directory_uri();?>/icon/beatrice_logo.svg">
    </a>
    <div class="d-flex flex-row order-2 order-sm-3">
      <ul class="navbar-nav flex-row">
        <li><a class="nav-link px-2" href="#"><img class="header-icon" src="<?php echo get_template_directory_uri();?>/icon/facebook_icon.svg"></a></li>
        <li><a class="nav-link px-2" href="#"><img class="header-icon" src="<?php echo get_template_directory_uri();?>/icon/linkedin_icon.svg"></a></li>
      </ul>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button> -->
	<!-- <a class="navbar-brand" href="#">Navbar</a> -->
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 1,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse order-3 order-sm-2"',
			'container_id'      => 'navbarNavDropdown',
			'menu_class'        => 'nav navbar-nav ml-auto',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new bs4navwalker(),
		) );
		?>
	</div>
</nav>

  
  </header>
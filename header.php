<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='https://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,500italic,500,400italic,300italic,300,100italic,100&subset=latin,cyrillic,latin-ext,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic&subset=latin,cyrillic-ext,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
	wp_head();
?>
</head>

<body <?php body_class($class); ?>>
	<?php if(!is_user_logged_in()){ ?>
		<img src="<?php bloginfo('template_url') ?>/images/getsmart_temp.jpg" alt="GetSmart" style="margin:auto;display: block;max-width: 1150px;width: 100%;" />
	<?php die();
} ?>
	<header class="container">
		<div class="row">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
				  <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
					  <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Logo" style="width:auto;height:120px;" />
				  </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			  	<div class="lang-cont pull-right col-xs-12 col-sm-6">
					<div class="lang-inner">
						<?php $lngs = icl_get_languages('skip_missing=N&orderby=name&order=asc');
		  				  foreach($lngs as $lng){
		  						  echo '<a href="'.$lng["url"].'" class="lng-'.$lng["code"].(ICL_LANGUAGE_CODE==$lng["code"] ? " curr-lang" : "").'">
		  						  '.$lng["native_name"].' <img src="'.get_template_directory_uri()."/images/lng-".$lng["code"].".png".'">
		  						  </a>';
		  				  }
	  				  	?>
					</div>
					<a href="<?php bloginfo('url'); ?>/viselheto-bioszenzortechnologia-alkalmazasa-a-gyogyszerkutatasban-valamint-a-kozossegi-stresszmeresben/<?= ICL_LANGUAGE_CODE == 'hu' ? '' : '/?lang=en' ?>" class="szechenyi-kicsi">
	                    <img src="<?php bloginfo('template_url') ?>/images/alap_infoblokk_NKFIA.jpg" alt="Széchenyi terv logó kisebb" style="width:200px;height:auto;" />
	                </a>
				</div>
				<div class="collapse navbar-collapse col-xs-12 col-sm-6 pull-right" id="bs-example-navbar-collapse-1">
					<?php wp_nav_menu( array(
						'menu' => 'Main Menu',
						'menu_class' => 'nav navbar-nav navbar-right',
						'container_class' => 'mainmenu')
					); ?>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<div id="content">

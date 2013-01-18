<!DOCTYPE HTML>
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
<link href='http://fonts.googleapis.com/css?family=Monda:400,700|Chivo' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lustria' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,700italic|PT+Sans+Narrow:400,700|PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.masonry.min.js"></script>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/style.css" />
<!--		<link rel="stylesheet" media="only screen and (max-device-width: 1024px)" href="<?php bloginfo('template_directory'); ?>/css/ipad.css" type="text/css" />-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="all" />
		    <!-- jQuery library (served from Google) -->
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	    <!-- bxSlider Javascript file -->
	    <script src="<?php bloginfo('template_directory'); ?>/js/slider/jquery.flexslider-min.js"></script>
	    <!-- bxSlider CSS file -->
	    <link href="<?php bloginfo('template_directory'); ?>/js/slider/flexslider.css" rel="stylesheet" />
	    <script type="text/javascript">
	     //    $(document).ready(function(){
	     //        $('.bxslider').bxSlider({
	     //        	  auto: true,
					 //  autoControls: true
				  // });
	     //    });
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide"
              });
            });
	    </script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="container">
        <div id="ads" class="row">
            <div>
                &nbsp;
                <br />
                &nbsp;
            </div>
        </div>

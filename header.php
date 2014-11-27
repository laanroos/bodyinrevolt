<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/imgLiquid.js"></script>
<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
<LINK HREF="<?php echo get_stylesheet_directory_uri(); ?>/print.css" REL="stylesheet" media="print" TYPE="text/css">
<script type="text/javascript">
$(document).ready(function() {
	//faden van video content
    $('.entry-content-video').cycle({
    fx:      'fade', 
    speedIn: 5000, 
    speedOut: 5000, 
    timeout:  200 
	});

//animeren van longtext
		$('.entry-content-longtext-container').hover(function() {
      	$(this).children('.entry-content-longtext').stop().animate({ fontSize : '1.5em' }, 500);
	  	},

	function() {
		$(this).children('.entry-content-longtext').stop().animate({ fontSize : '3em' }, 500);
	});
	

//animeren van quote
$('.entry-content-quote-container').hover(function() {
$(this).children('.entry-content-quote').stop().animate({ fontSize : '2em' }, 500);
}, function() {
$(this).children('.entry-content-quote').stop().animate({ fontSize : '14em' }, 500);
});

//zorgen dat bij hover de category verschijnt
$('.entry-content').hover( 
   function() { 
     $(this).children('.entry-header').css("opacity", "0.6" )
   },
   function() { 
     $(this).children('.entry-header').css("opacity", "0")
   });
 

//uitklappen van posts
       $.ajaxSetup({cache:false});
        $(".post-link").click(function(){
            var post_link = $(this).attr("href");
            var post_rel = $(this).attr("rel");
			
            $("#single-post-container-" + post_rel).html("...");
            $("#single-post-container-" + post_rel).load(post_link);
            
				$(".single-post-container").html("");

		$('html, body').animate({
        	scrollTop: $("#post-" + post_rel).offset().top
        	}, 2);
        
        history.pushState("", "", post_link);
        
         return false;
        };
      
     }); 
     
     
     
//kenburns
$(window).load(function(){
$('.entry-content-image img').addClass('zoomin');
});

setInterval(function(){
   $('.zoomin').toggleClass('zoomout');
},10000);
     
$(document).ready(function() {
    $('.entry-content-image p').find('img').each(function() {
        var imgClass = (this.width / this.height > 1) ? 'wide' : 'tall';
        $(this).addClass(imgClass);
    })
})   
  
  
  //tekst tussendoor
$(document).ready(function(){
$('.entry-content-video p:not(:has(img))').addClass('lossetekst');
});   

         
</script>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">


	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
						
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<div class="achtergrond"></div>
			
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>

		
	</header><!-- #masthead -->

	<div id="main" class="site-main">

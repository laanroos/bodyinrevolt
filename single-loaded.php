<style type="text/css">

.loaded-content-container {
	background-color: #111;
	color: #eee;
	padding: 10em;
}

.loaded-content-container div p {
	font-size: 2em;
	
}

.social {
	height:80px;
	width:80px;
	top:-100px;
	right:-100px;
	position:relative;
	float:right;
	margin:10px !important;
	font-size:50px;
	text-align:center;
}

.social:hover {
	cursor:pointer;
}



</style>


<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>

<script>
    function fbShare(url, title, descr, image, winWidth, winHeight) {
        var winTop = (screen.height / 2) - (winHeight / 2);
        var winLeft = (screen.width / 2) - (winWidth / 2);
        window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
    }
</script>

	<div class="loaded-content-container">

<div class="social" onClick="window.print()"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/print.jpg" onmouseover="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/print-hover.jpg'" onmouseout="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/print.jpg'" width="80px"></div>

<a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site <?php echo curPageURL(); ?>"><div class="social"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mail.png" onmouseover="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/mail-hover.png'" onmouseout="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/mail.png'" width="80px"></div></a>

<a href="javascript:fbShare('<?php echo curPageURL(); ?>', 'Fb Share', 'Facebook share popup', 'http://goo.gl/dS52U', 520, 350)"><div class="social"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" onmouseover="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/facebook-hover.png'" onmouseout="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png'" width="80px"></img></div></a>

<a class="twitter popup" href="http://twitter.com/share"><div class="twitter-share-button social"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" onmouseover="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/twitter-hover.png'" onmouseout="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png'" width="80px"></img></div></a>

<script>
  $('.popup').click(function(event) {
    var width  = 575,
        height = 400,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;
    
    window.open(url, 'twitter', opts);
 
    return false;
  });
</script>

	<div class="loaded-content">

						<p><?php the_title(); ?></p>
		
						<p><?php the_content(); ?></p>
						
						</div>
				<div class="loaded-excerpt">
                	<p><?php 
                	if ( ! has_excerpt() ) {
						echo '';
					} else { 
						the_excerpt();
					}?></p>
                	
				</div>
				<div class="loaded-tags">
                <p>Tags: <?php the_tags('', ', ', ', ');?>
                <?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if($categories){
	foreach($categories as $category) {
		$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
	}
echo trim($output, $separator);
}
?></p>

				</div>
          
	</div>
	

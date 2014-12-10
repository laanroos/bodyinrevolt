<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/* Normal request: Return everything (header, sidebar, content, etc) */
	  /* eerst de id opslaan, en dan de normale pagina bouwen en als de id langskomt ook de content tonen */
        //$GLOBALS['postidee'] = get_post($_POST['id']);
    while (have_posts()) : the_post();
	
	$postid = get_the_ID();
?>
<script type="text/javascript">

	window.location.replace("<?php bloginfo('url');?>?id=<?php echo $postid;?>");
	
</script>
<?php

	endwhile;
 	die;

?>

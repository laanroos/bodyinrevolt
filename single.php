<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


/* Ajax check  */
$post = get_post($_POST['id']);

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    while (have_posts()) : the_post();

 
include("single-loaded.php"); 

	     endwhile;
?>




    
    
    

<?php } else { 

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
    }

?>
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


 
?>

<style type="text/css">

.loaded-content-container {
	background-color: #111;
	color: #eee;
	padding: 10em;
}

.loaded-content-container div p {
	font-size: 2em;
	
}

</style>
 
    <?php while (have_posts()) : the_post(); ?>
 
	<div class="loaded-content-container">
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
                
    <?php endwhile;?> 
    
    
    

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
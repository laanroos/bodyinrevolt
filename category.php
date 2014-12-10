<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
   if ( have_posts() ) :
	
	$catid = single_cat_title( '', false );
?>
<script type="text/javascript">

	window.location.replace("<?php bloginfo('url');?>?thecat=<?php echo $catid;?>");
	
</script>
<?php

	endif;    

?>
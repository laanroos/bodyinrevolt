<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
   if ( have_posts() ) :
	
	$tagid = single_tag_title( '', false );
?>
<script type="text/javascript">

	window.location.replace("<?php bloginfo('url');?>?thetag=<?php echo $tagid;?>");
	
</script>
<?php

	endif;    

?>
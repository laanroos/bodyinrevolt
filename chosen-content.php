<?php
/**
 * The template for displaying featured content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div id="featured-content" class="featured-content">
	<?php
		/**
		 * Fires before the Twenty Fourteen featured content.
		 *
		 * @since Twenty Fourteen 1.0
		 */
		//do_action( 'twentyfourteen_featured_posts_before' );
			
			setup_postdata( $GET['id'] );
			
			 // Include the featured content template.
			//get_template_part( 'content', 'featured-post' );
		    get_template_part( 'content', get_post_format() );

		/**
		 * Fires after the Twenty Fourteen featured content.
		 *
		 * @since Twenty Fourteen 1.0
		 */
		//do_action( 'twentyfourteen_featured_posts_after' );
		wp_reset_postdata();
	?>
</div><!-- #featured-content .featured-content -->

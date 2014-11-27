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
		 
		 //checken of ik via in infiinte scroll hier kom
		 
		 if (isset($_GET['id'])){
		
			 global $post;
			 
			$post = get_post($_GET['id']);
			
			setup_postdata( $post );
			?>
			<div class="entry-container-featured">
			<?php
			
		    get_template_part( 'featured', get_post_format() );
		    
		    ?>
			</div>
			<?php
		    
		 } else {
			
			
			
			
		//do_action( 'twentyfourteen_featured_posts_before' );
		
		$counter = 0;
		$featured_posts = twentyfourteen_get_featured_posts();
		foreach ( (array) $featured_posts as $order => $post ) :
			$counter++;
			if ($counter==1) { 
			
			setup_postdata( $post );
			
			 // Include the featured content template.
			?>
			<div class="entry-container-featured">
			<?php
		    get_template_part( 'featured', get_post_format() );
		    
		    ?>
			</div>
			<?php
		    }
		endforeach;
		
		}

		/**
		 * Fires after the Twenty Fourteen featured content.
		 *
		 * @since Twenty Fourteen 1.0
		 */
		//do_action( 'twentyfourteen_featured_posts_after' );
		wp_reset_postdata();
	?>
</div><!-- #featured-content .featured-content -->

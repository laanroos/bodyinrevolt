<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<div id="content" class="site-content" role="main">


		<?php
			if(!isset($_GET['thetag']) && !isset($_GET['thecat'])){
				get_template_part( 'featured-content' );
			};
		?>
		
		<div id="normal-posts">
		
		
		
		<?php if(isset($_GET['thetag'])|| isset($_GET['thecat'])){
					
					if(isset($_GET['thetag'])) {
						$the_tag = $_GET['thetag'];
						$my_query2 = new WP_Query('tag='. $the_tag .'&showposts=-1'); 
					} else if(isset($_GET['thecat'])) {
						$the_cat = $_GET['thecat'];
						$my_query2 = new WP_Query('category_name='. $the_cat .'&showposts=-1'); 
					}
					
					
					
					while ($my_query2->have_posts()) : $my_query2->the_post(); ?>

					<div class="entry-container">
						
						<?php
							

							get_template_part( 'content', get_post_format() );
							
														?>

						</div>

					<?php endwhile; 
	
					}
		?>



		
		<?php	if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
						?>
						<div class="entry-container">
						<?php
							if(isset($_GET['id'])) {
								$tijdelijkid = $_GET['id'];
							} else {
								$tijdelijkid = 0;
							}
							$postidee = get_the_ID();
							
							if($postidee != $tijdelijkid) {
								if(!has_tag('featured')) {

							get_template_part( 'content', get_post_format() );
							
								}
							}
							
							?>
						</div>
						<?php

				endwhile;
				// Previous/next post navigation.
				twentyfourteen_paging_nav();
			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>
		
		<script type="text/javascript">
			beginnen();
		</script>

		</div>

		</div><!-- #content -->
	<?php //get_sidebar( 'content' ); ?>
<?php 				//twentyfourteen_paging_nav(); ?>
</div><!-- #main-content -->

<?php
//get_sidebar();
get_footer();

?>

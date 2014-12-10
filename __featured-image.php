<?php
/**
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>

	<div id="post-<?php the_ID(); ?>" class="entry-content">
	<header class="entry-header entry-header-video">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
		<a class="post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><div class="entry-meta">
			<p class="cat-links"><?php 
$category = get_the_category(); 
if($category[0]){
echo $category[0]->cat_name;
}
?></p>
		</div></a><!-- .entry-meta -->
		<?php
			endif;
		?>

		<div class="entry-meta">
			<!--<span class="post-format">
				<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'aside' ) ); ?>"><?php echo get_post_format_string( 'aside' ); ?></a>
			</span>-->

			<?php //twentyfourteen_posted_on(); ?>

			<!--<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
			<?php endif; ?>

			<?php edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' ); ?>-->
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

		
	<div class="entry-content-image imgLiquid" 
	
	<?php 
		if(has_tag("featured") || isset($_GET['id'])) {
		echo 'style="width:100%;height:436px;" ';		
		} else {
		echo 'style="width:672px;height:436px;" ';
		}
	
	?>>
		<?php
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
			
		?>
		
	</div>
</div>
	
	    <div id="single-post-container-<?php the_ID(); ?>" class="single-post-container single-post-container">
		    
		    	<?php	if(isset($_GET['id'])) {
		    				include("single-loaded.php");
		    			}
		    			?>

		    
	    </div>


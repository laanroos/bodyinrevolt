<?php
/**
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>

<script> 
$(document).ready(function(){
  $("#x-<?php the_ID(); ?>").click(function(){
    $("#post-<?php the_ID(); ?>").animate({height:'0px'});
  });
});
</script> 

	<div id="post-<?php the_ID(); ?>" class="entry-content entry-header-content">
	<header class="entry-header entry-header-video">
		<div class="entry-meta">
		
			<div class="post-dicht social2" rel="<?php the_ID(); ?>" id="x-<?php the_ID(); ?>" style="width:15px;height:20px;border:1px solid black;cursor:pointer;font-size:12px;padding-top:2px;padding-left:5px;margin:20px 20px 0 20px;color:black;float:right;">X</div> 
		
			<?php if($_GET['id']!="2") { ?> <p class="cat-links"><?php 
								the_title();
?></p><?php } ?>
		</div><!-- .entry-meta -->


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

		
	<div class="entry-content-image entry-header-image featured-page" style="width:100%;height:436px;line-height:1.8em;font-size:1.8em;">
	
	<?php if($_GET['id']=="2") { ?> <p class="page-title"><?php 
								the_title();
?></p><?php } ?>
	
		<?php
			the_content();
			
		?>
		
	</div>
</div>

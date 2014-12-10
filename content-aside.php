<?php
/**
 * The template for displaying posts in the Aside post format
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


	<a class="post-link longtext" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><div class="entry-content entry-content-longtext-container" id="post-<?php the_ID(); ?>">
	
		<header class="entry-header-longtext entry-header-video">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
		<div class="entry-meta">
			<!--<p class="cat-links cat-links-aside"><a class="post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><?php 
$category = get_the_category(); 
if($category[0]){
echo $category[0]->cat_name;
}
?></a></p>-->
		</div><!-- .entry-meta -->
		<?php
			endif;

			/*if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;*/
?>
	</header><!-- .entry-header -->
	
		<div class="entry-content-longtext">
		<p><?php the_title(); ?></p>

		<p class="auteur"><?php $auteur = get_post_meta( get_the_ID(), 'maker1', true );
			if( ! empty( $auteur ) ) {
				$deelnamen = explode(", ", $auteur);
				echo $deelnamen[1];
				echo " ";
				echo $deelnamen[0];
				} ?>
				
				<?php $auteur2 = get_post_meta( get_the_ID(), 'maker2', true );
			if( ! empty( $auteur2 ) ) {
				$deelnamen2 = explode(", ", $auteur2);
				echo " & ";
				echo $deelnamen2[1];
				echo " ";
				echo $deelnamen2[0];
				} ?>
				</p>
		
		<p><?php the_content(); ?></p>
		</div>
	</div><!-- .entry-content --></a>

	<?php //the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
		    <div id="single-post-container-<?php the_ID(); ?>" class="single-post-container"></div>

<?php
/**
 * The template for displaying posts in the Quote post format
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


	<div id="post-<?php the_ID(); ?>" class="entry-content entry-header-content">

	<header class="entry-header entry-header-video">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
		<div class="entry-meta">
			<p class="cat-links"><a class="post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><?php 
$category = get_the_category(); 
if($category[0]){
echo $category[0]->cat_name;
}
?></a></p>
		</div><!-- .entry-meta -->
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
		<script type="text/javascript">
</script>
		<div class="entry-content-quote quote-header">
		<table><td class="quote-centreren"><span class="quote-anim" id="quote-<?php the_ID(); ?>">
		<?php
			the_content();
		?>
</span></td></table>
		
		
		
		<script type="text/javascript">
		
		//oude code, voor het effect van woord voor woord. dit wordt de code voor in de header, alleen het gedeelte vanaf var oplaadtijd moet nog herschreven
		
		/*$('.quote-anim').each(function(){
			var text = $(this).text().split(' ');

			for( var i = 0, len = text.length; i < len; i++ ) {
				text[i] = '<span class="word-' + i + '">' + text[i] + '</span>';
			}
			
			$(this).html(text.join(' '));

		});*/


/*$('#quote-<?php the_ID(); ?>').each(function(){
var text = $(this).text().split(' ');

       for( var i = 0, len = text.length; i < len; i++ ) {
           text[i] = '<span class="word-' + i + '">' + text[i] + '</span>';
           
       }
       $(this).html(text.join(' '));

  });

var oplaadtijd<?php the_ID(); ?> = 1;

function fadeInOut<?php the_ID(); ?> () {
	oplaadtijd<?php the_ID(); ?> = 1;
    $("#quote-<?php the_ID(); ?> span").each(function(i) {
        oplaadtijd<?php the_ID(); ?>++;
        $(this).delay(i*1200).fadeIn(500).fadeOut(500);
    });
    setTimeout(fadeInOut<?php the_ID(); ?>, oplaadtijd<?php the_ID(); ?>*1200);
}

fadeInOut<?php the_ID(); ?>();*/

		</script>
		
		<style type="text/css">
			#quote-<?php the_ID(); ?> span {
				display:none;
			}
		</style>
		</div> <!-- .entry-content-quote -->
	</div><!-- .entry-content -->
	
	<?php //the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
	
		    <div id="single-post-container-<?php the_ID(); ?>" class="single-post-container"></div>

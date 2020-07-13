<?php
/**
 * The template for displaying search results pages.
 *
 * @package Sky
 * @since Sky 1.0.0
 */

get_header(); ?>

<?php 
	$the_url = $_SERVER['PHP_SELF'];
	$the_title = get_the_title(); 
?>
<div class="row">
	<div class="small-12 medium-12 large-12 column blog-pad">
		<h1 class="blogHeadline blue">Search Results</h1>
	</div>
</div>
<div class="row">
	<div class="small-12 medium-12 large-8 column blog-pad">
		
		<?php if (have_posts()) : 
			$count = 1; while (have_posts()) :  
			the_post();
	 
				echo "<a href='".get_the_permalink()."'>";
				
				?>
		  		<div class="row">
					<div class="large-11 columns">
				  		
						<a href="<?php the_permalink();?>"><h2 class="articleTitle"><?php the_title(); ?></h2></a>
						<?php if ( ! has_excerpt() ) {
						echo '<p>';
      					echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); 
						echo '</p>';
						} else { 
						the_excerpt();
						}?>
						<div class="blog-readmore" style="position:relative;">
							<a class="read-more button" href="<?php the_permalink();?>">View Page</a>
						</div>
						<hr>
					</div>
				</div>
			  		
						
				<?php endwhile; // end while
				endif;?>
				<?php sky_page_navi(); ?>
						
	</div>
		
	<div class="small-12 medium-12 large-4 columns cta cta-nopad">
		
<?php
	if( have_rows('sidebar_content', get_option('page_for_posts'))): // Check if any content exists
	while ( have_rows('sidebar_content', get_option('page_for_posts')) ) : the_row(); // Loop through content rows
?>

<?php get_template_part('template-parts/flexTemplate/side' , 'bar');?>


<?php
		endwhile; // While has sidebar content
	endif; // If has sidebar content
?>

	</div>
			
</div>


<?php get_footer(); ?>
<?php
/**
 * The main template file
 *
 * @package SKY
 * @since SKY 1.0.0
 */
get_header(); ?>
<!-- PAGE - FLEXIBLE CONTENT CHECK -->
<?php
	if( have_rows('flexible_content', get_option('page_for_posts'))): // Check if any content exists
	while ( have_rows('flexible_content', get_option('page_for_posts')) ) : the_row(); // Loop through content rows
?>

<?php get_template_part('template-parts/flexTemplate/one' , 'column');?>
<?php get_template_part('template-parts/flexTemplate/two' , 'column');?>
<?php get_template_part('template-parts/flexTemplate/three' , 'column');?>

<?php
		endwhile; // While has flexible content
	endif; // If has content
?>

<?php 
	$the_url = $_SERVER['PHP_SELF'];
	$the_title = get_the_title(); 
?>
<div class="row">
	<div class="small-12 medium-12 large-12 column blog-pad">
		<h1 class="blogHeadline blue">Newsroom - <?php single_cat_title( __( '', 'textdomain' ) ); ?></h1>
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
				  		<a href="<?php the_permalink();?>">
								  <div class="wrap-img-blog">
								  <?php if ( has_post_thumbnail() ):?>
								  <?php the_post_thumbnail('medium', array('class' => 'alignleft')); ?>
								  <?php else:?>
								  <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/08/fpo-single-640x300.jpg" class="alignleft" />
								  <?php endif;?>
								  </div>
						</a>
					  	
						<a href="<?php the_permalink();?>"><h2 class="articleTitle"><?php the_title(); ?></h2></a>
						<h3 class="articleSub"><?php echo the_time(get_option('date_format'));?>&nbsp;•&nbsp;<?php the_author();?><!--&nbsp;<span class="hide-for-small-only">•</span>&nbsp;<?php// the_category();?>--></h3>
						
						<?php the_excerpt();?>
						<div class="blog-readmore" style="position:relative;">
							<a class="read-more button" href="<?php the_permalink();?>">Read More</a>
						</div>
						<hr>
					</div>
				</div>
			  		
						
				<?php endwhile; // end while
				endif;?>
				<?php sky_page_navi(); ?>
						
	</div><!--CLOSING ON large-7 columns-->		
		
	<div class="small-12 medium-12 large-4 columns cta cta-nopad">
		
<?php
	if( have_rows('sidebar_content', get_option('page_for_posts'))): // Check if any content exists
	while ( have_rows('sidebar_content', get_option('page_for_posts')) ) : the_row(); // Loop through content rows
?>

<!-- 1 COLUMN LAYOUT -->
<?php get_template_part('template-parts/flexTemplate/side' , 'bar');?>


<?php
		endwhile; // While has sidebar content
	endif; // If has sidebar content
?>

	</div>
			
</div><!--ROW FOR BLOG POSTS-->	


<?php get_footer(); ?>
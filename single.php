<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Sky
 * @since Sky 1.0.0
 */

get_header(); ?>
<?php 
	$the_url = $_SERVER['PHP_SELF'];
	$the_title = get_the_title(); 
?>

<div id="single-post" role="main">
<?php while ( have_posts() ) : the_post(); // End of the loop. ?>
	<?php get_template_part( 'template-parts/featured-image' ); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<div class="row all-pad blog-pad">
			<div class="small-12 medium-2 large-2 column" data-sticky-container>
				<div class="sticky back-pad" data-sticky data-anchor="foo">
					<a href="<?php echo get_site_url(); ?>/blog/" class="bkbutn"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back to Blog</a>
				</div>
			</div>
			<div class="small-12 medium-10 large-8 column" id="foo">
				<?php get_template_part('inc/posts/featured' , 'image');?>
				<header>
					<?php if(get_field('show_date', get_option('page_for_posts'))):?><?php echo the_time(get_option('date_format'));?><?php endif;?>
					<h1 class="articleTitle">
						<?php the_title();?>
					</h1>
				</header>
				<body>
					
					<?php the_content(); ?>
				</body>
				<footer>
					<p class="blog-details">
						<?php if(get_field('show_author', get_option('page_for_posts'))):?><?php the_author();?> &nbsp;•&nbsp; <?php endif;?>
    <?php if(get_field('show_category', get_option('page_for_posts'))):?><?php the_category(', '); ?><?php endif;?>
					</p>
				</footer>
			</div>
			<div class="small-0 medium-0 large-2 column">
			</div>
		</div>
<?php endwhile;
// end of the loop.
?>
	</article>
</div>
<?php get_footer();
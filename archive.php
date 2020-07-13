<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sky
 * @since Sky 1.0.0
 */

get_header(); ?>
<div class="row"  id="page" role="main">
	<?php if(get_field('activate_sidebar', get_option('page_for_posts'))):?>
        <div class="small-12 medium-12 large-8 column blog-pad" id="bstuff" role="main">
    <?php else:?>
        <div class="small-12 medium-12 large-12 columns" role="main">
    <?php endif;?>
	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_post_format(); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php /*?><?php get_template_part( 'template-parts/content', 'none' ); ?><?php */?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'sky_pagination' ) ) :
			sky_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'sky' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'sky' ) ); ?></div>
			</nav>
		<?php endif; ?>

	</article>
	<!--Sidebar-->
     <?php if(get_field('activate_sidebar', get_option('page_for_posts'))):?>
    	 <div class="small-12 medium-12 large-4 columns">
            <?php get_template_part('inc/posts/side' , 'bar');?>
	    </div>
    <?php else:?>
    	</div>
    <?php endif;?>   

</div>

<?php get_footer();

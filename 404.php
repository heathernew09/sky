<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Sky
 * @since Sky 1.0.0
 */

get_header(); ?>

<div class="row">
	<?php if(get_field('activate_sidebar', get_option('page_for_posts'))):?>
        <div class="small-12 medium-12 large-8 column blog-pad" id="bstuff" role="main">
    <?php else:?>
        <div class="small-12 medium-12 large-12 columns" role="main">
    <?php endif;?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php _e( '404', 'sky' ); ?></h1>
				<h2 class="entry-subtitle"><?php _e( 'The page probably changed.', 'sky' ); ?></h2>
				<h3 class="entry-subsubtitle"><?php _e( 'Try the search.', 'sky' ); ?></h3>
			</header>
			<div class="entry-content">
				<div class="error">
					<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                        <input type="text" placeholder="Search">
                	</form>
					<p class="bottom"><?php _e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'sky' ); ?></p>
				</div>
				<p><?php _e( 'Please try the following:', 'sky' ); ?></p>
				<ul>
					<li><?php _e( 'Check your spelling', 'sky' ); ?></li>
					<li><?php printf( __( 'Return to the <a href="%s">home page</a>', 'sky' ), home_url() ); ?></li>
					<li><?php _e( 'Click the <a href="javascript:history.back()">Back</a> button', 'sky' ); ?></li>
				</ul>
			</div>
		</article>

	</div>
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

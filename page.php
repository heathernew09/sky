<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package Sky
 * @since Sky 1.0.0
 */

 get_header(); ?>
<div class="row">
	<?php if(get_field('activate_sidebar', get_option('page_for_posts'))):?>
        <div class="small-12 medium-12 large-8 column" role="main">
    <?php else:?>
        <div class="small-12 medium-12 large-12 columns" role="main">
    <?php endif;?>
	 
<?php /*?> <?php do_action( 'sky_before_content' ); ?>
<?php */?>
   <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
       <header>
           <!--IF is home page-->
			<?php if( is_front_page()):?>
                <?php get_template_part('inc/home/homeHero');?>
            <!--Else this-->
            <?php else:?>
                <?php get_template_part('inc/pages/pageHero');?>
            <?php endif;?>
       </header>
       <?php /*?><?php do_action( 'sky_page_before_entry_content' ); ?><?php */?>
       
           <?php
				if( have_rows('layout_options')): // Check if any content exists
				while ( have_rows('layout_options')) : the_row(); // Loop through content rows
			?>
			<?php get_template_part('template-parts/cloneTemplate/one' , 'clone');?>
			<?php get_template_part('template-parts/cloneTemplate/two' , 'clone');?>
			<?php get_template_part('template-parts/cloneTemplate/three' , 'clone');?>
			<?php get_template_part('template-parts/cloneTemplate/four' , 'clone');?>
			
			<?php
					endwhile; // While has flexible content
				endif; // If has content
			?>
					   <?php edit_post_link( __( 'Edit', 'sky' ), '<span class="edit-link">', '</span>' ); ?>
       
       <footer>
           <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'sky' ), 'after' => '</p></nav>' ) ); ?>
           <p><?php the_tags(); ?></p>
       </footer>
       
   </article>
	<!--Sidebar-->
     <?php if(get_field('activate_sidebar', get_option('page_for_posts'))):?>
		</div>
		<div class="small-12 medium-12 large-4 columns">
            <?php get_template_part('inc/posts/side' , 'bar');?>
	    </div>
	</div>
    <?php else:?>
    	</div>
	</div>
    <?php endif;?>   

 <?php /*?><?php do_action( 'sky_after_content' ); ?><?php */?>


 <?php get_footer();

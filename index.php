<?php
/**
 * The main template file
 *
 * @package SKY
 * @since SKY 1.0.0
 */
get_header(); ?>

<?php get_template_part('inc/posts/blogHero');?>

<div class="row <?php if(get_field('full_width_blog', get_option('page_for_posts'))):?>expanded<?php endif;?>">
	<div class="small-12 medium-12 large-12 column">
    	<?php if ( $blog_title = get_field( 'blog_title', get_option('page_for_posts'))) : ?>
        	<h1 class="blogHeadline"><?php echo esc_html( $blog_title ); ?></h1>
		<?php else: ?>
			<h1 class="blogHeadline"><?php echo single_post_title();?></h1>
        <?php endif; ?>
        <?php if ( $introduction = get_field( 'introduction', get_option('page_for_posts'))) : ?>
			<?php echo $introduction; ?>
        <?php endif; ?>
	</div>
</div>
<?php
		// Include Header from ACF Options page
		$smpts_postNum = get_field('blog_option', get_option('page_for_posts'));
		include_once'inc/posts/blog'.$smpts_postNum.'.php';
?>
<?php get_footer(); ?>
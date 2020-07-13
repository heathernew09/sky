<?php
/**
 * Header template
 *
 * @package SKY
 * @since SKY 1.0.0
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- FONTS -->
		<?php 
			if ( get_field('typekit', 'option') ) {
				echo "<!-- Typekit -->"; 
				the_field("typekit", 'option'); 
			}
			if ( get_field('google_fonts', 'option') ) { 
				echo "<!-- Google Fonts -->";
				the_field("google_fonts", 'option'); 
			}
		?>
		<?php wp_head(); ?>
		<!--GOOGLE ANALYTICS -->
		<script>
			 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			 ga('create', '<?php the_field('google_analytics', 'option'); ?>', 'auto');
			 ga('send', 'pageview');
		</script>
        
	</head>

	<body <?php body_class(); ?>>
	<?php if (get_field('mobile_navigation', 'option') == '2'): ?> <!-- Off canvas menu -->
		<div class="off-canvas-wrapper">
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
					<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
					<div class="off-canvas-content" data-off-canvas-content>
	<?php endif; ?>



	<?php
		// Include Header from ACF Options page
		$smpts_headNum = get_field('header_opt', 'option');
		include_once'inc/headers/header'.$smpts_headNum.'.php';
		include_once'assets/css/header'.$smpts_headNum.'.css';
	?>
<?php
/**
 * Footer template
 *
 * @package SKY
 * @since SKY 1.0.0
 */
?>

<?php
  // Include HTML/CSS footer
  $footNum = get_field('footer_opt', 'option');
  include_once'inc/footers/footer'.$footNum.'.php';
  include_once'assets/css/footer'.$footNum.'.css';
?>

<?php wp_footer(); ?>

</body>
</html>
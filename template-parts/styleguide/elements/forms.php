<?php
// forms layout
	if( get_row_layout() == 'forms' ) { 
?>
<?php if ( have_rows( 'form' ) ) : ?>
	<?php while ( have_rows( 'form' ) ) :
		the_row(); ?>
		
		<?php if ( $label = get_sub_field( 'label' ) ) : ?>
			<?php echo esc_html( $label ); ?>
		<?php endif; ?>

		<?php
		$screenshot = get_sub_field( 'screenshot' );
		if ( $screenshot ) : ?>
			<img src="<?php echo esc_url( $screenshot['url'] ); ?>" alt="<?php echo esc_attr( $screenshot['alt'] ); ?>" />
		<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>
<?php };?>
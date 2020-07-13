<?php
/**
 * Theme specific functions. ACF Admin adjustments
 *
 * @package SKY
 * @since SKY 1.0.0
 */
function my_acf_admin_head() {
?>
<style type="text/css">

    .acf-flexible-content .layout .acf-fc-layout-handle {
        /*background-color: #00B8E4;*/
        background-color: #202428;
        color: #eee;
    }

    .acf-repeater.-row > table > tbody > tr > td,
    .acf-repeater.-block > table > tbody > tr > td {
        border-top: 2px solid #202428;
    }

    .acf-repeater .acf-row-handle {
        vertical-align: top !important;
        padding-top: 16px;
    }

    .acf-repeater .acf-row-handle span {
        font-size: 20px;
        font-weight: bold;
        color: #202428;
    }

    .imageUpload img {
        width: 75px;
    }

    .acf-repeater .acf-row-handle .acf-icon.-minus {
        top: 30px;
    }

</style>
<?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');


/*FUNCTION ADDS THE TITLE AND ALT ATTRIBUTE TO the_post_thumbnail();*/
function isa_add_img_title( $attr, $attachment = null ) {
 
    $img_title = trim( strip_tags( $attachment->post_title ) );
 
    $attr['title'] = the_title_attribute( 'echo=0' );
    $attr['alt'] = the_title_attribute( 'echo=0' );
 
    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes','isa_add_img_title', 10, 2 );
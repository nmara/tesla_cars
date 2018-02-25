<?php
if ( is_user_logged_in() ) {
    $url = "http://localhost/pricing-table-tesla/index.php/profile/";
    wp_safe_redirect( $url, "302");
} else {
    get_header(); ?>
    <div class="container">
            <?php echo do_shortcode("[wppb-login]"); ?>
    </div>
<?php } ?>


<?php get_footer(); ?>

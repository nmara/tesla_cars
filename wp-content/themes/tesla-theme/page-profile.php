<?php get_header(); ?>

<div class="container">

    <div class="log-info">
        <?php echo do_shortcode("[wppb-login]"); ?>
    </div>

    <div class="user-action">
        <a href="http://localhost/pricing-table-tesla/index.php/posts-list/" class="user-action__box edit-car">
            Modify tesla cars
        </a>
        <a href="http://localhost/pricing-table-tesla/index.php/add-post/" class="user-action__box add-new-car">
            Add a new tesla car
        </a>
    </div>

</div>

<?php get_footer(); ?>

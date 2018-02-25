<?php get_header(); ?>

<div class="container">

    <div class="log-info">
        <?php echo do_shortcode("[wppb-login]"); ?>
    </div>

    <div class="user-action">
        <div class="user-action__add-new-car">
            <a href="http://localhost/pricing-table-tesla/index.php/add-post/" class="user-action_add-new-car__btn">Add a new tesla car</a>
        </div>
        <div class="user-action__edit-car">
            <a href="http://localhost/pricing-table-tesla/index.php/posts-list/">Modify tesla cars</a>
        </div>
    </div>

</div>

<?php get_footer(); ?>

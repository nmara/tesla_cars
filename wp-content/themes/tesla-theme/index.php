<?php get_header(); ?>

<section id="tesla-cars">

    <div class="tesla-cars container">

        <?php if ( have_posts() ) :
        while (	have_posts() ) :
        the_post(); ?>

        <?php $features = get_post_meta( get_the_ID(), 'feature' ); ?>
        <?php $button_label = get_post_meta( get_the_ID(), 'button-label', true ); ?>
        <?php $additional_info = get_post_meta( get_the_ID(), 'additional-info', true ); ?>
        <?php $price = get_post_meta( get_the_ID(), 'price', true ); ?>



        <!-- <div class="pricing-table" id="post-&gt;""> -->
        <div <?php post_class("pricing-table"); ?>>

            <div class="pricing-table__header">
                <h2 class="model-title"> <?php the_title(); ?> </h2>
                <div class="separation"></div>
                <?php the_post_thumbnail(); ?>
            </div>

            <div class="pricing-table__content">

                <?php
                foreach ($features as $value) {
                    echo "<p class='pricing-table__content__features'>$value</p>";
                }
                ?>

                <div class="separation"></div>

                <?php if ( ! empty( $additional_info ) ) { ?>
                    <p class="pricing-table__content__add-info-or-price"><?php echo $additional_info ?></p>
                <?php } ?>

                <?php if ( ! empty( $price ) ) { ?>
                    <p class="pricing-table__content__add-info-or-price"><?php echo $price ?></p>
                <?php } ?>

                <a href="#" class="pricing-table__btn"><?php echo $button_label ?></a>

            </div>

        </div>
    <?php endwhile; ?>
    <?php else: ?>
        <p>Nie	ma	takiego	postu</p>
    <?php endif; ?>
    </div>

</section>

<?php get_footer(); ?>

<?php get_header(); ?>

<section id="tesla-cars">

    <div class="tesla-cars container">

        <?php if ( have_posts() ) :
        while (	have_posts() ) :
        the_post(); ?>

        <?php $feature = get_post_meta( get_the_ID(), 'feature', true ); ?>
        <?php $feature2 = get_post_meta( get_the_ID(), 'feature-2', true ); ?>
        <?php $feature3 = get_post_meta( get_the_ID(), 'feature-3',true ); ?>
        <?php $additional_info = get_post_meta( get_the_ID(), 'additional-info', true ); ?>
        <?php $price = get_post_meta( get_the_ID(), 'price', true ); ?>
        <?php $button_label = get_post_meta( get_the_ID(), 'button-label', true ); ?>
        <?php $thumbnail = get_field('thumbnail'); ?>

        <div <?php post_class("pricing-table"); ?>>

            <div class="pricing-table__header">
                <h2 class="model-title"> <?php the_title(); ?> </h2>
                <div class="separation"></div>
                <?php if( $thumbnail ): ?>
			<img class="thumbnail" src="<?php echo $thumbnail; ?>" />
		<?php endif; ?>
            </div>

            <div class="pricing-table__content">

                <p class='pricing-table__content__features'><?php echo $feature ?></p>
                <p class='pricing-table__content__features'><?php echo $feature2 ?></p>
                <p class='pricing-table__content__features'><?php echo $feature3 ?></p>

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
    <?php endif; ?>
    </div>

</section>

<?php get_footer(); ?>

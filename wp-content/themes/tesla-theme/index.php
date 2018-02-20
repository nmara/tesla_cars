<?php get_header(); ?>

<section id="tesla-cars">

    <div class="tesla-cars container">

        <?php if ( have_posts() ) :
        while (	have_posts() ) :
        the_post(); ?>

        <?php $features = get_post_meta( get_the_ID(), 'feature' ); ?>
        <?php $button_label = get_post_meta( get_the_ID(), 'button-label', true ); ?>
        <?php $additional_info = get_post_meta( get_the_ID(), 'additional-info', true ); ?>
        <div class="pricing-table">

            <div class="pricing-table__header">
                <h2 class="model-title"> <?php the_title(); ?> </h2>
                <div class="separation"></div>
                <?php the_post_thumbnail(); ?>
				<!-- <img
				src="<?php	echo	$img['url'];	?>"
				alt="<?php	echo	$img['alt'];	?>"> -->
            </div>

            <div class="pricing-table__content">
                <p class="pricing-table__content__features">
                    <?php
                    foreach ($features as $value) {
                        echo "$value <br>";
                    }
                    ?>
                </p>
                <div class="separation"></div>
                <p class="pricing-table__content__add-info"><?php echo $additional_info ?></p>
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

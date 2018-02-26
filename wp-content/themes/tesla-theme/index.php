<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
<?php echo get_bloginfo('name'); ?>
</title>
<?php wp_head(); ?>
<style media="screen">
@media only screen and (max-width: 1200px) {
    body {
        background-image: none;
        background-color: darken(#f8f9f9, 5%);
        /*height: auto;*/
    }
    .wrap {
        height: 100%;
        min-height: 100%;
    }
}
@media only screen and (min-height: 700px) {
    html {
        height: auto;
        min-height: 100%;
    }

    body {
        background-image: none;
        background-color: darken(#f8f9f9, 5%);
        height: auto;
        min-height: 100%;
    }

    .wrap {
        height: 100%;
        min-height: 100%;
    }
    .tesla-cars {
        height: 100%;
    }

    .footer__container {
        position: sticky;
        bottom: 0;

    }
}
</style>
</head>
<body>
    <header>
		<div class="header__container">
			<div class="header__content container">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="tesla logo" class="header__logo"/>

				<div class="header__nav">
					<div id="nav-icon">
					  <span></span>
					  <span></span>
					  <span></span>
					</div>

                    <div class="header__nav__menu" id="header-nav-menu">
                        <ul class="header__nav__menu__bar">
                            <li><a href="http://localhost/pricing-table-tesla/">Catalog</a></li>
                            <li><a href=" http://localhost/pricing-table-tesla/index.php/profile/">Manage cars</a></li>
                            <li><a href=" http://localhost/pricing-table-tesla/index.php/log-in/">Log in</a></li>
                            <li><a href="http://localhost/pricing-table-tesla/index.php/register/">Sign up</a></li>
                        </ul>
                    </div>
				</div>
			</div>
		</div>
	</header>
    <div class="wrap">

<section id="tesla-cars">

    <div class="tesla-cars container">

    <?php
    $qry =	new	WP_Query([
		'post_type'	=> 'post',
		'posts_per_page' =>	3,
		'orderby' => 'date',
		'order'	=> 'DESC',
    ]); ?>

        <?php if ( $qry->have_posts() ) :
        while (	$qry->have_posts() ) :
        $qry->the_post(); ?>

        <?php $feature = get_post_meta( get_the_ID(), 'feature', true ); ?>
        <?php $feature2 = get_post_meta( get_the_ID(), 'feature-2', true ); ?>
        <?php $feature3 = get_post_meta( get_the_ID(), 'feature-3',true ); ?>
        <?php $additional_info = get_post_meta( get_the_ID(), 'additional-info', true ); ?>
        <?php $price = get_post_meta( get_the_ID(), 'price', true ); ?>
        <?php $button_label = get_post_meta( get_the_ID(), 'button-label', true ); ?>
        <?php $thumbnail = get_field('thumbnail'); ?>

        <?php if ( get_field( 'premium' ) ): ?>
            <div class="pricing-table category-premium">
        <?php else: // field_name returned false ?>
            <div class="pricing-table">
        <?php endif; // end of if field_name logic ?>

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
    <?php wp_reset_postdata(); ?>
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>


    </div>

</section>

<?php get_footer(); ?>

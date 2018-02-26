<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
<?php echo get_bloginfo('name'); ?>
</title>
<?php wp_head(); ?>
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

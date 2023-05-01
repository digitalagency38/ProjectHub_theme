<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ProjectHub
 */
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/style.css">
    <script src="<?php echo get_theme_file_uri(); ?>/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/slick.min.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/main.js"></script>
</head>
<body class="<?php if(is_page_template( 'wp_index.php' )): ?> foot_block main_page<?php endif ?><?php if(is_page_template( 'wp_text.php' )): ?> txt_page<?php endif ?>">
    <div class="wrapper">
        <div class="site-panel-wrap">
            <div class="burger-wrap">
                <div class="burger-btn"></div>
                <div class="burger-body">
                    <div class="burger-close-btn"></div>
                    <nav class="burger-body__menu">
						<?php
							wp_nav_menu(
								array(
									'menu'            => 'Меню в шапке',
									'theme_location'  => '',
									'container'       => 'ul'
								)
							);
						?>
						<?php
							wp_nav_menu(
								array(
									'menu'            => 'Меню Полезное',
									'theme_location'  => '',
									'container'       => 'ul'
								)
							);
						?>
						<?php
							wp_nav_menu(
								array(
									'menu'            => 'Меню Пользователям',
									'theme_location'  => '',
									'container'       => 'ul'
								)
							);
						?>
                    </nav>
                </div>
            </div>
        </div>
        <header class="header">
            <div class="header__in center_block">
                <a href="/" class="header__logo">
					<?php
						if ( has_custom_logo() ) {
							echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
						}
					?>
				</a>
                <nav class="header__menu">
					<?php
						wp_nav_menu(
							array(
								'menu'            => 'Меню в шапке',
								'theme_location'  => '',
								'container'       => 'ul'
							)
						);
					?>
                </nav>
                <a href="<?= get_option('site_link'); ?>" target="_blank" class="header__btn"><span>попробовать</span></a>
            </div>
        </header>
        <main class="content">
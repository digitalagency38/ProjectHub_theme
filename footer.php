<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ProjectHub
 */
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>

        </main>
        <footer class="footer">
            <div class="footer__top center_block">
                <div class="footer__l-side">
                    <a href="/" class="footer__logo">
						<?php
							if ( has_custom_logo() ) {
								echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
							}
						?>
					</a>
                    <div class="footer__subtitle"><?= get_option('subtitle'); ?></div>
                </div>
                <nav class="footer__menu">
                    <div class="footer__menu--title">Полезное</div>
					<?php
						wp_nav_menu(
							array(
								'menu'            => 'Меню Полезное',
								'theme_location'  => '',
								'container'       => 'ul'
							)
						);
					?>
                </nav>
                <nav class="footer__menu">
                    <div class="footer__menu--title">Пользователям</div>
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
                <div class="footer__pic"><img src="<?php echo get_theme_file_uri(); ?>/img/foot__pic.svg" alt=""></div>
            </div>
            <div class="footer__bottom">
                <div class="footer__in center_block">
                    <div class="footer__copy"><?= get_option('copy'); ?></div>
                    <a href="<?= get_option('link_politic'); ?>" class="footer__link">Политика конфиденциальности</a>
                    <a href="<?= get_option('link_oferta'); ?>" class="footer__link">Публичная оферта</a>
                    <div class="footer__pays">
                        <div class="footer__pay"><img src="<?php echo get_theme_file_uri(); ?>/img/pay1.svg" alt=""></div>
                        <div class="footer__pay"><img src="<?php echo get_theme_file_uri(); ?>/img/pay2.svg" alt=""></div>
                        <div class="footer__pay"><img src="<?php echo get_theme_file_uri(); ?>/img/pay3.svg" alt=""></div>
                        <div class="footer__pay"><img src="<?php echo get_theme_file_uri(); ?>/img/pay4.svg" alt=""></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<?php wp_footer();?>
</body>
</html>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mytheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mytheme' ); ?></a>

    <header id="js-header" class="l-header is-home" data-headerfixed="false">
        <?php
        if ( is_front_page() && is_home() ) :
            ?>
            <div class="l-header__body">
                <h1 class="l-header__title">
                    <a class="c-logo" href="https://pot2020.work/">
                        <img src="<?php echo  the_custom_logo() ?>" alt="<?php bloginfo( 'name' ); ?>">
                    </a>
                </h1><!-- /.l-header__title -->

                <nav class="l-header__nav">
                    <ul class="header-nav">
                        <li class="header-nav__item gn-about">
                            <a href="https://pot2020.work/about/" class="c-text-link js-location">
                                ABOUT                    </a>
                        </li>

                        <li class="header-nav__item gn-service">
                            <a href="https://pot2020.work/service/" class="c-text-link js-location">
                                SERVICE                    </a>
                        </li>

                        <li class="header-nav__item gn-case">
                            <a href="https://pot2020.work/case/" class="c-text-link js-location">
                                CASE                    </a>
                        </li>

                        <li class="header-nav__item gn-aboutaccess">
                            <a href="https://pot2020.work/about/#access" class="c-text-link js-location">
                                ACCESS                    </a>
                        </li>

                        <li class="header-nav__item gn-blog">
                            <a href="https://pot2020.work/blog/" class="c-text-link js-location">
                                BLOG                    </a>
                        </li>

                        <li class="header-nav__item gn-faq">
                            <a href="https://pot2020.work/faq/" class="c-text-link js-location">
                                FAQ                    </a>
                        </li>

                        <li class="header-nav__item gn-contact">
                            <a href="https://pot2020.work/contact/" class="c-text-link js-location">
                                CONTACT                    </a>
                        </li>
                    </ul>
                </nav><!-- /.st-header-nav -->



                <div class="l-header__sns">
                    <ul class="header-sns">
                        <li class="header-sns__item">
                            <a href="https://www.instagram.com/kabusikipot/" class="c-sns-link" target="_blank" rel="nofollow noopener">
                                <span class="fab fa-instagram" aria-label="Instagram"></span>
                            </a>
                        </li>
                    </ul><!-- /.header-sns -->
                </div><!-- /.l-header__sns -->
                <p class="l-header__contact">
                    <a href="https://pot2020.work/contact/" class="l-header__contact_btn"><span class="far fa-envelope" aria-label="メールでのお問い合わせ"></span></a>
                </p><!-- /.l-header__button -->
                <p class="l-header__tel">
                    <a href="tel:0267-46-8073" class="l-header__tel_btn"><span class="fas fa-phone" aria-label="お電話でのお問い合わせ"></span></a>
                </p><!-- /.l-header__button -->
                <div class="l-header__button">
                    <button class="header-menu-button js-menu-toggle" type="button" aria-expanded="false" aria-controls="js-drawer-menu" aria-label="メニューを開く場合はこちらです">
                        <span class="header-menu-button__line"></span>
                        <span class="header-menu-button__line"></span>
                        <span class="header-menu-button__line"></span>
                    </button><!-- /.st--menu-button -->
                </div><!-- /.l-header__button -->
            </div><!-- /.l-header__body -->
        <?php
        else :
            ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php
        endif;
        $mytheme_description = get_bloginfo( 'description', 'display' );
        if ( $mytheme_description || is_customize_preview() ) :
            ?>
            <p class="site-description"><?php echo $mytheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
        <?php endif; ?>






    </header>
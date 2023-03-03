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
    <link rel='stylesheet'  href='https://use.fontawesome.com/releases/v5.6.1/css/all.css?ver=1677730144' media='all'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mytheme' ); ?></a>
    <header id="js-header" class="l-header is-home" data-headerfixed="false">
        <div class="l-header__body">

            <h1 class="l-header__title">
                <?php
                if (function_exists('change_logo_class')) {
                    echo get_custom_logo();
                } ?>
<!--                <a class="c-logo" href="https://pot2020.work/">-->
<!--                    <img src="https://pot2020.work/wp-content/uploads/2021/10/logo-4.png" alt="株式会社POT"-->
<!--                         class="c-logo__img">-->
<!--                </a>-->
            </h1><!-- /.l-header__title -->
            <?php echo get_template_part('template-parts/menu/menu', 'home') ?>

        </div><!-- /.l-header__body -->
        <?php echo get_template_part('template-parts/menu/menu', 'mobile') ?>


    </header>


<?php
function menulvmobile($e)
{
    $menuLocations = get_nav_menu_locations();
    $navbar_items = wp_get_nav_menu_items($menuLocations[$e]);
    $child_items = [];
// pull all child menu items into separate object
    foreach ($navbar_items as $key => $item) {
        if ($item->menu_item_parent) {
            array_push($child_items, $item);
            unset($navbar_items[$key]);
        }
    }

// push child items into their parent item in the original object
    foreach ($navbar_items as $item) {
        foreach ($child_items as $key => $child) {
            if ($child->menu_item_parent == $item->ID) {
                if (!$item->child_items) {
                    $item->child_items = [];
                }

                array_push($item->child_items, $child);
                unset($child_items[$key]);
            }
        }
    }

// return navbar object where child items are grouped with parents
    return $navbar_items;
}

$menus = menulvmobile('headerMenu');
$custom_logo_id = get_theme_mod( 'custom_logo' ); // Lấy ID của logo được thiết lập trong Customizer
$logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' ); // Lấy URL của logo từ ID

?>
<div class="header-sp-nav">
    <div class="header-sp-nav__header">
        <div class="header-sp-nav__logo c-logo">
            <a href="<?php home_url() ?>"><img src="<?= $logo_url ?>"
                                                 alt="" class="c-logo__img"></a>
        </div>
        <div class="header-sp-nav__close js-menu-toggle">
            <span class="header-sp-nav__close-txt">CLOSE</span>
            <span class="header-sp-nav__close-cross"></span>
        </div>
    </div>


    <div class="header-sp-nav__inner">

        <nav class="header-sp-nav__wrap">
            <ul class="header-sp-nav__list">
                <?php foreach ($menus as $navItem) { ?>
                <li class="header-sp-nav__item">
                    <a href="<?= $navItem->url ?>" class="c-text-link js-location">
                        <?= $navItem->title ?> </a>
                </li>
                <?php } ?>
            </ul>
        </nav><!-- /.header-sp-nav__wrap -->
        <div class="header-sp-sns__wrap">
            <ul class="header-sp-sns__list">
                <li class="header-sp-sns__item -head">
                    <p>FOLLOW US:</p>
                </li>

                <li class="header-sp-sns__item">
                    <?php $social_network = get_field('social_network', 'option');
                    if ($social_network) {
                    ?>
                    <a href="<?= $social_network ?>" class="c-sns-link" target="_blank"
                       rel="nofollow noopener">
                        <span class="fab fa-instagram" aria-label="Instagram"></span>
                    </a>
                    <?php } ?>
                </li>
            </ul><!-- /.header-sp-sns -->
        </div><!-- /.header-sp-sns__wrap -->
    </div><!-- /.header-sp-nav__inner -->
</div><!-- /.header-sp-nav -->
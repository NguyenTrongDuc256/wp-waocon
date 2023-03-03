<?php
function menunlv($e)
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

$menus = menunlv('headerMenuLocation');
//echo '<pre>';
//print_r($menus);
//echo '</pre>';
?>
<nav class="l-header__nav">
    <ul class="header-nav">
        <?php foreach ($menus as $navItem) { ?>
        <li class="header-nav__item gn-about">
            <a href="<?= $navItem->url ?>" class="c-text-link js-location <?= $navItem->title ?>">
                <?= $navItem->title ?> </a>
        </li>
        <?php } ?>

    </ul>
</nav><!-- /.st-header-nav -->


<div class="l-header__sns">
    <ul class="header-sns">
        <li class="header-sns__item">
            <?php $my_text_input_value = get_option( 'my_text_input' ); ?>
            <a href="<?php echo $my_text_input_value ?>" class="c-sns-link" target="_blank"
               rel="nofollow noopener">
                <span class="fab fa-instagram" aria-label="Instagram"></span>
            </a>
        </li>
    </ul><!-- /.header-sns -->
</div><!-- /.l-header__sns -->
<p class="l-header__contact">
    <a href="https://pot2020.work/contact/" class="l-header__contact_btn"><span class="far fa-envelope"
                                                                                aria-label="メールでのお問い合わせ"></span></a>
</p><!-- /.l-header__button -->
<p class="l-header__tel">
    <a href="tel:0267-46-8073" class="l-header__tel_btn"><span class="fas fa-phone"
                                                               aria-label="お電話でのお問い合わせ"></span></a>
</p><!-- /.l-header__button -->
<div class="l-header__button">
    <button class="header-menu-button js-menu-toggle" type="button" aria-expanded="false"
            aria-controls="js-drawer-menu" aria-label="メニューを開く場合はこちらです">
        <span class="header-menu-button__line"></span>
        <span class="header-menu-button__line"></span>
        <span class="header-menu-button__line"></span>
    </button><!-- /.st--menu-button -->
</div><!-- /.l-header__button -->


<?php
//echo '<pre>';
//print_r($args);
//echo '</pre>';
if (isset($args) && $args) { ?>
<div class="about-header d-flex justify-content-space-between align-items-center">
    <div class="about-header__headline">
        <h1 class="c-heading-1">
            <span class="c-heading-1__large-text u-uppercase "><?= $args['title_about_en'] ?>.</span>
            <span class="c-heading-1__small-text"><?= $args['title_about_jpn'] ?></span>
        </h1><!-- /.c-heading-1 -->
    </div><!-- /.about-header__headline -->
    <div class="about-header__vertical-text">
        <p class="c-vertical-text"><?= $args['title_about_en'] ?></p>
    </div><!-- /.about-header__vertical-text -->
</div>
<?php } ?>
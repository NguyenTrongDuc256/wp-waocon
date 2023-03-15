<?php
//echo '<pre>';
//print_r($args);
//echo '</pre>';
//$current_url = get_permalink();
//echo $current_url;

?>
<section id="<?= strtolower(str_replace(" ", "", $args['heading_1_en'] )) ?>" class="section__about--1" style="background-image: url(<?php echo wp_get_attachment_image_src($args['background_img'], "full")[0] ?>)">
    <div class="section__about--contents">
        <h2 class="c-heading-2">
            <span class="c-heading-2__large-text"><?= $args['heading_1_en'] ?></span> <span
                    class="c-heading-2__small-text"><?= $args['heading_1_jpn'] ?></span></h2>
        <div class="section__about--detail">
            <div class="company-philosophy-about__contents">
                <div class="company-philosophy-about__lead">
                    <div class="company-philosophy-about__headline">
                        <h3 class="c-order-headline">
                            <span class="c-order-headline__title"><?= $args['heading_2'] ?></span>
                        </h3>
                    </div>
                    <div class="company-philosophy-about__catch">
                        <p class="c-catch-text"><?= $args['heading_3'] ?></p>
                    </div>
                </div>
                <div class="company-philosophy-about__desc">
                    <div class="c-paragraph -small">
                        <p>
                            <?= nl2br($args['content_about']) ?>
                        </p>

                    </div>
                </div>
            </div>
            <div class="company-philosophy-about__image"
                 style="background-image:url(<?php echo wp_get_attachment_image_src($args['content_img'], "full")[0] ?>);"></div>
        </div>
    </div>
    <div class="sub-section__vertical-text" aria-hidden="true">
        <p class="c-vertical-text"><?= $args['heading_1_en'] ?></p>
    </div>
</section>


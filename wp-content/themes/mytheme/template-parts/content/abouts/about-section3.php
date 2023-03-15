<?php
//echo '<pre>';
//print_r($args);
//echo '</pre>';
//$current_url = get_permalink();
//echo $current_url;

?>



<section id="<?= strtolower(str_replace(" ", "", $args['heading_1_en'] )) ?>" class="section__about--2 bg-color-4">
    <div class="section__about--contents">
        <div class="d-flex card__box">
            <div class="card__box--left">
                <img src="<?php echo wp_get_attachment_image_src($args['content_img'], "full")[0] ?>" alt="">
            </div>
            <div class="card__box--right">
                <div class="company-philosophy-greeting__summary">
                    <div class="company-philosophy-greeting__headline">

                        <div class="sub-section__headline">
                            <h2 class="c-heading-2">
                                <span class="c-heading-2__large-text"><?= $args['heading_1_en'] ?></span> <span
                                        class="c-heading-2__small-text"><?= $args['heading_1_jpn'] ?></span></h2>
                        </div><!-- /.sub-section__headline -->
                        <h3 class="c-order-headline">
                            <span class="c-order-headline__title"><?= $args['heading_2'] ?></span>
                        </h3>
                    </div><!-- /.company-philosophy-greeting__headline -->
                    <div class="company-philosophy-greeting__desc">
                        <div class="c-paragraph -small">
                            <?= $args['content_about'] ?>
                        </div><!-- /.c-paragraph -->
                    </div><!-- /.company-philosophy-greeting__desc -->
                </div>
            </div>
        </div>
        <div class="sub-section__vertical-text" aria-hidden="true">
            <p class="c-vertical-text"><?= $args['heading_1_en'] ?></p>
        </div>
    </div>
</section>

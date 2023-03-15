<?php
$values = vc_param_group_parse_atts($args['arr_content']);
$image_ids = explode(',', $args['arr_img']);
//echo '<pre>';
//print_r($args);
//echo '</pre>';
//$current_url = get_permalink();
//echo $current_url;

?>

<section id="<?= strtolower(str_replace(" ", "", $args['heading_1_en'])) ?>" class="section__about--3">
    <div class="section__about--contents">
        <h2 class="c-heading-2 sub-section__headline">
            <span class="c-heading-2__large-text"><?= $args['heading_1_en'] ?></span> <span
                    class="c-heading-2__small-text"><?= $args['heading_1_jpn'] ?></span></h2>
        <div class="sub-section__contents">
            <div class="company-profile">
                <div class="company-profile__container">
                    <div class="company-profile__summary">
                        <dl class="c-summary-list">
                            <?php foreach ($values as $key => $value) : ?>
                            <div class="c-summary-list__row">
                                <dt class="c-summary-list__title"><?= $value['title_item'] ?></dt>
                                <dd class="c-summary-list__desc"><?= $value['content_item'] ?></dd>
                            </div>
                            <?php endforeach; ?>
                        </dl><!-- /.c-summary-list -->
                        <p class="refusal"><img src="https://pot2020.work/wp-content/themes/sg096/img/refusal.png" alt=""></p></div><!-- /.company-profile__summary -->
                    <div class="company-profile__image">
                        <div class="company-profile-gallery">
                            <?php foreach ($image_ids as $key => $image_id) { ?>
                            <div class="company-profile-gallery__item">
                                <figure class="c-figure">
                                    <img src="<?php echo wp_get_attachment_image_src($image_id, "full")[0] ?>" alt=""
                                         class="c-figure__img">
                                </figure>
                            </div><!-- /.company-profile-gallery__item -->
                            <?php } ?>
                        </div><!-- /.compan y-profile-gallery -->
                    </div><!-- /.company-profile__image -->
                </div><!-- /.company-profile__container -->
            </div><!-- /.company-profile -->
        </div>
    </div>
</section>
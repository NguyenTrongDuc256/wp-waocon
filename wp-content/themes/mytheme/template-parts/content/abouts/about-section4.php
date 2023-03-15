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

<section class="section__about--3">
    <div class="section__about--contents">
        <h2 class="c-heading-2 sub-section__headline">
            <span class="c-heading-2__large-text">COMPANY <br class="sp">PROFILE</span> <span
                    class="c-heading-2__small-text">会社概要</span></h2>
        <div class="sub-section__contents">
            <div class="company-profile">
                <div class="company-profile__container">
                    <div class="company-profile__summary">
                        <dl class="c-summary-list">
                            <div class="c-summary-list__row">
                                <dt class="c-summary-list__title">会社名</dt>
                                <dd class="c-summary-list__desc">株式会社POT</dd>
                            </div>
                            <div class="c-summary-list__row">
                                <dt class="c-summary-list__title">設立</dt>
                                <dd class="c-summary-list__desc">2020年12月</dd>
                            </div>
                            <div class="c-summary-list__row">
                                <dt class="c-summary-list__title">代表者</dt>
                                <dd class="c-summary-list__desc">小林 洋介</dd>
                            </div>
                            <div class="c-summary-list__row">
                                <dt class="c-summary-list__title">所在地</dt>
                                <dd class="c-summary-list__desc">〒389-0115<br>
                                    長野県北佐久郡軽井沢町追分805-1</dd>
                            </div>
                            <div class="c-summary-list__row">
                                <dt class="c-summary-list__title">電話番号</dt>
                                <dd class="c-summary-list__desc">0267-46-8073</dd>
                            </div>
                            <div class="c-summary-list__row">
                                <dt class="c-summary-list__title">事業内容</dt>
                                <dd class="c-summary-list__desc">建築／インテリアの企画／設計／NCルーター加工／レーザー加工／NCルーターによる家具や什器、外壁材装飾、下地材制作カットや彫刻、切り文字、装飾小屋など</dd>
                            </div>

                        </dl><!-- /.c-summary-list -->
                        <p class="refusal"><img src="https://pot2020.work/wp-content/themes/sg096/img/refusal.png" alt=""></p>                </div><!-- /.company-profile__summary -->
                    <div class="company-profile__image">
                        <div class="company-profile-gallery">
                            <div class="company-profile-gallery__item">
                                <figure class="c-figure">
                                    <img src="https://pot2020.work/wp-content/uploads/2021/10/company_01.jpg" alt="" class="c-figure__img">
                                </figure>
                            </div><!-- /.company-profile-gallery__item -->
                            <div class="company-profile-gallery__item">
                                <figure class="c-figure">
                                    <img src="https://pot2020.work/wp-content/uploads/2021/10/company_02.jpg" alt="" class="c-figure__img">
                                </figure>
                            </div><!-- /.company-profile-gallery__item -->
                        </div><!-- /.company-profile-gallery -->
                    </div><!-- /.company-profile__image -->
                </div><!-- /.company-profile__container -->
            </div><!-- /.company-profile -->
        </div>
    </div>
</section>
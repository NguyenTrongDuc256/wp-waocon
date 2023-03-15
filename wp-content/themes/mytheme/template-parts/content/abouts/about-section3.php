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


<section class="section__about--2 bg-color-4">
    <div class="section__about--contents">
        <div class="d-flex card__box">
            <div class="card__box--left">
                <img src="https://pot2020.work/wp-content/uploads/2021/10/greeting.jpg" alt="">
            </div>
            <div class="card__box--right">
                <div class="company-philosophy-greeting__summary">
                    <div class="company-philosophy-greeting__headline">

                        <div class="sub-section__headline">
                            <h2 class="c-heading-2">
                                <span class="c-heading-2__large-text">GREETING</span> <span
                                        class="c-heading-2__small-text">代表からのご挨拶</span></h2>
                        </div><!-- /.sub-section__headline -->
                        <h3 class="c-order-headline">
                            <span class="c-order-headline__title">自分だけの空間に、<br class="sp">自然素材を活かす。</span>
                        </h3>
                    </div><!-- /.company-philosophy-greeting__headline -->
                    <div class="company-philosophy-greeting__desc">
                        <div class="c-paragraph -small">
                            <p>軽井沢で生まれ育った私は木々の中で深呼吸をすることが好きで、「常に木に囲まれた生活をしたい」と幼い頃から思っていました。<br
                                        class="pc">自然素材に感じられる“温もり感”を求め、自分だけのかけがえのない空間をつくるというのは、いつでも感動するものです。<br>
                                <br>
                                POTでは、木の呼吸を感じながら一つひとつ、丁寧に心を込めて施工・製作を行っております。<br class="pc">この姿勢は一生変わりません。皆様のこだわりを実現していけるよう、コミュニケーションを大切にしていきたいと思っております。
                            </p>
                        </div><!-- /.c-paragraph -->
                    </div><!-- /.company-philosophy-greeting__desc -->
                </div>
            </div>
        </div>
        <div class="sub-section__vertical-text" aria-hidden="true">
            <p class="c-vertical-text">GREETING</p>
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
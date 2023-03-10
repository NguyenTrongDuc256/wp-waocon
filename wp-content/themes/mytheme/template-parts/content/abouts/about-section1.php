<?php
$values = vc_param_group_parse_atts($args['array_tab']);

echo '<pre>';
print_r($values);
echo '</pre>';
//$current_url = get_permalink();
//echo $current_url;
?>

<div class="l-subpage__nav">
    <div class="sub-nav">
        <ul class="sub-nav__list">
            <?php foreach ($values as $key => $item) : ?>
            <li class="sub-nav__item">
                <a href="<?= get_permalink().'#'. $item['id']?>" class="c-text-link u-uppercase">
                    <?= $item['title']?> </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<section class="l-subpage__section -background-theme-color" id="philosophy" style="background-image:url(https://pot2020.work/wp-content/uploads/2021/10/about_bg-3.jpg);background-size: cover;background-position: 50% 100%;">
    <div class="sub-section company-section">
        <div class="sub-section__container">

            <div class="sub-section__headline">
                <h2 class="c-heading-2">
                    <span class="c-heading-2__large-text">PHILOSOPHY</span>               <span class="c-heading-2__small-text">企業理念</span>            </h2>
            </div><!-- /.sub-section__headline -->
            <div class="sub-section__contents">
                <div class="company-philosophy">
                    <section class="company-philosophy__section">
                        <div class="company-philosophy-about">
                            <div class="company-philosophy-about__contents">
                                <div class="company-philosophy-about__lead">
                                    <div class="company-philosophy-about__headline">
                                        <h3 class="c-order-headline">
                                            <span class="c-order-headline__title">株式会社POTについて</span>
                                        </h3>

                                    </div><!-- /.company-philosophy-about__headline -->
                                    <div class="company-philosophy-about__catch">
                                        <p class="c-catch-text">お客様の“想い”を形にする。</p>
                                    </div><!-- /.company-philosophy-about__catch -->
                                </div><!-- /.company-philosophy-about__lead -->
                                <div class="company-philosophy-about__desc">
                                    <div class="c-paragraph -small">
                                        <p>私たちはあなたの「オリジナル」にお応えする木材加工のプロフェッショナルです。家具などはもちろん、住まいのリフォームから外装・店舗・施設まで幅広く対応。木の性質を活かし、お客様のご希望を叶えます。<br>
                                            <br>
                                            自分の家にぴったりの家具に巡り会うのは、まさに至難の業。<br>
                                            壁紙や調度品に調和するものを置きたい…とお考えでしたら、木材について知り尽くしたクリエイターに任せてみませんか？皆様の想いを実現するために、ぜひお手伝いさせてください。</p>
                                    </div>
                                </div><!-- /.company-philosophy-about__desc -->
                            </div><!-- /.company-philosophy-about__contents -->
                            <div class="company-philosophy-about__image" style="background-image:url(https://pot2020.work/wp-content/uploads/2021/10/about_01.jpg)"></div>
                        </div><!-- /.company-philosophy-about -->
                    </section><!-- /.company-philosophy__section -->

                </div><!-- /.company-philosophy -->
            </div><!-- /.sub-section__contents -->
        </div>
        <div class="sub-section__vertical-text" aria-hidden="true">
            <p class="c-vertical-text">PHILOSOPHY</p>
        </div><!-- /.sub-section__vertical-text -->
    </div><!-- /.sub-section -->
</section>

<section class="l-subpage__section -background-pink-color" id="greeting">
    <div class="sub-section company-section">
        <div class="sub-section__container">

            <div class="sub-section__contents">
                <div class="company-philosophy">


                    <section class="company-philosophy__section">
                        <div class="company-philosophy-greeting">
                            <div class="company-philosophy-greeting__contents">
                                <div class="company-philosophy-greeting__image">
                                    <figure class="c-figure">
                                        <img src="https://pot2020.work/wp-content/uploads/2021/10/greeting.jpg" alt="" class="c-figure__img">
                                    </figure>
                                </div><!-- /.company-philosophy-greeting__image -->
                                <div class="company-philosophy-greeting__summary">
                                    <div class="company-philosophy-greeting__headline">

                                        <div class="sub-section__headline">
                                            <h2 class="c-heading-2">
                                                <span class="c-heading-2__large-text">GREETING</span>                             <span class="c-heading-2__small-text">代表からのご挨拶</span>                          </h2>
                                        </div><!-- /.sub-section__headline -->
                                        <h3 class="c-order-headline">
                                            <span class="c-order-headline__title">自分だけの空間に、<br class="sp">自然素材を活かす。</span>
                                        </h3>
                                    </div><!-- /.company-philosophy-greeting__headline -->
                                    <div class="company-philosophy-greeting__desc">
                                        <div class="c-paragraph -small">
                                            <p>軽井沢で生まれ育った私は木々の中で深呼吸をすることが好きで、「常に木に囲まれた生活をしたい」と幼い頃から思っていました。<br class="pc">自然素材に感じられる“温もり感”を求め、自分だけのかけがえのない空間をつくるというのは、いつでも感動するものです。<br>
                                                <br>
                                                POTでは、木の呼吸を感じながら一つひとつ、丁寧に心を込めて施工・製作を行っております。<br class="pc">この姿勢は一生変わりません。皆様のこだわりを実現していけるよう、コミュニケーションを大切にしていきたいと思っております。</p>
                                        </div><!-- /.c-paragraph -->
                                    </div><!-- /.company-philosophy-greeting__desc -->
                                </div><!-- /.company-philosophy-greeting__summary -->
                            </div><!-- /.company-philosophy-greeting__contents -->
                        </div><!-- /.company-philosophy-greeting -->
                    </section><!-- /.company-philosophy__section -->


                </div><!-- /.company-philosophy -->
            </div><!-- /.sub-section__contents -->
        </div>
        <div class="sub-section__vertical-text" aria-hidden="true">
            <p class="c-vertical-text">GREETING</p>
        </div><!-- /.sub-section__vertical-text -->
    </div><!-- /.sub-section -->
</section>
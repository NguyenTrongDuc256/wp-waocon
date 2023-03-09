<?php
//$values = vc_param_group_parse_atts($args['banner']);
$image_ids = explode(',', $args['arr_img']);


$url_link = vc_build_link($args['url']);

//echo '<pre>';
//print_r($args);
//print_r(wp_get_attachment_image( $image_ids[2], 'full' ));
//
//echo '</pre>';
//$img_url = '';
//foreach ($image_ids as $key => $image_id) {
//    $img_url .= wp_get_attachment_image_src($image_id, "full");
//}
//print_r($img_url[0]);
if (isset($args) && $args) { ?>

    <section id="section_01" class="l-home__section">
        <div class="home-intro">
            <div class="home-intro__contents" data-aos="zoom-out-right" data-aos-offset="500" data-aos-duration="800">
                <div class="home-intro__container">
                    <h2 class="home-intro__headline">
                        <span class="c-border-headline">All for customers</span>
                    </h2>
                    <div class="home-intro__desc">
                        <div class="home-intro__desc-container">
                            <div id="js-intro-contents-slide" class="sw-desc-slider swiper-container">
                                <ul class="sw-desc-slider__list swiper-wrapper">
                                    <li class="sw-desc-slider__item swiper-slide">
                                        <div class="sw-desc-slider__container">
                                            <div class="sw-desc-slider__headline">
                                                <h3 class="c-heading-2 -block">
                            <span class="c-heading-2__large-text">
                              <span class="c-reveal-effect -slider">
                                <span class="c-reveal-effect__body"><?php echo $args['title_about_en'] ?></span>
                              </span>
                            </span>
                                                    <span class="c-heading-2__small-text">
                              <span class="c-reveal-effect -slider">
                                <span class="c-reveal-effect__body"><?php echo $args['title_about_jpn'] ?></span>
                              </span>
                            </span>
                                                </h3>
                                            </div>
                                            <div class="sw-desc-slider__paragraph">
                                                <div class="c-paragraph">
                                                    <?php echo $args['content'] ?>
                                                </div>
                                            </div>


                                            <p class="sw-desc-slider__link">
                                                <a href="<?php echo $url_link['url'] ?>"
                                                   class="c-arrow-link u-uppercase">READ
                                                    MORE</a>
                                            </p>

                                        </div><!-- /.sw-desc-slider__container -->
                                    </li><!-- /.sw-desc-slider__item -->
                                </ul><!-- /.sw-desc-slider__list -->
                            </div><!-- /.sw-desc-slider -->
                        </div><!-- /.home-intro__desc-container -->
                    </div><!-- /.home-intro__desc -->
                </div><!-- /.home-intro__container -->
            </div><!-- /.home-intro__contents -->
            <div class="home-intro__thumb" data-aos="zoom-out-left" data-aos-offset="500" data-aos-duration="800">
                <div id="js-intro-thumb-slide" class="swiper-container sw-thumb-slider">
                    <div class="sw-thumb-btn">
                        <div class="sw-thumb-btn-next"><i class="fas fa-chevron-left"></i></div>
                        <div class="sw-thumb-btn-prev"><i class="fas fa-chevron-right"></i></div>
                    </div>
                    <ul class="swiper-wrapper sw-thumb-slider__list">
                        <?php foreach ($image_ids as $key => $image_id) { ?>
                            <li class="swiper-slide sw-thumb-slider__item">
                                <figure class="c-figure -square"
                                        style="background-image: url(<?php echo wp_get_attachment_image_src($image_id, "full")[0] ?>)">
                                </figure>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>


        </div><!-- /.home-intro -->
    </section> <?php } ?>
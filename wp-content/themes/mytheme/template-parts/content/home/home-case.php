<?php
$image_ids = explode(',', $args['arr_img']);
$url_link = vc_build_link($args['url']);
//echo '<pre>';
//print_r($args);
//echo '</pre>';
if (isset($args) && $args) { ?>
    <section id="section_02" class="l-home__section">
        <div class="home-case">
            <div class="home-case__container">
                <div class="home-case__column">
                    <div id="js-picture-slider" class="home-grid-picture swiper-container -state-animation">
                        <div class="home-grid-picture__list swiper-wrapper">
                            <?php foreach ($image_ids as $key => $image_id) { ?>
                                <div class="home-grid-picture__item swiper-slide">
                                    <div class="home-grid-picture__img">
                                        <figure class="c-figure -square"
                                                style="background-image: url(<?php echo wp_get_attachment_image_src($image_id, "full")[0] ?>);">
                                        </figure>
                                    </div><!-- /.home-grid-picture__img -->
                                    <div class="home-grid-picture__caption">
                                        <p class="c-number">
                                      <span class="c-number__prefix">
                                        <span class="c-number__prefix-text">No.</span>
                                      </span>
                                            <span class="c-number__counter"><?php echo $key + 1 ?></span>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div><!-- /.home-grid-picture__list -->

                        <div class="home-grid-picture__overlay">
                            <span class="home-grid-picture__overlay-item"></span>
                            <span class="home-grid-picture__overlay-item"></span>
                            <span class="home-grid-picture__overlay-item"></span>
                            <span class="home-grid-picture__overlay-item"></span>
                        </div><!-- /.home-grid-picture__overlay -->
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <!-- /.home-grid-picture -->
                </div><!-- /.home-case__column -->
                <div class="home-case__column">
                    <div id="js-column-desc" class="sw-desc-slider swiper-container">
                        <div class="sw-desc-slider__list swiper-wrapper">
                            <div class="sw-desc-slider__item swiper-slide">
                                <div class="sw-desc-slider__container">
                                    <div class="sw-desc-slider__headline">
                                        <h3 class="c-heading-2 -block">
                        <span class="c-heading-2__large-text">
                          <span class="c-reveal-effect -slide">
                            <span class="c-reveal-effect__body"><?php echo $args['title_case_en'] ?></span>
                          </span>
                        </span>
                                            <span class="c-heading-2__small-text">
                          <span class="c-reveal-effect -slide">
                            <span class="c-reveal-effect__body"><?php echo $args['title_case_jpn'] ?></span>
                          </span>
                        </span>
                                        </h3>
                                        <div class="sw-btn is-sp">
                                        <span class="sw-btn-next" tabindex="0" role="button"
                                              aria-label="Previous slide"><i class="fas fa-chevron-left"></i></span>
                                            <span class="sw-btn-prev" tabindex="0" role="button"
                                                  aria-label="Next slide"><i
                                                        class="fas fa-chevron-right"></i></span>
                                        </div>
                                    </div>
                                    <div class="sw-desc-slider__catch-text">
                                        <p class="c-catch-text -secondary"><?php echo $args['slogan'] ?></p>
                                    </div>
                                    <div class="sw-desc-slider__paragraph">
                                        <div class="c-paragraph">
                                            <?php echo $args['content'] ?></div>
                                    </div>
                                </div><!-- /.sw-desc-slider__container -->
                            </div><!-- /.sw-desc-slider__item -->
                        </div><!-- /.sw-desc-slider__list -->

                        <div class="sw-desc-slider__btm">

                            <div class="sw-desc-slider__link">
                                <a href="<?php echo $url_link['url'] ?>"
                                   class="c-arrow-link"><?php echo $url_link['title'] ?></a>
                            </div>
                            <div class="sw-btn">
                            <span class="sw-btn-next is-pc" tabindex="0" role="button" aria-label="Previous slide"><i
                                        class="fas fa-chevron-left"></i></span>
                                <span class="sw-btn-prev is-pc" tabindex="0" role="button" aria-label="Next slide"><i
                                            class="fas fa-chevron-right"></i></span>
                            </div>

                        </div><!-- /.sw-desc-slider -->
                    </div><!-- /.home-case__column -->
                </div><!-- /.home-case__container -->
            </div><!-- /.home-case -->
        </div>
    </section>
<?php } ?>
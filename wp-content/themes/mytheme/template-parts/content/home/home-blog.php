<?php
$values = vc_param_group_parse_atts($args['array_item']);
//echo '<pre>';
//print_r($values);
//echo '</pre>';
if (isset($args) && $args) { ?>
    <section id="section_04" class="l-home__section">
        <div class="home-blog">
            <div class="home-blog__headline">
                <h2 class="c-section-headline">
            <span class="c-section-headline__large-text">
              <span class="c-reveal-effect -scroll">
                <span class="c-reveal-effect__body"><?php echo $args['title_en'] ?></span>
              </span>
            </span>
                    <span class="c-section-headline__small-text">
              <span class="c-reveal-effect -scroll">
                <span class="c-reveal-effect__body"><?php echo $args['title_jpn'] ?></span>
              </span>
            </span>
                </h2>
                <a href="<?php echo vc_build_link($args['url_blog'])['url'] ?>"
                   class="c-arrow-link is-pc"><?php echo vc_build_link($args['url_blog'])['title'] ?></a>
            </div>
            <div class="home-blog__contents swiper-container">
                <div class="sw-article-btn">
                    <span class="sw-article-btn-next"><i class="fas fa-chevron-left"></i></span>
                    <span class="sw-article-btn-prev"><i class="fas fa-chevron-right"></i></span>
                </div>
                <ul id="js-article-slide" class="sw-article-slide swiper-wrapper">
                    <?php foreach ($values as $key => $item) { ?>
                        <li class="sw-article-slide__item swiper-slide" data-aos="fade-up" data-aos-duration="1000"  data-aos-delay="<?php echo $key + 3 ?>00">
                            <article class="sw-article-summary">
                                <a href="<?php echo vc_build_link($item['url'])['url'] ?>"
                                   class="sw-article-summary__thumb">
                                    <figure class="c-article-thumb">
                                        <img src="<?php echo wp_get_attachment_image_src($item['image'], "full")[0] ?>"
                                             alt="" class="c-article-thumb__img">
                                        <figcaption class="c-article-thumb__caption">
                                            <time class="c-date" datetime="" aria-label="">
                                                <span class="c-date__year"><?php echo get_the_date('Y'); ?></span>
                                                <span class="c-date__day"><?php echo get_the_date('d'); ?></span>
                                                <span class="c-date__month"><?php echo get_the_date('M'); ?></span>
                                            </time>
                                        </figcaption>
                                    </figure>
                                </a>
                                <div class="sw-article-summary__title">
                                    <h3 class="c-heading-3"><?php echo vc_build_link($item['url'])['title'] ?></h3>
                                </div>
                            </article><!-- /.sw-article-summary -->
                        </li><!-- /.sw-article-slide__item -->
                    <?php } ?>
                </ul><!-- /.sw-article-slide -->
            </div><!-- /.home-blog__contents -->
        </div><!-- /.home-blog -->

        <div class="is-sp home-blog-btn">
            <a href="<?php echo vc_build_link($args['url_blog'])['url'] ?>"
               class="c-arrow-link"><?php echo vc_build_link($args['url_blog'])['title'] ?></a>
        </div>

    </section>
<?php } ?>
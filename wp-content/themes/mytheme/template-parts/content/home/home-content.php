<?php
$values = vc_param_group_parse_atts($args['array_item']);
if (isset($args) && $args) { ?>
    <section id="section_03" class="l-home__section">
        <div class="home-summary">
            <div class="home-summary__container">
                <div class="home-summary__headline">
                    <h2 class="c-section-headline">
              <span class="c-section-headline__large-text">
                <span class="c-reveal-effect ">
                  <span class="c-reveal-effect__body"><?php echo $args['title_en'] ?></span>
                </span>
              </span>
                        <span class="c-section-headline__small-text">
                <span class="c-reveal-effect -scroll">
                  <span class="c-reveal-effect__body"><?php echo $args['title_jpn'] ?></span>
                </span>
              </span>
                    </h2>
                </div>
                <div class="home-summary__contents">
                    <ul class="sw-contents-grid">
                        <?php foreach ($values as $key => $item) {?>
                            <li class="sw-contents-grid__column">
                                <div class="sw-contents-summary">
                                    <div class="sw-contents-summary__card">
                                        <a href="<?php echo vc_build_link($item['url'])['url'] ?>" target="_self" class="sw-card"
                                           style="background-image: url(<?php echo wp_get_attachment_image_src($item['image'], "full")[0] ?>);">
                                            <div class="sw-card__headline">
                                                <h3 class="c-heading-2 -block" data-mh="mh-card-ttl"
                                                    style="height: 62.5px;">
                                                    <span class="c-heading-2__large-text"><?php echo $item['title_item_en'] ?></span>
                                                    <span class="c-heading-2__small-text"><?php echo $item['title_item_jpn'] ?></span>
                                                </h3>
                                            </div>
                                            <div class="sw-card__arrow">
                                                <span class="c-arrow-link u-uppercase"><?php echo vc_build_link($item['url'])['title'] ?></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="sw-contents-summary__desc">
                                        <div class="c-paragraph">
                                            <?php echo $item['description'] ?>
                                        </div>
                                    </div>
                                </div><!-- /.home-contents-summary -->
                            </li><!-- /.sw-contents-grid__column -->
                        <?php } ?>
                    </ul><!-- /.c-grid -->
                </div><!-- /.home-summary__contents -->
            </div><!-- /.home-summary__container -->
        </div><!-- /.home-summary -->
    </section>
<?php } ?>
<?php
$values = vc_param_group_parse_atts($args['banner']);
//echo '<pre>';
//print_r($args['content']);
//echo '</pre>';
if (isset($args) && $args) { ?>
        <div class="banner__home">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($values as $key => $banner) : ?>
<!--                        <div class="item">-->
<!--                            <a href="--><?php //= $banner['link'] ?><!--" title="--><?php //= $banner['title'] ?><!--">-->
<!--                                --><?php //echo wp_get_attachment_image($banner ['image'], 'full') ?>
<!--                            </a>-->
<!--                        </div>-->
                        <div class="swiper-slide">
                            <?php echo wp_get_attachment_image($banner ['image'], 'full') ?>
                        </div>

                    <?php endforeach; ?>

                </div>
                <div class="swiper-button-next swiper-button-hide"></div>
                <div class="swiper-button-prev swiper-button-hide"></div>
                <div class="banner__home--content">
                    <div class="">
                        <?php echo $args['content'] ?>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
<?php }
?>

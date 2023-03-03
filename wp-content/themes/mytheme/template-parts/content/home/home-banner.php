<?php
$values = vc_param_group_parse_atts($args['banner']);
//echo '<pre>';
//print_r($values);
//echo '</pre>';
if (isset($args) && $args) { ?>
        <div >

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
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>


<?php }
?>
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        autoplay: {
            delay: 3000,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

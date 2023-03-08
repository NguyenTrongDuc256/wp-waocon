<?php
//$values = vc_param_group_parse_atts($args['array_item']);
//echo '<pre>';
//print_r($args);
//echo '</pre>';
if (isset($args) && $args) { ?>
<section id="section_06" class="l-home__section">
    <div class="home-contact">
        <h2 class="home-contact__headline u-invisible">お問い合わせはこちらです</h2>
        <ul class="home-contact__list">

            <li class="home-contact__item">
                <a href="tel:<?php echo $args['phone_number'] ?>" class="sw-contact-button -tel" style="background-image: url(&quot;&quot;);">
                    <div class="sw-contact-button__container" data-mh="contact-item" style="height: 185px;">

                        <div class="sw-contact-button__top">
                            <div class="sw-contact-button__icon">
                                <span class="fas fa-phone"></span>
                            </div>
                            <div class="sw-contact-button__text">
                                <div class="c-paragraph">
                                    <p> <?php echo $args['phone_number'] ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="sw-contact-button__btm">
                            <?php echo $args['work_time'] ?>
                        </div>
                    </div>
                </a>
            </li>

            <li class="home-contact__item">
                <a href="<?php echo vc_build_link($args['url'])['url'] ?>" class="sw-contact-button -mail">
                    <div class="sw-contact-button__container" data-mh="contact-item" style="height: 185px;">

                        <div class="sw-contact-button__top">
                            <div class="sw-contact-button__icon">
                                <span class="far fa-envelope"></span>
                            </div>
                            <div class="sw-contact-button__text">
                                <div class="c-paragraph">
                                    <p><?php echo vc_build_link($args['url'])['title'] ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </a>
            </li>

        </ul><!-- /.home-contact__list -->
        <div class="home-contact__background">
            <span class="home-contact__background-img" style="background-image: url(<?php echo wp_get_attachment_image_src($args['image'], "full")[0]  ?>);"></span>
        </div><!-- /.home-contact__background -->
    </div><!-- /.home-contact -->
</section>
<?php } ?>
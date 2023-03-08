<?php
//$values = vc_param_group_parse_atts($args['array_item']);
//echo '<pre>';
//print_r($args);
//echo '</pre>';
if (isset($args) && $args) { ?>
<section id="" class="l-home__section is-access">
    <div class="home-address">
        <div class="home-address__desc">
            <div class="home-address__desc-container">
                <div class="home-address__desc-inner">
                    <div class="home-address__headline">
                        <h2 class="c-border-headline">We welcome you</h2>
                    </div>
                    <div class="home-address__info">
                        <div class="home-address__details">
                            <dl class="c-information">
                                <div class="information__row">
                                    <dt class="c-information__title"><?php echo $args['title_info'] ?></dt>
                                    <dd class="c-information__summary">
                                        <div class="c-paragraph">
                                            <?php echo $args['detail_info'] ?>
                                        </div>
                                    </dd>
                                </div>
                            </dl><!-- /.c-address -->
                            <p class="refusal"><img src="https://pot2020.work/wp-content/themes/sg096/img/refusal_w.png" alt=""></p>                </div>
                        <div class="home-address__link">
                            <a href="<?php echo vc_build_link($args['url'])['url'] ?>" class="c-arrow-link"> <?php echo vc_build_link($args['url'])['title'] ?></a>
                        </div>
                    </div><!-- /.home-address__info -->
                </div><!-- /.home-address__desc-inner -->
            </div><!-- /.home-address__desc-container -->
        </div><!-- /.home-address__desc -->
        <div class="home-address__map">
            <figure class="c-map">
                <?php echo $args['content'] ?>
<!--                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.9239445197545!2d138.54356041527697!3d36.338393080046274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dcd19acf7bbdf%3A0x5cfd455f17d710db!2z5qCq5byP5Lya56S-UE9U!5e0!3m2!1sja!2sjp!4v1631858117462!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
            </figure>
        </div><!-- /.home-address__map -->
    </div><!-- /.home-address -->
</section>
<?php } ?>
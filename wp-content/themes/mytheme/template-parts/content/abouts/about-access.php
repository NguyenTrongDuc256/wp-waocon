<?php
//echo '<pre>';
//print_r($args);
//echo '</pre>';
if (isset($args) && $args) { ?>
    <section class="l-subpage__section" id="access">
        <div class="company-access">
            <div class="company-access__container">
                <div class="company-access__summary">
                    <div class="company-access-card">
                        <div class="company-access-card__headline">
                            <h2 class="c-heading-2">
                                <span class="c-heading-2__large-text"><?= $args['title_en'] ?></span>
                                <span class="c-heading-2__small-text"><?= $args['title_jpn'] ?></span>
                            </h2><!-- /.c-heading-2 -->
                        </div><!-- /.company-access-card__headline -->
                        <div class="company-access-card__address">
                            <div class="c-paragraph">
                                <?= $args['detail_info'] ?>
                            </div>
                            <p class="refusal"><img src="https://pot2020.work/wp-content/themes/sg096/img/refusal.png"
                                                    alt=""></p></div><!-- /.company-access-card__address -->
                    </div><!-- /.company-access-card -->
                </div><!-- /.company-access__summary -->
                <div class="company-access__map">
                    <figure class="c-map">
                        <?= $args['content'] ?>
                    </figure><!-- /.c-map -->
                </div><!-- /.company-access__map -->
            </div><!-- /.company-access__container -->
        </div><!-- /.company-access -->
    </section>
<?php } ?>
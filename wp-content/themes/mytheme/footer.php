<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mytheme
 */

?>

<footer class="l-footer">
    <div class="l-footer__main">
        <address class="l-footer__address">
            <dl class="st-footer-address">
                <dt class="st-footer-address__title">
                    <?php $logos = get_field('logo_footer', 'option');
                    if (isset($logos) && count($logos)) {?>
                    <span class="c-logo"><a href="<?php echo $logos[0]['link'] ?>"><img src="<?php echo $logos[0]['image'] ?>" alt="株式会社POT" class="c-logo__img"></a></span>
                    <?php } ?>
                </dt>
                <dd class="st-footer-address__summary">
                    <?php $address = get_field('address', 'option');
                    if ($address) {
                    ?>
                    <div class="c-paragraph">
                        <?php echo nl2br($address) ?>
                    </div>
                    <?php } ?>
                </dd>
            </dl>
        </address><!-- /.l-footer__address -->


        <div class="l-footer__nav">
            <?php echo get_template_part('template-parts/menu/menu', 'footer') ?>
        </div><!-- /.l-footer__nav -->

    </div><!-- /.l-footer__main -->


    <div class="l-footer__side">


        <div class="l-footer__sns">
            <ul class="st-footer-sns">
                <li class="st-footer-sns__item">
                    <a href="https://www.instagram.com/kabusikipot/" class="c-sns-link" target="_blank" rel="nofollow noopener">
                        <span class="fab fa-instagram" aria-label="Instagram"></span>
                    </a>
                </li>

            </ul>
        </div><!-- /.l-footer__sns -->




        <div class="l-footer__copy">
            <p class="st-footer-copy">
                <small class="st-footer-copy__text" lang="en">© 2021 株式会社POT</small>
            </p><!-- /.st-footer-copy -->
        </div><!-- /.l-footer__copy -->
    </div><!-- /.l-footer__side -->
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

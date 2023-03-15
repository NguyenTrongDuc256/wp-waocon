<?php
$values = vc_param_group_parse_atts($args['array_tab']);

//echo '<pre>';
//print_r($values);
//echo '</pre>';
//$current_url = get_permalink();
//echo $current_url;

?>

<div class="l-subpage__nav">
    <div class="sub-nav">
        <ul class="sub-nav__list">
            <?php foreach ($values as $key => $item) :?>
                <li class="sub-nav__item">
                    <a href="<?= '#' . strtolower(str_replace(" ", "", $item['title'] )) ?>" class="c-text-link u-uppercase">
                        <?= $item['title'] ?> </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>



<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<ul>
    <?
//    dump($countries);
    /*echo '<pre>';
    print_r($countries);
    echo '</pre>';*/
    ?>
    <?php foreach ($countries as $country): ?>
        <li>
<!--            --><?//= Html::encode("{$country->code} ({$country->name})") ?><!--:-->
            <?= Html::encode("{$country->username} ({$country->email})") ?>:
<!--            --><?//= $country->population ?>
        </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>

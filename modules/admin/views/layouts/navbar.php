<?php

use yii\helpers\Html;

?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <?= Html::a('На сайт', Yii::$app->homeUrl, ['class' => 'nav-link']) ?>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <?= Html::a(
                '<i class="fas fa-sign-out-alt"></i> Выйти (' . Html::encode(Yii::$app->user->identity->username) . ')',
                ['/site/logout'],
                ['data-method' => 'post', 'class' => 'nav-link']
            ) ?>
        </li>
    </ul>
</nav>

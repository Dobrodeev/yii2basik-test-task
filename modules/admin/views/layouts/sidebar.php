<?php

use yii\helpers\Html;

/** @var string $assetDir */
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?= Html::a(
        Html::img($assetDir . '/img/AdminLTELogo.png', ['class' => 'brand-image img-circle elevation-3', 'style' => 'opacity: .8', 'alt' => 'Logo'])
        . '<span class="brand-text font-weight-light">Админка</span>',
        ['/admin'],
        ['class' => 'brand-link']
    ) ?>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <span class="d-block text-white"><i class="fas fa-user mr-2"></i><?= Html::encode(Yii::$app->user->identity->username) ?></span>
            </div>
        </div>

        <nav class="mt-2">
            <?= \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Панель управления', 'icon' => 'tachometer-alt', 'url' => ['/admin/default/index']],
                    ['label' => 'Данные', 'header' => true],
                    ['label' => 'Страны', 'icon' => 'globe', 'url' => ['/admin/country/index']],
                    ['label' => 'Разработка', 'header' => true, 'visible' => YII_ENV_DEV],
                    ['label' => 'Gii', 'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank', 'visible' => YII_ENV_DEV],
                    ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank', 'visible' => YII_ENV_DEV],
                ],
            ]) ?>
        </nav>
    </div>
</aside>

<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <h2 class="text-center mb-4">Примеры из уроков</h2>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <h3>Говорим «Привет»</h3>

                <p>Действие контроллера и представление: параметр из URL выводится на странице.</p>

                <p><?= Html::a('Открыть пример &raquo;', ['site/say', 'message' => 'Привет'], ['class' => 'btn btn-primary']) ?></p>
            </div>
            <div class="col-lg-4 mb-4">
                <h3>Работа с формами</h3>

                <p>Форма на основе модели EntryForm с валидацией имени и email.</p>

                <p><?= Html::a('Открыть пример &raquo;', ['site/entry'], ['class' => 'btn btn-primary']) ?></p>
            </div>
            <div class="col-lg-4 mb-4">
                <h3>Работа с базами данных</h3>

                <p>Список стран из таблицы country через ActiveRecord с постраничным выводом.</p>

                <p><?= Html::a('Открыть пример &raquo;', ['country/index'], ['class' => 'btn btn-primary']) ?></p>
            </div>
        </div>

    </div>
</div>

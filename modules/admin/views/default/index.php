<?php
/** @var yii\web\View $this */
/** @var int $countryCount */
/** @var int $population */

use yii\helpers\Html;

$this->title = 'Панель управления';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?= $countryCount ?></h3>
                    <p>Стран в базе</p>
                </div>
                <div class="icon"><i class="fas fa-globe"></i></div>
                <?= Html::a('Подробнее <i class="fas fa-arrow-circle-right"></i>', ['country/index'], ['class' => 'small-box-footer']) ?>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?= Yii::$app->formatter->asDecimal($population, 0) ?></h3>
                    <p>Суммарное население</p>
                </div>
                <div class="icon"><i class="fas fa-users"></i></div>
                <?= Html::a('Подробнее <i class="fas fa-arrow-circle-right"></i>', ['country/index'], ['class' => 'small-box-footer']) ?>
            </div>
        </div>
    </div>
</div>

<?php

namespace app\modules\admin\controllers;

use app\models\Country;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'countryCount' => Country::find()->count(),
            'population' => Country::find()->sum('population'),
        ]);
    }
}

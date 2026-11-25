<?php

namespace app\modules\admin;

use Yii;
use yii\filters\AccessControl;

/**
 * Админка на теме AdminLTE 3. Доступ только для пользователя admin.
 */
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';

    public $layout = 'main';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function () {
                            return Yii::$app->user->identity->username === 'admin';
                        },
                    ],
                ],
            ],
        ];
    }
}

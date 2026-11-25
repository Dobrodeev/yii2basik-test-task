<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property string $code
 * @property string $name
 * @property int $population
 */
class Country extends ActiveRecord
{
    public static function tableName()
    {
        return 'country';
    }

    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            ['code', 'string', 'length' => 2],
            ['code', 'match', 'pattern' => '/^[A-Z]{2}$/', 'message' => 'Код — две заглавные латинские буквы.'],
            ['code', 'unique'],
            ['name', 'string', 'max' => 52],
            ['population', 'integer', 'min' => 0],
            ['population', 'default', 'value' => 0],
        ];
    }

    public function attributeLabels()
    {
        return [
            'code' => 'Код',
            'name' => 'Название',
            'population' => 'Население',
        ];
    }
}

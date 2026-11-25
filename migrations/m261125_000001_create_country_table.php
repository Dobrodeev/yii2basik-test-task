<?php

use yii\db\Migration;

/**
 * Таблица country из урока «Работа с базами данных».
 */
class m261125_000001_create_country_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('country', [
            'code' => $this->char(2)->notNull(),
            'name' => $this->char(52)->notNull(),
            'population' => $this->integer(11)->notNull()->defaultValue(0),
        ], 'CHARACTER SET utf8 ENGINE=InnoDB');

        $this->addPrimaryKey('pk-country-code', 'country', 'code');

        $this->batchInsert('country', ['code', 'name', 'population'], [
            ['AU', 'Australia', 24016400],
            ['BR', 'Brazil', 205722000],
            ['CA', 'Canada', 35985751],
            ['CN', 'China', 1375210000],
            ['DE', 'Germany', 81459000],
            ['FR', 'France', 64513242],
            ['GB', 'United Kingdom', 65097000],
            ['IN', 'India', 1285400000],
            ['RU', 'Russia', 146519759],
            ['US', 'United States', 322976000],
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('country');
    }
}

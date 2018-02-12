<?php

use yii\db\Migration;

/**
 * Class m180122_144107_subscription_tables
 */
class m180122_144107_subscription_tables extends Migration
{
    public function safeUp()
    {

        $tableOptions = null;
        //Опции для mysql
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }


        $this->createTable('{{%subscription}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(),
            'date' => $this->dateTime(),

        ], $tableOptions);


    }

    public function safeDown()
    {
        $this->dropTable('{{%subscription}}');
    }
}

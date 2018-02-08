<?php

use yii\db\Migration;

/**
 * Class m180121_225538_messages_tables
 */
class m180121_225538_messages_tables extends Migration
{
    public function safeUp()
    {

        $tableOptions = null;
        //Опции для mysql
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }


        $this->createTable('{{%messages}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->string(),
            'message' => $this->string(),
            'file' => $this->string()->defaultValue(null),
            'cabinet' => $this->boolean()->defaultValue(0),
            'page_id' => $this->integer()->defaultValue(null),
            'date' => $this->dateTime(),

        ], $tableOptions);


    }

    public function safeDown()
    {
        $this->dropTable('{{%messages}}');
    }
}

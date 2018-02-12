<?php

use yii\db\Migration;

/**
 * Class m180211_215032_request_tables
 */
class m180211_215032_request_tables extends Migration
{
    public function safeUp()
    {

        $tableOptions = null;
        //Опции для mysql
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }


        $this->createTable('{{%questions}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->string(),
            'message' => $this->string(),
            'product_id' => $this->string()->defaultValue(null),
            'verifyCode' => $this->integer()->defaultValue(null),
            'date' => $this->dateTime(),

        ], $tableOptions);


    }

    public function safeDown()
    {
        $this->dropTable('{{%questions}}');
    }
}

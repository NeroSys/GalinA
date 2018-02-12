<?php

use yii\db\Migration;

/**
 * Class m180121_225450_orders_tables
 */
class m180121_225450_orders_tables extends Migration
{
    public function safeUp()
    {

        $tableOptions = null;
        //Опции для mysql
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%orders_items}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(11),
            'product_id' => $this->integer(11),
            'name' => $this->string(),
            'price' => $this->float(),
            'qty_item' => $this->string(),
            'sum_item' => $this->float(),
        ], $tableOptions);

        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'qty' => $this->integer(11),
            'sum' => $this->integer(11),
            'new' => $this->boolean()->defaultValue(1),
            'name' => $this->string(255),
            'email' => $this->string(255),
            'phone' => $this->string(255),
            'address' => $this->string(255)->defaultValue(null),
            'delivery' => $this->string(),
            'status' => $this->string()->defaultValue(null)
        ], $tableOptions);


        $this->createIndex('FK_orders_items', '{{%orders_items}}', 'order_id');

        $this->addForeignKey(
            'FK_orders_items', '{{%orders_items}}', 'order_id', '{{%orders}}', 'id', 'CASCADE', 'CASCADE'
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%orders_items}}');
        $this->dropTable('{{%orders}}');
    }
}

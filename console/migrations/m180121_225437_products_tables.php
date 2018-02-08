<?php

use yii\db\Migration;

/**
 * Class m180121_225437_products_tables
 */
class m180121_225437_products_tables extends Migration
{

    public function safeUp()
    {

        $tableOptions = null;
        //Опции для mysql
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%products_price}}', [
            'id' => $this->primaryKey(),
            'item_id' => $this->integer(11),
            'currency_id' => $this->integer(11),
            'price' => $this->float()
        ], $tableOptions);

        $this->createTable('{{%products_lang}}', [
            'id' => $this->primaryKey(),
            'item_id' => $this->integer(11),
            'lang_id' => $this->integer(11),
            'lang' => $this->string(50),
            'title' => $this->string(255)->notNull()->defaultValue(null),
            'keywords' => $this->string(255)->notNull()->defaultValue(null),
            'description' => $this->string(255)->notNull()->defaultValue(null),
            'og_title' => $this->string()->notNull()->defaultValue(''),
            'og_keywords' => $this->string()->notNull()->defaultValue(''),
            'og_description' => $this->string()->notNull()->defaultValue(''),
            'name' => $this->string(255)->notNull()->defaultValue(null),
            'content' => $this->string(255)->notNull()->defaultValue(null),
        ], $tableOptions);

        $this->createTable('{{%currency}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'code' => $this->string(50)->notNull()->defaultValue(null),
            'sign' => $this->string(11),
            'default' => $this->integer(11),

        ], $tableOptions);

        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(11)->unsigned()->defaultValue(null),
            'name' => $this->string(255)->notNull()->defaultValue(null),
            'imageSmall' => $this->string(255)->defaultValue(null),
            'imageLarge' => $this->string(255)->defaultValue(null),
            'visible' => $this->smallInteger(1)->notNull()->defaultValue('1'),
            'sort' => $this->integer(11)->unsigned()->defaultValue(null),
            'hit' => $this->boolean()->defaultValue(0),
            'new' => $this->boolean()->defaultValue(0),
            'sale' => $this->boolean()->defaultValue(0),
        ], $tableOptions);


        $this->createIndex('idx_products_lang', '{{%products_lang}}', 'item_id');

        $this->createIndex('idx_products_price', '{{%products_price}}', 'currency_id');

        $this->createIndex('idx_products_product', '{{%products_price}}', 'item_id');



        $this->addForeignKey(
            'FK_products_lang', '{{%products_lang}}', 'item_id', '{{%products}}', 'id', 'CASCADE', 'CASCADE'
        );
        $this->addForeignKey(
            'FK_products_price', '{{%products_price}}', 'item_id', '{{%products}}', 'id', 'CASCADE', 'CASCADE'
        );
        $this->addForeignKey(
            'FK_products_currency', '{{%products_price}}', 'currency_id', '{{%currency}}', 'id', 'CASCADE', 'RESTRICT'
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%products_lang}}');
        $this->dropTable('{{%products_price}}');
        $this->dropTable('{{%currency}}');
        $this->dropTable('{{%products}}');
    }
}

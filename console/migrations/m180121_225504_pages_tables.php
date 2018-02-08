<?php

use yii\db\Migration;

/**
 * Class m180121_225504_pages_tables
 */
class m180121_225504_pages_tables extends Migration
{
    public function safeUp()
    {

        $tableOptions = null;
        //Опции для mysql
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }


        $this->createTable('{{%pages_lang}}', [
            'id' => $this->primaryKey(),
            'item_id' => $this->integer(11),
            'lang_id' => $this->integer(11),
            'lang' => $this->string(50),
            'seo_title' => $this->string()->notNull()->defaultValue(''),
            'seo_keywords' => $this->string()->notNull()->defaultValue(''),
            'seo_description' => $this->string()->notNull()->defaultValue(''),
            'og_title' => $this->string()->notNull()->defaultValue(''),
            'og_keywords' => $this->string()->notNull()->defaultValue(''),
            'og_description' => $this->string()->notNull()->defaultValue(''),
            'title_1' => $this->string()->notNull()->defaultValue(''),
            'text_1' => $this->string()->notNull()->defaultValue(''),
            'title_2' => $this->string()->notNull()->defaultValue(''),
            'text_2' => $this->string()->notNull()->defaultValue(''),
            'title_3' => $this->string()->notNull()->defaultValue(''),
            'text_3' => $this->string()->notNull()->defaultValue(''),
            'title_4' => $this->string()->notNull()->defaultValue(''),
            'text_4' => $this->string()->notNull()->defaultValue(''),
            'title_5' => $this->string()->notNull()->defaultValue(''),
            'text_5' => $this->string()->notNull()->defaultValue(''),

        ], $tableOptions);


        $this->createTable('{{%pages}}', [
            'id' => $this->primaryKey(),
            'og_url' => $this->string(255)->notNull()->defaultValue(null),
            'seo_url' => $this->string(255)->notNull()->defaultValue(null),
            'name' => $this->string(255)->notNull()->defaultValue(''),
            'main_img' => $this->string(255)->defaultValue(null),
            'visible' => $this->smallInteger(1)->notNull()->defaultValue('1'),
            'sort' => $this->integer(11)->defaultValue(null)
        ], $tableOptions);



        //Создание индекса в таблице catalog_lang для ячейки 'catalog_list_id'
        $this->createIndex('FK_pages_lang', '{{%pages_lang}}', 'item_id');


        $this->addForeignKey(
            'FK_pages_lang', '{{%pages_lang}}', 'item_id', '{{%pages}}', 'id', 'CASCADE', 'CASCADE'
        );

    }


    public function safeDown()
    {

        $this->dropTable('{{%pages_lang}}');
        $this->dropTable('{{%pages}}');
    }
}

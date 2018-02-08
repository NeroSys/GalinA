<?php

use yii\db\Migration;

/**
 * Class m180121_225416_category_tables
 */
class m180121_225416_category_tables extends Migration
{
    public function safeUp()
    {

        $tableOptions = null;
        //Опции для mysql
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%category_lang}}', [
            'id' => $this->primaryKey(),
            'item_id' => $this->integer(11),
            'lang_id' => $this->integer(11),
            'lang' => $this->string(50),
            'name' => $this->string(255)->notNull()->defaultValue(null),
            'title' => $this->string(255)->notNull()->defaultValue(null),
            'keywords' => $this->string(255)->notNull()->defaultValue(null),
            'description' => $this->string(255)->notNull()->defaultValue(null),
            'og_title' => $this->string()->notNull()->defaultValue(''),
            'og_keywords' => $this->string()->notNull()->defaultValue(''),
            'og_description' => $this->string()->notNull()->defaultValue(''),
        ], $tableOptions);

        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(11)->unsigned()->defaultValue(null),
            'name' => $this->string(255)->notNull()->defaultValue(''),
            'image_logo' => $this->string(255)->defaultValue(null),
            'image_small' => $this->string(255)->defaultValue(null),
            'image_large' => $this->string(255)->defaultValue(null),
            'visible' => $this->smallInteger(1)->notNull()->defaultValue('1'),
            'sort' => $this->integer(11)->unsigned()->defaultValue(null)
        ], $tableOptions);


        $this->createIndex('FK_category_lang', '{{%category_lang}}', 'item_id');

        $this->addForeignKey(
            'FK_category_lang', '{{%category_lang}}', 'item_id', '{{%category}}', 'id', 'CASCADE', 'CASCADE'
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%category_lang}}');
        $this->dropTable('{{%category}}');
    }
}

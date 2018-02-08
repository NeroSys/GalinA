<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%products_lang}}".
 *
 * @property int $id
 * @property int $item_id
 * @property int $lang_id
 * @property string $lang
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $og_title
 * @property string $og_keywords
 * @property string $og_description
 * @property string $name
 * @property string $content
 *
 * @property Products $item
 */
class ProductsLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%products_lang}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'lang_id'], 'integer'],
            [['lang'], 'string', 'max' => 50],
            [['title', 'keywords', 'description', 'og_title', 'og_keywords', 'og_description', 'name', 'content'], 'string', 'max' => 255],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['item_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'item_id' => Yii::t('app', 'Item ID'),
            'lang_id' => Yii::t('app', 'Lang ID'),
            'lang' => Yii::t('app', 'Lang'),
            'title' => Yii::t('app', 'Title'),
            'keywords' => Yii::t('app', 'Keywords'),
            'description' => Yii::t('app', 'Description'),
            'og_title' => Yii::t('app', 'Og Title'),
            'og_keywords' => Yii::t('app', 'Og Keywords'),
            'og_description' => Yii::t('app', 'Og Description'),
            'name' => Yii::t('app', 'Name'),
            'content' => Yii::t('app', 'Content'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Products::className(), ['id' => 'item_id']);
    }
}

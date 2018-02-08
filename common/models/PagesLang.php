<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%pages_lang}}".
 *
 * @property int $id
 * @property int $item_id
 * @property int $lang_id
 * @property string $lang
 * @property string $seo_title
 * @property string $seo_keywords
 * @property string $seo_description
 * @property string $og_title
 * @property string $og_keywords
 * @property string $og_description
 * @property string $title_1
 * @property string $text_1
 * @property string $title_2
 * @property string $text_2
 * @property string $title_3
 * @property string $text_3
 * @property string $title_4
 * @property string $text_4
 * @property string $title_5
 * @property string $text_5
 *
 * @property Pages $item
 */
class PagesLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pages_lang}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'lang_id'], 'integer'],
            [['lang'], 'string', 'max' => 50],
            [['seo_title', 'seo_keywords', 'seo_description', 'og_title', 'og_keywords', 'og_description', 'title_1', 'text_1', 'title_2', 'text_2', 'title_3', 'text_3', 'title_4', 'text_4', 'title_5', 'text_5'], 'string', 'max' => 255],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pages::className(), 'targetAttribute' => ['item_id' => 'id']],
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
            'seo_title' => Yii::t('app', 'Seo Title'),
            'seo_keywords' => Yii::t('app', 'Seo Keywords'),
            'seo_description' => Yii::t('app', 'Seo Description'),
            'og_title' => Yii::t('app', 'Og Title'),
            'og_keywords' => Yii::t('app', 'Og Keywords'),
            'og_description' => Yii::t('app', 'Og Description'),
            'title_1' => Yii::t('app', 'Title 1'),
            'text_1' => Yii::t('app', 'Text 1'),
            'title_2' => Yii::t('app', 'Title 2'),
            'text_2' => Yii::t('app', 'Text 2'),
            'title_3' => Yii::t('app', 'Title 3'),
            'text_3' => Yii::t('app', 'Text 3'),
            'title_4' => Yii::t('app', 'Title 4'),
            'text_4' => Yii::t('app', 'Text 4'),
            'title_5' => Yii::t('app', 'Title 5'),
            'text_5' => Yii::t('app', 'Text 5'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Pages::className(), ['id' => 'item_id']);
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%pages}}".
 *
 * @property int $id
 * @property string $og_url
 * @property string $seo_url
 * @property string $name
 * @property string $main_img
 * @property int $visible
 * @property int $sort
 *
 * @property PagesLang[] $pagesLangs
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pages}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['visible', 'sort'], 'integer'],
            [['og_url', 'seo_url', 'name', 'main_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'og_url' => Yii::t('app', 'Og Url'),
            'seo_url' => Yii::t('app', 'Seo Url'),
            'name' => Yii::t('app', 'Name'),
            'main_img' => Yii::t('app', 'Main Img'),
            'visible' => Yii::t('app', 'Visible'),
            'sort' => Yii::t('app', 'Sort'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPagesLangs()
    {
        return $this->hasMany(PagesLang::className(), ['item_id' => 'id']);
    }
}

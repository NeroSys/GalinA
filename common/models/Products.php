<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%products}}".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $imageSmall
 * @property string $imageLarge
 * @property int $visible
 * @property int $sort
 * @property int $hit
 * @property int $new
 * @property int $sale
 *
 * @property ProductsLang[] $productsLangs
 * @property ProductsPrice[] $productsPrices
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%products}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'visible', 'sort', 'hit', 'new', 'sale'], 'integer'],
            [['name', 'imageSmall', 'imageLarge'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'name' => Yii::t('app', 'Name'),
            'imageSmall' => Yii::t('app', 'Image Small'),
            'imageLarge' => Yii::t('app', 'Image Large'),
            'visible' => Yii::t('app', 'Visible'),
            'sort' => Yii::t('app', 'Sort'),
            'hit' => Yii::t('app', 'Hit'),
            'new' => Yii::t('app', 'New'),
            'sale' => Yii::t('app', 'Sale'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductsLangs()
    {
        return $this->hasMany(ProductsLang::className(), ['item_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductsPrices()
    {
        return $this->hasMany(ProductsPrice::className(), ['item_id' => 'id']);
    }
}

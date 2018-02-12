<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%products_price}}".
 *
 * @property int $id
 * @property int $item_id
 * @property int $currency_id
 * @property int $lang_id
 * @property double $price
 *
 * @property Currency $currency
 * @property Products $item
 */
class ProductsPrice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%products_price}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'currency_id', 'lang_id'], 'integer'],
            [['price'], 'number'],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'id']],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['item_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'item_id' => Yii::t('app', 'Товар'),
            'currency_id' => Yii::t('app', 'Валюта'),
            'lang_id' => Yii::t('app', 'Языковая версия сайта'),
            'price' => Yii::t('app', 'Цена'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurrency()
    {
        return $this->hasOne(Currency::className(), ['id' => 'currency_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Products::className(), ['id' => 'item_id']);
    }
}

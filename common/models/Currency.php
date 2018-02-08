<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%currency}}".
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $sign
 * @property int $default
 *
 * @property ProductsPrice[] $productsPrices
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%currency}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['default'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['code'], 'string', 'max' => 50],
            [['sign'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'code' => Yii::t('app', 'Code'),
            'sign' => Yii::t('app', 'Sign'),
            'default' => Yii::t('app', 'Default'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductsPrices()
    {
        return $this->hasMany(ProductsPrice::className(), ['currency_id' => 'id']);
    }
}

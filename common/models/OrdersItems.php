<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%orders_items}}".
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property string $name
 * @property double $price
 * @property string $qty_item
 * @property double $sum_item
 *
 * @property Orders $order
 */
class OrdersItems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%orders_items}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id'], 'integer'],
            [['price', 'sum_item'], 'number'],
            [['name', 'qty_item'], 'string', 'max' => 255],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::className(), 'targetAttribute' => ['order_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'order_id' => Yii::t('app', 'Order ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'name' => Yii::t('app', 'Name'),
            'price' => Yii::t('app', 'Price'),
            'qty_item' => Yii::t('app', 'Qty Item'),
            'sum_item' => Yii::t('app', 'Sum Item'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Orders::className(), ['id' => 'order_id']);
    }
}

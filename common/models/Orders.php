<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%orders}}".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property int $qty
 * @property int $sum
 * @property int $new
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $delivery
 * @property string $status
 *
 * @property OrdersItems[] $ordersItems
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%orders}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['qty', 'sum', 'new'], 'integer'],
            [['name', 'email', 'phone', 'address', 'delivery', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'qty' => Yii::t('app', 'Qty'),
            'sum' => Yii::t('app', 'Sum'),
            'new' => Yii::t('app', 'New'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'address' => Yii::t('app', 'Address'),
            'delivery' => Yii::t('app', 'Delivery'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdersItems()
    {
        return $this->hasMany(OrdersItems::className(), ['order_id' => 'id']);
    }
}

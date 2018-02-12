<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%questions}}".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property string $product_id
 * @property int $verifyCode
 * @property string $date
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%questions}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['verifyCode'], 'integer'],
            [['date'], 'safe'],
            [['name', 'email', 'phone', 'message', 'product_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'message' => Yii::t('app', 'Message'),
            'product_id' => Yii::t('app', 'Product ID'),
            'verifyCode' => Yii::t('app', 'Verify Code'),
            'date' => Yii::t('app', 'Date'),
        ];
    }
}

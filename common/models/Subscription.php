<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%subscription}}".
 *
 * @property int $id
 * @property string $email
 * @property string $date
 */
class Subscription extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%subscription}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => Yii::t('app', 'Email'),
            'date' => Yii::t('app', 'Date'),
        ];
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%messages}}".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property string $file
 * @property int $cabinet
 * @property int $page_id
 * @property string $date
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%messages}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['cabinet', 'page_id'], 'integer'],
            [['date'], 'safe'],
            [['name', 'email', 'phone', 'file'], 'string', 'max' => 255],
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
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'message' => Yii::t('app', 'Message'),
            'file' => Yii::t('app', 'File'),
            'cabinet' => Yii::t('app', 'Cabinet'),
            'page_id' => Yii::t('app', 'Page ID'),
            'date' => Yii::t('app', 'Date'),
        ];
    }
}

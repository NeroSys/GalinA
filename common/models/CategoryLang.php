<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\db\Exception;

/**
 * This is the model class for table "{{%category_lang}}".
 *
 * @property int $id
 * @property int $item_id
 * @property int $lang_id
 * @property string $lang
 * @property string $name
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $og_title
 * @property string $og_keywords
 * @property string $og_description
 *
 * @property Category $item
 */
class CategoryLang extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category_lang}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'lang_id'], 'integer'],
            [['lang'], 'string', 'max' => 50],
            [['name', 'title', 'keywords', 'og_title', 'og_keywords'], 'string', 'max' => 255],
            [['description', 'og_description'], 'string'],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['item_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'item_id' => Yii::t('app', 'Перевод значения'),
            'lang_id' => Yii::t('app', 'ID языка'),
            'lang' => Yii::t('app', 'Язык'),
            'name' => Yii::t('app', 'Название'),
            'title' => Yii::t('app', 'Title'),
            'keywords' => Yii::t('app', 'Keywords'),
            'description' => Yii::t('app', 'Description'),
            'og_title' => Yii::t('app', 'Og Title'),
            'og_keywords' => Yii::t('app', 'Og Keywords'),
            'og_description' => Yii::t('app', 'Og Description'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Category::className(), ['id' => 'item_id']);
    }


    public function beforeSave($insert)
    {
        $ret = parent::beforeSave($insert);

        $lng = Lang::find()->where(['id' => $this->lang_id])->one();

        if($this->isNewRecord) {
            try {
                if (empty($lng)) throw new Exception('Неверный язык');
                $this->lang = $lng->local;
            } catch (Exception $e) {
                $ret = false;
            }
        }
        return $ret;
    }

    public function getLangList($item_id){

        return ArrayHelper::getColumn(CategoryLang::find()->select('lang_id')->distinct('lang_id')->where(['item_id' => $item_id])->all(), 'lang_id');

    }

    public function getArray($item_id){


        return ArrayHelper::map(Lang::find()->where(['NOT IN', 'id', $this->getLangList($item_id)])->all(), 'id', 'name');
    }

}

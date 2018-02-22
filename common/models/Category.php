<?php

namespace common\models;

use yii\db\ActiveRecord;
use Yii;
use yii\helpers\ArrayHelper;
use common\models\CategoryLang;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string $slug
 * @property $image_logo
 * @property string $image_small
 * @property string $image_large
 * @property int $visible
 * @property int $sort
 *
 * @property CategoryLang[] $categoryLangs
 */
class Category extends ActiveRecord
{
    public $nameL;
    public $nameLNew;
    public $title;
    public $titleNew;
    public $keywords;
    public $keywordsNew;
    public $description;
    public $descriptionNew;
    public $og_title;
    public $og_titleNew;
    public $og_keywords;
    public $og_keywordsNew;
    public $og_description;
    public $og_descriptionNew;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'visible', 'sort'], 'integer'],
            [
                [
                    'nameL',
                    'nameLNew',
                    'title',
                    'titleNew',
                    'keywords',
                    'keywordsNew',
                    'description',
                    'descriptionNew',
                    'og_title',
                    'og_titleNew',
                    'og_keywords',
                    'og_keywordsNew',
                    'og_description',
                    'og_descriptionNew',
                ], 'safe'],
            [['image_logo'], 'file', 'extensions' => 'png, jpg, svg, jpeg'],
            [['name', 'image_small', 'image_large', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'parent_id' => Yii::t('app', 'Родительская категория'),
            'name' => Yii::t('app', 'Название'),
            'slug' => Yii::t('app', 'slug'),
            'image_logo' => Yii::t('app', 'Изображение Logo'),
            'image_small' => Yii::t('app', 'Изображение маленькое'),
            'image_large' => Yii::t('app', 'Изображение основное'),
            'visible' => Yii::t('app', 'Отображение'),
            'sort' => Yii::t('app', 'Сортировка'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryLangs()
    {
        return $this->hasMany(CategoryLang::className(), ['item_id' => 'id']);
    }

    public function getProducts(){

        return $this->hasMany(Products::className(), ['category_id' => 'id']);
    }

    public function getCountProducts($id){

        $products = Products::find()->where(['category_id' => $id])->all();

        return count($products);

    }

    public function getParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    /*
* Возвращает массив объектов модели
*/
    public function getItems(){
        return $this->find()->all();
    }
    /*
     * Возвращает данные для указанного языка
     */
    public function getDataItems(){
        $language = Yii::$app->language;
        $data_lang = $this->getCategoryLangs()->where(['lang'=>$language])->one();
        return $data_lang;
    }

    /*
     * Возвращает объект по его url
     */
    public function getLang($url){
        return $this->find()->where(['url' => $url])->one();
    }
    /*
     * Сохранение значений переводов в сопутствующую таблицу
     */

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);


        if(!empty($this->nameL)){
            foreach ($this->nameL as $lang => $item){

                $key_id = key($item);
                $lang = CategoryLang::find()->where(['lang_id' => $lang])->andWhere(['id'=>$key_id])->one();

                if(!empty($lang)){
                    $lang->name = array_pop($item);

                    $lang->title = $this->title[$lang->lang_id][$key_id];
                    $lang->keywords = $this->keywords[$lang->lang_id][$key_id];
                    $lang->description = $this->description[$lang->lang_id][$key_id];


                    $lang->og_title = $this->og_title[$lang->lang_id][$key_id];
                    $lang->og_keywords = $this->og_keywords[$lang->lang_id][$key_id];
                    $lang->og_description = $this->og_description[$lang->lang_id][$key_id];

                    $lang->save();
                }
            }
        };

        if(!empty($this->nameLNew)) {

            foreach ($this->nameLNew as $lang_id => $data) {


                $lang = Lang::find()->where(['id' => $lang_id])->one()->local;

                $itemNameL = (is_array($data) ? array_pop($data) : '');
                $itemTitle = (is_array($this->titleNew) ? array_pop($this->titleNew[$lang_id]) : '');
                $itemKeywords = (is_array($this->keywordsNew) ? array_pop($this->keywordsNew[$lang_id]) : '');
                $itemDescription = (is_array($this->descriptionNew) ? array_pop($this->descriptionNew[$lang_id]) : '');

                $itemOgTitle = (is_array($this->og_titleNew) ? array_pop($this->og_titleNew[$lang_id]) : '');
                $itemOgKeywords = (is_array($this->og_keywordsNew) ? array_pop($this->og_keywordsNew[$lang_id]) : '');
                $itemOgDescription = (is_array($this->og_descriptionNew) ? array_pop($this->og_descriptionNew[$lang_id]) : '');

                $item = new CategoryLang();

                $item->item_id = $this->id;
                $item->lang_id = $lang_id;
                $item->lang = $lang;

                $item->name = (!empty($itemNameL) ? $itemNameL : '');

                $item->title = (!empty($itemTitle) ? $itemTitle : '');
                $item->keywords = (!empty($itemKeywords) ? $itemKeywords : '');
                $item->description = (!empty($itemDescription) ? $itemDescription : '');

                $item->og_title = (!empty($itemOgTitle) ? $itemOgTitle : '');
                $item->og_keywords = (!empty($itemOgKeywords) ? $itemOgKeywords : '');
                $item->og_description = (!empty($itemOgDescription) ? $itemOgDescription : '');

                $item->save();
            }
        }

    }

    public static function getValue($id, $langId){

        return CategoryLang::find()->where(['item_id' => $id])->andWhere(['lang_id' => $langId])->one();
    }

    public static function getHierarchy($parent_id = null) {
        $options = [];

        $parents = self::find()->where(['parent_id' => $parent_id])->all();

        foreach($parents as $id => $p) {

            $children = self::find()->where("parent_id=:parent_id", [":parent_id"=>$p->id])->all();

            $child_options = [];

            foreach($children as $child) {
//                третий уровень вложенности
                $subChildren = self::find()->where("parent_id=:parent_id", [":parent_id"=>$child->id])->all();

                $subChild_options = [];

                foreach ($subChildren as $subChild){

                    $subChild_options[$subChild->id] = $subChild->name;

                }

                $child_options[$child->id] = $child->name;
            }
            $options[$p->name] = $child_options;
        }
        return $options;
    }

    public function getName($id){

        $name =  Category::find()->where(['id' => $id])->one();

        return $name->name;
    }



    public static function getSubItems($id){

        return Category::find()->where(['parent_id' => $id])->all();

    }

    public function getLangList($item_id){

        return ArrayHelper::getColumn(CategoryLang::find()->select('lang_id')->distinct('lang_id')->where(['item_id' => $item_id])->all(), 'lang_id');

    }

    public function getArray($item_id){


        return ArrayHelper::map(Lang::find()->where(['NOT IN', 'id', $this->getLangList($item_id)])->all(), 'id', 'name');
    }

    public function upload()
    {
        if ($this->validate()) {

            $path = \Yii::getAlias('@frontend') . '/web/upload/category/' . $this->image_logo->baseName . '.' . $this->image_logo->extension;

            $this->image_logo->saveAs($path);

            return true;
        } else {
            return false;
        }
    }

    public function getImageLogo(){

        return ($this->image_logo) ?  '/frontend/web/upload/category/' . $this->image_logo : '/frontend/web/no-image.jpg';
    }

}

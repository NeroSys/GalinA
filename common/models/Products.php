<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%products}}".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $slug
 * @property string $previewImg
 * @property string $img
 * @property int $visible
 * @property int $top
 * @property int $sort
 * @property int $hit
 * @property int $new
 * @property int $sale
 * @property string $date
 *
 * @property ProductsLang[] $productsLangs
 * @property ProductsPrice[] $productsPrices
 */
class Products extends \yii\db\ActiveRecord
{

    public $title;
    public $titleNew;

    public $description;
    public $descriptionNew;

    public $text;
    public $textNew;

    public $price;
    public $priceNew;

    public $oldPrice;
    public $oldPriceNew;

    public $currency;
    public $currencyNew;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%products}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'visible', 'sort', 'hit', 'new', 'sale', 'top'], 'integer'],
            [[
                'title',
                'description',
                'titleNew',
                'descriptionNew',

                'text',
                'textNew',

                'price',
                'priceNew',
                'oldPrice',
                'oldPriceNew',
                'currency',
                'currencyNew',

            ], 'safe'],
            [['date'], 'safe'],
            [['name', 'slug', 'previewImg', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_id' => Yii::t('app', 'Категория'),
            'name' => Yii::t('app', 'Название'),
            'slug' => Yii::t('app', 'Slug Ссылка'),
            'previewImg' => Yii::t('app', 'Превью'),
            'img' => Yii::t('app', 'Изображение'),
            'visible' => Yii::t('app', 'Отображение'),
            'top' => Yii::t('app', 'Бестселлер'),
            'sort' => Yii::t('app', 'Сортировка вывода'),
            'hit' => Yii::t('app', 'Хит'),
            'new' => Yii::t('app', 'Новинка'),
            'sale' => Yii::t('app', 'Распродажа'),
            'date' => Yii::t('app', 'Дата добавления'),
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

    public function getCategory(){

        return $this->hasOne(Category::className(), ['id' => 'category_id']);
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
        $data_lang = $this->getProductsLangs()->where(['lang'=>$language])->one();
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


        if(!empty($this->title)){
            foreach ($this->title as $lang => $item){

                $key_id = key($item);
                $lang = ProductsLang::find()->where(['lang_id' => $lang])->andWhere(['id'=>$key_id])->one();

                if(!empty($lang)){
                    $lang->title = array_pop($item);
                    $lang->description = $this->description[$lang->lang_id][$key_id];
                    $lang->text = $this->text[$lang->lang_id][$key_id];

                    $lang->save();
                }
            }
        };

        if(!empty($this->price)){
            foreach ($this->price as $lang => $value){

                var_dump($lang);die;

                $key_id = key($value);
                $lang1 = ProductsPrice::find()->where(['lang_id' => $lang])->andWhere(['id'=>$key_id])->one();

                if(!empty($lang1)){

                    $item = $lang1->price;

                    $lang1->price = array_pop($value);

                    if ($item !== $lang1->price){
                        $lang1->oldPrice = $item;

                        if ($lang1->oldPrice > $lang1->price) {
                            $product = Products::find()->where(['id' => $this->id])->one();
                            $product->new = 0;
                            $product->sale = 1;
                            $product->save();
                        }

                    }
                    $lang1->currency_id = $this->currency[$lang1->lang_id][$key_id];
                    $lang1->item_id = $this->id;
                    $lang1->lang_id = $lang;

                    $lang1->save();
                }
            }
        };


        if(!empty($this->titleNew)) {

            foreach ($this->titleNew as $lang_id => $data) {


                $lang = Lang::find()->where(['id' => $lang_id])->one()->local;


                $itemTitle = (is_array($data) ? array_pop($data) : '');;
                $itemDescription = (is_array($this->descriptionNew) ? array_pop($this->descriptionNew[$lang_id]) : '');
                $itemText = (is_array($this->textNew) ? array_pop($this->textNew[$lang_id]) : '');


                $item = new ProductsLang();

                $item->lang_id = $lang_id;
                $item->lang = $lang;
                $item->item_id = $this->id;

                $item->title = (!empty($itemTitle) ? $itemTitle : '');
                $item->description = (!empty($itemDescription) ? $itemDescription : '');
                $item->text = (!empty($itemText) ? $itemText : '');

                $item->save();
            }
        }


            if(!empty($this->priceNew)) {

                foreach ($this->priceNew as $product_id => $price) {


                    $itemPrice = (is_array($price) ? array_pop($price) : '');
                    $itemCurrency = (is_array($this->currencyNew) ? array_pop($this->currencyNew[$product_id]) : '');

                    $item = new ProductsPrice();

                    $item->item_id = $this->id;

                    $item->price = (!empty($itemPrice) ? $itemPrice : '');
                    $item->currency_id = (!empty($itemCurrency) ? $itemCurrency : '');

                    $item->save();
                }
        }

    }

    public static function getValue($id, $langId){

        return ProductsLang::find()->where(['item_id' => $id])->andWhere(['lang_id' => $langId])->one();
    }

    public static function getPrice($id){

        $current = Currency::find()->where(['default' => 1])->one();

        return ProductsPrice::find()->where(['item_id' => $id])->andWhere(['currency_id' => $current->id])->one();
    }


    public function getProduct($id){

        return Products::find()->where(['id' => $id])->one();
    }

    public function getCurrName($id){

        $currency = Currency::find()->where(['id' => $id])->one();

        if (empty($currency)){
            return 'USD';
        }
        return $currency->name;
    }



//    Open graph

    public function getOpenGraph(){

        return $this->hasOne(Opengraf::className(), ['itemId' => 'id'])->andWhere(['modelName' => $this::className()]);
    }

    public function getOGItem($id){

        return Opengraf::find()->where(['modelName' => $this::className()])->andWhere(['itemId' => $id])->one();
    }

    public function getSEO($id){

        return Opengraf::find()->where(['modelName' => $this::className()])->andWhere(['itemId' => $id])->one();
    }

// End Open Graph
}

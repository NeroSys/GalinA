<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%pages}}".
 *
 * @property int $id
 * @property string $name
 * * @property string $slug
 * @property string $url
 * @property string $og_type
 * @property string $og_img
 * @property string $og_video
 * @property string $og_locale
 * @property string $og_siteName
 * @property string $main_img
 * @property int $visible
 * @property int $sort
 *
 * @property PagesLang[] $pagesLangs
 */
class Pages extends \yii\db\ActiveRecord
{
    public $seoTitle;
    public $seoKeywords;
    public $seoDescription;
    public $seoTitleNew;
    public $seoKeywordsNew;
    public $seoDescriptionNew;

    public $ogTitle;
    public $ogDescription;
    public $ogTitleNew;
    public $ogDescriptionNew;

    public $langTitle1;
    public $langTitle1New;
    public $langText1;
    public $langText1New;

    public $langTitle2;
    public $langTitle2New;
    public $langText2;
    public $langText2New;

    public $langTitle3;
    public $langTitle3New;
    public $langText3;
    public $langText3New;

    public $langTitle4;
    public $langTitle4New;
    public $langText4;
    public $langText4New;

    public $langTitle5;
    public $langTitle5New;
    public $langText5;
    public $langText5New;

    public $langTitle6;
    public $langTitle6New;
    public $langText6;
    public $langText6New;

    public $langTitle7;
    public $langTitle7New;
    public $langText7;
    public $langText7New;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%pages}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['visible', 'sort'], 'integer'],
            [[
                'seoTitle',
                'seoKeywords',
                'seoDescription',
                'seoTitleNew',
                'seoKeywordsNew',
                'seoDescriptionNew',

                'ogTitle',
                'ogDescription',
                'ogTitleNew',
                'ogDescriptionNew',

                'langTitle1',
                'langTitle1New',
                'langText1',
                'langText1New',

                'langTitle2',
                'langTitle2New',
                'langText2',
                'langText2New',

                'langTitle3',
                'langTitle3New',
                'langText3',
                'langText3New',

                'langTitle4',
                'langTitle4New',
                'langText4',
                'langText4New',

                'langTitle5',
                'langTitle5New',
                'langText5',
                'langText5New',

                'langTitle6',
                'langTitle6New',
                'langText6',
                'langText6New',

                'langTitle7',
                'langTitle7New',
                'langText7',
                'langText7New',

            ], 'safe'],
            [['name', 'slug', 'url', 'og_type', 'og_img', 'og_video', 'og_locale', 'og_siteName', 'main_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Название страницы'),
            'slug' => Yii::t('app', 'Slug страницы'),
            'url' => Yii::t('app', 'Url SEO_OG'),
            'og_type' => Yii::t('app', 'Og Тип'),
            'og_img' => Yii::t('app', 'Og Изображение'),
            'og_video' => Yii::t('app', 'Og Видео'),
            'og_locale' => Yii::t('app', 'Og Locale'),
            'og_siteName' => Yii::t('app', 'Og Сайт'),
            'main_img' => Yii::t('app', 'Основное изображение'),
            'visible' => Yii::t('app', 'Отображение'),
            'sort' => Yii::t('app', 'Сортировка вывода'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPagesLangs()
    {
        return $this->hasMany(PagesLang::className(), ['item_id' => 'id']);
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
        $data_lang = $this->getPagesLangs()->where(['lang'=>$language])->one();
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

        if(!empty($this->langTitle1)){
            foreach ($this->langTitle1 as $lang => $item){

                $key_id = key($item);
                $lang = PagesLang::find()->where(['lang_id' => $lang])->andWhere(['id'=>$key_id])->one();

                if(!empty($lang)){
                    $lang->title_1 = array_pop($item);

                    $lang->seo_title = $this->seoTitle[$lang->lang_id][$key_id];
                    $lang->seo_keywords = $this->seoKeywords[$lang->lang_id][$key_id];
                    $lang->seo_description = $this->seoDescription[$lang->lang_id][$key_id];

                    $lang->og_title = $this->ogTitle[$lang->lang_id][$key_id];
                    $lang->og_description = $this->ogDescription[$lang->lang_id][$key_id];


                    $lang->text_1 = $this->langText1[$lang->lang_id][$key_id];

                    $lang->title_2 = $this->langTitle2[$lang->lang_id][$key_id];
                    $lang->text_2 = $this->langText2[$lang->lang_id][$key_id];

                    $lang->title_3 = $this->langTitle3[$lang->lang_id][$key_id];
                    $lang->text_3 = $this->langText3[$lang->lang_id][$key_id];

                    $lang->title_4 = $this->langTitle4[$lang->lang_id][$key_id];
                    $lang->text_4 = $this->langText4[$lang->lang_id][$key_id];

                    $lang->title_5 = $this->langTitle5[$lang->lang_id][$key_id];
                    $lang->text_5 = $this->langText5[$lang->lang_id][$key_id];

                    $lang->title_6 = $this->langTitle6[$lang->lang_id][$key_id];
                    $lang->text_6 = $this->langText6[$lang->lang_id][$key_id];

                    $lang->title_7 = $this->langTitle7[$lang->lang_id][$key_id];
                    $lang->text_7 = $this->langText7[$lang->lang_id][$key_id];


                    $lang->save();
                }
            }
        };

        if(!empty($this->langTitle1New)) {

            foreach ($this->langTitle1New as $lang_id => $data) {


                $lang = Lang::find()->where(['id' => $lang_id])->one()->local;


                $itemTitle1 = (is_array($data) ? array_pop($data) : '');
                $itemText1 = (is_array($this->langText1New) ? array_pop($this->langText1New[$lang_id]) : '');

                $itemSeoTitle = (is_array($this->seoTitleNew) ? array_pop($this->seoTitleNew[$lang_id]) : '');
                $itemSeoKeywords = (is_array($this->seoKeywordsNew) ? array_pop($this->seoKeywordsNew[$lang_id]) : '');
                $itemSeoDescription = (is_array($this->seoDescriptionNew) ? array_pop($this->seoDescriptionNew[$lang_id]) : '');

                $itemOgTitle = (is_array($this->ogTitleNew) ? array_pop($this->ogTitleNew[$lang_id]) : '');
                $itemOgDescription = (is_array($this->ogDescriptionNew) ? array_pop($this->ogDescriptionNew[$lang_id]) : '');

                $itemTitle2 = (is_array($this->langTitle2New) ? array_pop($this->langTitle2New[$lang_id]) : '');
                $itemText2 = (is_array($this->langText2New) ? array_pop($this->langText2New[$lang_id]) : '');

                $itemTitle3 = (is_array($this->langTitle3New) ? array_pop($this->langTitle3New[$lang_id]) : '');
                $itemText3 = (is_array($this->langText3New) ? array_pop($this->langText3New[$lang_id]) : '');

                $itemTitle4 = (is_array($this->langTitle4New) ? array_pop($this->langTitle4New[$lang_id]) : '');
                $itemText4 = (is_array($this->langText4New) ? array_pop($this->langText4New[$lang_id]) : '');

                $itemTitle5 = (is_array($this->langTitle5New) ? array_pop($this->langTitle5New[$lang_id]) : '');
                $itemText5 = (is_array($this->langText5New) ? array_pop($this->langText5New[$lang_id]) : '');

                $itemTitle6 = (is_array($this->langTitle6New) ? array_pop($this->langTitle6New[$lang_id]) : '');
                $itemText6 = (is_array($this->langText6New) ? array_pop($this->langText6New[$lang_id]) : '');

                $itemTitle7 = (is_array($this->langTitle7New) ? array_pop($this->langTitle7New[$lang_id]) : '');
                $itemText7 = (is_array($this->langText7New) ? array_pop($this->langText7New[$lang_id]) : '');



                $item = new PagesLang();

                $item->item_id = $this->id;
                $item->lang_id = $lang_id;
                $item->lang = $lang;

                $item->seo_title = (!empty($itemSeoTitle) ? $itemSeoTitle : '');
                $item->seo_keywords = (!empty($itemSeoKeywords) ? $itemSeoKeywords : '');
                $item->seo_description = (!empty($itemSeoDescription) ? $itemSeoDescription : '');

                $item->og_title = (!empty($itemOgTitle) ? $itemOgTitle : '');
                $item->og_description = (!empty($itemOgDescription) ? $itemOgDescription : '');

                $item->title_1 = (!empty($itemTitle1) ? $itemTitle1 : '');
                $item->text_1 = (!empty($itemText1) ? $itemText1 : '');

                $item->title_2 = (!empty($itemTitle2) ? $itemTitle2 : '');
                $item->text_2 = (!empty($itemText2) ? $itemText2 : '');

                $item->title_3 = (!empty($itemTitle3) ? $itemTitle3 : '');
                $item->text_3 = (!empty($itemText3) ? $itemText3 : '');


                $item->title_4 = (!empty($itemTitle4) ? $itemTitle4 : '');
                $item->text_4 = (!empty($itemText4) ? $itemText4 : '');

                $item->title_5 = (!empty($itemTitle5) ? $itemTitle5 : '');
                $item->text_5 = (!empty($itemText5) ? $itemText5 : '');

                $item->title_6 = (!empty($itemTitle6) ? $itemTitle6 : '');
                $item->text_6 = (!empty($itemText6) ? $itemText6 : '');

                $item->title_7 = (!empty($itemTitle7) ? $itemTitle7 : '');
                $item->text_7 = (!empty($itemText7) ? $itemText7 : '');

                $item->save();
            }
        }

    }

    public static function getValue($id, $langId){

        return PagesLang::find()->where(['item_id' => $id])->andWhere(['lang_id' => $langId])->one();
    }


    public function getPage($id){

        return Pages::find()->where(['id' => $id])->one();
    }
}

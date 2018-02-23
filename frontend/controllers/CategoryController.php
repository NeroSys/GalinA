<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 2/11/18
 * Time: 12:45 PM
 */

namespace frontend\controllers;


use common\models\Category;
use common\models\Products;
use common\models\Pages;
use yii\web\Controller;

use yii\data\Pagination;
use yii\web\HttpException;


class CategoryController extends AppController
{

    public function actionView($slug){

        $category = Category::find()->where(['slug' => $slug])->one();

        if (empty($category))
            throw new HttpException(404, 'The request is incorrect. Try new one, please.');


        $query = Products::find()->where(['category_id' => $category->id]);

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 12, 'forcePageParam' => false, 'pageSizeParam' => false] );

        $products = $query->offset($pages->offset)->limit($pages->limit)->all();


//        $page = Pages::find()->where(['slug' => 'category'])->one();

        if (!empty($page)){
            $name = $category->getSEO($page->id);
        }

        if(!empty($name)) {

            $lang_name = $name->getDataItems();


            $this->setMeta(
                $lang_name['title'],
                $lang_name['keywords'],
                $lang_name['description'],
                $lang_name['title'],
                $name->type,
                $name->img,
                $name->url,
                true,
                true,
                $lang_name['description'],
                $name->video,
                \Yii::$app->language,
                true,
                $name->localeAlternative,
                $name->GAuthor,
                $name->GPublisher,
                $name->app_id

            );
        }else{
            $this->setMeta('Galin-A | Магия крестиков');
        }


        return $this->render('view', compact('category', 'products', 'pages'));
    }
}
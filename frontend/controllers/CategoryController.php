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


        return $this->render('view', compact('category', 'products', 'pages'));
    }
}
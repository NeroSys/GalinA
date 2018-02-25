<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 2/24/18
 * Time: 8:15 PM
 */

namespace frontend\controllers;

use Yii;
use common\models\Category;
use common\models\Products;
use common\models\Currency;

class ProductController extends AppController
{

    public function actionView($slug){


        $product = Products::find()->where(['slug' => $slug])->one();

        $category = Category::find()->where(['id' => $product->category_id])->one();

        $goods = Products::find()->where(['category_id' => $product->category_id])->all();

        $currency = Currency::find()->where(['default' => 1])->one();


     return $this->render('view', compact('product', 'category', 'goods', 'currency'));
    }

}
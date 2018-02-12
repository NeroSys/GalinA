<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 10/4/17
 * Time: 5:01 PM
 */

namespace frontend\widgets;

use yii\base\Widget;
use common\models\Category;

class MenuWidget extends Widget
{

    public $tpl;

    public function init()
    {
        parent::init();


    }

    public function run()
    {

        $menu = \Yii::$app->cache->get('categories');

        if ($menu) return $menu;

        $categories = Category::find()->where(['parent_id' => null])->all();

        \Yii::$app->cache->set('menu', $categories, 30);

        if ($this->tpl == 'top'){

            return $this->render('menu/top', compact('categories'));

        }elseif ($this->tpl == 'left') {

            return $this->render('menu/left', compact('categories'));

        }elseif ($this->tpl == 'footer'){

            return $this->render('menu/footer', compact('categories'));
        }


    }
}
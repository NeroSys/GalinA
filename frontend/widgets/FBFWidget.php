<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 2/11/18
 * Time: 11:39 PM
 */

namespace frontend\widgets;


use Yii;
use yii\base\Widget;
use common\models\Questions;

class FBFWidget extends Widget
{
    public $productId;

    public function init()
    {
        parent::init();


    }

    public function run()
    {
        $model = new Questions();

        if ($model->load(Yii::$app->request->post())) {

            Yii::$app->session->setFlash('contactFormSubmitted');
        }
        return $this->render('messages/fbfWidget', [
            'model' => $model,
        ]);
    }

}
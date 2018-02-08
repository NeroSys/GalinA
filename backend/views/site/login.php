<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Авторизация';
?>


<div id="login" class="animate form">
    <section class="login_content">

            <h1>Login:</h1>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <div>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            </div>
            <div>
                <?= $form->field($model, 'password')->passwordInput() ?>
            </div>
            <div>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
            <div>
                <?= Html::submitButton('Log in', ['class' => 'btn btn-default submit', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
            <div class="clearfix"></div>
            <div class="separator">

                <div class="clearfix"></div>
                <br />
                <div>
                    <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Your site name!</h1>

                    <p>©2017-2018 All Rights Reserved. NeRo sys.</p>
                </div>
            </div>

        <!-- form -->
    </section>
    <!-- content -->
</div>



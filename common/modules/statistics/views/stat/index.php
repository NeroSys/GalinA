<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\widgets\Pjax;



$this->title = Yii::t('app', 'Статистика');
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Page content -->
<div id="page-content">

                <!-- Products Block -->
                <div class="block">
                    <!-- Products Title -->
                    <div class="block-title">
                        <h2><strong>Статистика посещений по IP</strong></h2>
                    </div>
                    <!-- END Products Title -->
                    <?php echo $this->render('default',[
                        'count_ip'=> $count_ip,
                        'stat_ip' => $stat_ip,
                    ]); ?>

                </div>
                <!-- END Products Block -->
    <!-- Order Status -->
    <div class="row text-center">
        <div class="col-sm-12 col-lg-12">
            <div class="widget">
                <?php $form = ActiveForm::begin(); ?>
                <?=$form->field($count_model, 'reset')->hiddenInput(['value' => true])->label(false)?>
                <div class="block-section">
                    <?=Html::submitButton('Сбросить фильтры', ['class' => 'btn btn-block btn-primary']); ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
    <!-- END Order Status -->
                <!-- Addresses -->
                <div class="row">
                    <div class="col-sm-4">
                        <!-- Billing Address Block -->
                        <div class="block">
                            <!-- Billing Address Title -->
                            <div class="block-title">
                                <h2><i class="fa fa-building-o"></i> <strong>Сформировать за указанную дату</strong></h2>
                            </div>
                            <!-- END Billing Address Title -->

                            <!-- Billing Address Content -->
                            <h4>Выберите дату</h4>
                            <address>
                                <?php $form = ActiveForm::begin(); ?>
                                <?=$form->field($count_model, 'date_ip')->widget(DatePicker ::classname(), [
                                    'dateFormat' => 'dd.MM.yyyy',
                                    'language' => 'ru',
                                    'clientOptions' => [
                                        'yearRange' => '2017:2027',
                                        'changeMonth' => 'true',
                                        'changeYear' => 'true',
                                        'firstDay' => '1',
                                    ]
                                ])->label(false) ?>
                                <?=Html::submitButton('Отфильтровать', ['class' => 'btn btn-block btn-primary']); ?>
                                <?php ActiveForm::end(); ?>
                            </address>
                            <!-- END Billing Address Content -->
                        </div>
                        <!-- END Billing Address Block -->
                    </div>
                    <div class="col-sm-4">
                        <!-- Billing Address Block -->
                        <div class="block">
                            <!-- Billing Address Title -->
                            <div class="block-title">
                                <h2><i class="fa fa-building-o"></i> <strong>Сформировать по определенному IP</strong></h2>
                            </div>
                            <!-- END Billing Address Title -->

                            <!-- Billing Address Content -->
                            <h4>Введите IP</h4>
                            <address>
                                <?php $form = ActiveForm::begin(); ?>

                                <?=$form->field($count_model, 'ip', [
                                    'inputOptions' => [
                                        'size'=> 20,
                                    ]])->textInput(['value'=>''])->label('IP') ?>
                                <?=Html::submitButton('Отфильтровать', ['class' => 'btn btn-block btn-primary']); ?>
                                <?php ActiveForm::end(); ?>
                            </address>
                            <!-- END Billing Address Content -->
                        </div>
                        <!-- END Billing Address Block -->
                    </div>
                    <div class="col-sm-4">
                        <!-- Shipping Address Block -->
                        <div class="block">
                            <!-- Shipping Address Title -->
                            <div class="block-title">
                                <h2><i class="fa fa-building-o"></i> <strong>Сформировать за выбранный период</strong></h2>
                            </div>
                            <!-- END Shipping Address Title -->

                            <!-- Shipping Address Content -->

                            <address>
                                <?php $form = ActiveForm::begin(); ?>

                                <?=$form->field($count_model, 'start_time')->widget(DatePicker ::classname(), [
                                    'dateFormat' => 'dd.MM.yyyy',
                                    'language' => 'ru',
                                    'clientOptions' => [
                                        'yearRange' => '2017:2027',
                                        'changeMonth' => 'true',
                                        'changeYear' => 'true',
                                        'firstDay' => '1',
                                    ]
                                ])->label('ОТ') ?>
                                <?=$form->field($count_model, 'stop_time')->widget(DatePicker ::classname(), [
                                    'dateFormat' => 'dd.MM.yyyy',
                                    'language' => 'ru',
                                    'clientOptions' => [
                                        'yearRange' => '2017:2027',
                                        'changeMonth' => 'true',
                                        'changeYear' => 'true',
                                        'firstDay' => '1',
                                    ]
                                ])->label('ДО')  ?>
                                <?=Html::submitButton('Отфильтровать', ['class' => 'btn btn-block btn-primary']); ?>
                                <?php ActiveForm::end(); ?>
                            </address>
                            <!-- END Shipping Address Content -->
                        </div>
                        <!-- END Shipping Address Block -->
                    </div>

                </div>
                <!-- END Addresses -->

                <!-- Log Block -->
                <div class="block">
                    <!-- Log Title -->
                    <div class="block-title">
                        <h2><i class="fa fa-file-text-o"></i> <strong>Черный список</strong> IP</h2>
                    </div>
                    <!-- END Log Title -->

                    <!-- Log Content -->
                    <div class="table-responsive">
                        <div>
                            <p>Под черным списком понимаются IP, по которым не нужна статистика, например IP администратора сайта.
                                Поисковые боты отфильтровываются специальной функцией и попасть в общую статистику не должны.
                                <br>По данным IP статистика не будет сохраняться с момента добавления в черный список.</p>
                        </div>
                        <table class="table table-bordered table-vcenter">
                            <tbody>
                            <tr>
                                <?php
                                $black_list = $count_model->count_black_list();

                                echo "<h4>Сейчас в черном списке:</h4>";
                                foreach($black_list as $key=>$value){
                                    echo "<td>". $value['ip'];
                                    if(!empty($value['comment'])) echo " - ". $value['comment'];
                                    echo "</td>";
                                }
                                if(count($black_list)==0) echo "<td>Черный список пуст.</td>";
                                ?>
                            </tr>

                            </tbody>
                        </table>


                    </div>
                    <!-- END Log Content -->
                </div>
                <!-- END Log Block -->

                <!-- Addresses -->
                <div class="row">
        <div class="col-sm-4">
            <!-- Billing Address Block -->
            <div class="block">
                <!-- Billing Address Title -->
                <div class="block-title">
                    <h2><i class="fa fa-building-o"></i> <strong>Добавление в черный список:</strong></h2>
                </div>
                <!-- END Billing Address Title -->

                <!-- Billing Address Content -->

                <address>
                          <?php $form = ActiveForm::begin(); ?>
                          <?=$form->field($count_model, 'ip', [
                              'inputOptions' => [
                                  'size'=> 20,
                              ]])->textInput(['value'=>''])->label('IP address') ?>

                          <?=$form->field($count_model, 'comment', [
                              'inputOptions' => [
                                  'size'=> 20,
                              ]])->label('Comment') ?>

                          <?=$form->field($count_model, 'add_black_list')->hiddenInput(['value' => true])->label(false)?>
                          <?=Html::submitButton('Добавить', ['class' => 'btn btn-warning']); ?>
                          <?php ActiveForm::end(); ?>
                          <br>

                </address>
                <!-- END Billing Address Content -->
            </div>
            <!-- END Billing Address Block -->
        </div>
        <div class="col-sm-4">
            <!-- Billing Address Block -->
            <div class="block">
                <!-- Billing Address Title -->
                <div class="block-title">
                    <h2><i class="fa fa-building-o"></i> <strong>Удаление из черного списка</strong></h2>
                </div>
                <!-- END Billing Address Title -->

                <!-- Billing Address Content -->
                <h4>Введите IP</h4>
                <address>
                    <?php $form = ActiveForm::begin(); ?>
                    <?=$form->field($count_model, 'ip', [
                        'inputOptions' => [
                            'size'=> 20,
                        ]])->textInput(['value'=>''])->label('IP') ?>
                    <?=$form->field($count_model, 'del_black_list')->hiddenInput(['value' => true])->label(false)?>
                    <?=Html::submitButton('Удалить из черного списка', ['class' => 'btn btn-success']); ?>
                    <?php ActiveForm::end(); ?>
                </address>
                <!-- END Billing Address Content -->
            </div>
            <!-- END Billing Address Block -->
        </div>
                    <div class="col-sm-4">
                        <!-- Billing Address Block -->
                        <div class="block">
                            <!-- Billing Address Title -->
                            <div class="block-title">
                                <h2><i class="fa fa-building-o"></i> <strong>Статистика</strong> по поисковым роботам за последний месяц</h2>
                            </div>
                            <!-- END Billing Address Title -->

                            <!-- Billing Address Content -->
                            <h4>Введите IP</h4>
                            <address>
                                <?php Pjax::begin(['enablePushState' => false]); ?>
                                <?php $form = ActiveForm::begin([
                                    'options' => [
                                        'data-pjax' => true,
                                    ]]); ?>
                                <?=$form->field($bot_model, 'get_bot_stat')->hiddenInput(['value' => true])->label(false)?>
                                <?=Html::submitButton('Сформировать', ['class' => 'btn btn-primary']); ?>
                                <?php ActiveForm::end(); ?>
                                <?php Pjax::end(); ?>
                            </address>
                            <!-- END Billing Address Content -->
                        </div>
                        <!-- END Billing Address Block -->
                    </div>
    </div>
                <!-- END Addresses -->

                <!-- Log Block -->
                <div class="block">
        <!-- Log Title -->
        <div class="block-title">
            <h2><i class="fa fa-file-text-o"></i> <strong>Очистка базы данных</strong> (старше 90 дней)</h2>
        </div>
        <!-- END Log Title -->

        <!-- Log Content -->
        <div class="table-responsive">

            <table class="table table-bordered table-vcenter">
                <tbody>
                <?php Pjax::begin(['enablePushState' => false]); ?>
                <?php $form = ActiveForm::begin([
                    'options' => [
                        'data-pjax' => true,
                    ]]); ?>
                <?=$form->field($count_model, 'del_old')->hiddenInput(['value' => true])->label(false)?>
                <?=Html::submitButton('Удалить старые данные', ['class' => 'btn btn-block btn-primary']); ?>
                <?php ActiveForm::end(); ?>
                <?php Pjax::end(); ?>

                </tbody>
            </table>


        </div>
        <!-- END Log Content -->
    </div>
                <!-- END Log Block -->
            </div>
<!-- END Page Content -->


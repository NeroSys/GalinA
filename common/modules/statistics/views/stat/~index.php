<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\Pjax;
use app\modules\statistics\assets\StatAsset;

?>

<h1>Статистика посещений по IP</h1>
<div id="stat_ip">

    <?php echo $this->render('default',[
        'count_ip'=> $count_ip,
        'stat_ip' => $stat_ip,
    ]); ?>

    <?php $form = ActiveForm::begin(); ?>
    <?=$form->field($count_model, 'reset')->hiddenInput(['value' => true])->label(false)?>
    <div class="button-reset">
        <?=Html::submitButton('Сбросить фильтры'); ?>
    </div>
    <?php ActiveForm::end(); ?>
    <hr>

    <div class="button-reset">
    <?php $form = ActiveForm::begin(); ?>


        <h4>Сформировать за указанную дату</h4>
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
    <?=Html::submitButton('Отфильтровать'); ?>
    <?php ActiveForm::end(); ?>
    </div>
    <hr>

    <div class="button-reset">
    <?php $form = ActiveForm::begin(); ?>

    <h4>Сформировать за выбранный период </h4>
    <?=$form->field($count_model, 'start_time')->widget(DatePicker ::classname(), [
        'dateFormat' => 'dd.MM.yyyy',
        'language' => 'ru',
        'clientOptions' => [
            'yearRange' => '2017:2027',
            'changeMonth' => 'true',
            'changeYear' => 'true',
            'firstDay' => '1',
        ]
    ])->label('Начало') ?>
    <?=$form->field($count_model, 'stop_time')->widget(DatePicker ::classname(), [
        'dateFormat' => 'dd.MM.yyyy',
        'language' => 'ru',
        'clientOptions' => [
            'yearRange' => '2017:2027',
            'changeMonth' => 'true',
            'changeYear' => 'true',
            'firstDay' => '1',
        ]
    ])->label('Конец  ')  ?>
    <?=Html::submitButton('Отфильтровать'); ?>
    <?php ActiveForm::end(); ?>
    <hr>
    </div>

    <div class="button-reset">
    <?php $form = ActiveForm::begin(); ?>
    <h4>Сформировать по определенному IP</h4>
    <?=$form->field($count_model, 'ip', [
        'inputOptions' => [
            'size'=> 20,
        ]])->textInput(['value'=>'127.0.0.1'])->label('IP') ?>
    <?=Html::submitButton('Отфильтровать'); ?>
    <?php ActiveForm::end(); ?>
    <hr>
    </div>

<div class="button-reset">
    <h4>Черный список IP</h4>
    <p>Под черным списком понимаются IP, по которым не нужна статистика, например IP администратора сайта.
        Поисковые боты отфильтровываются специальной функцией и попасть в общую статистику не должны.
        <br>По данным IP статистика не будет сохраняться с момента добавления в черный список.</p>
</div>
    <table>
        <tr class='tr_small'>
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
    </table>
    <br>

<div class="button-reset">
    <?php $form = ActiveForm::begin(); ?>
    <?=$form->field($count_model, 'ip', [
        'inputOptions' => [
            'size'=> 20,
        ]])->textInput(['value'=>'127.0.0.1'])->label('IP') ?>

    <?=$form->field($count_model, 'comment', [
        'inputOptions' => [
            'size'=> 20,
        ]])->label('Комментарий') ?>

    <?=$form->field($count_model, 'add_black_list')->hiddenInput(['value' => true])->label(false)?>
    <?=Html::submitButton('Добавить в черный список'); ?>
    <?php ActiveForm::end(); ?>
    <br>

    <?php $form = ActiveForm::begin(); ?>
    <?=$form->field($count_model, 'ip', [
        'inputOptions' => [
            'size'=> 20,
        ]])->textInput(['value'=>'127.0.0.1'])->label('IP') ?>
    <?=$form->field($count_model, 'del_black_list')->hiddenInput(['value' => true])->label(false)?>
    <?=Html::submitButton('Удалить из черного списка'); ?>
    <?php ActiveForm::end(); ?>
    <hr>

    <h4>Статистика по поисковым роботам за последний месяц</h4>
    <?php Pjax::begin(['enablePushState' => false]); ?>
    <?php $form = ActiveForm::begin([
        'options' => [
            'data-pjax' => true,
        ]]); ?>
    <?=$form->field($bot_model, 'get_bot_stat')->hiddenInput(['value' => true])->label(false)?>
    <?=Html::submitButton('Сформировать'); ?>
    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?>
    <hr>

    <h4>Очистка базы данных <span class="font_min">(старше 90 дней)</span></h4>
    <?php Pjax::begin(['enablePushState' => false]); ?>
    <?php $form = ActiveForm::begin([
        'options' => [
            'data-pjax' => true,
        ]]); ?>
    <?=$form->field($count_model, 'del_old')->hiddenInput(['value' => true])->label(false)?>
    <?=Html::submitButton('Удалить старые данные'); ?>
    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?>
</div>
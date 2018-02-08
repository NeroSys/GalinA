<?php
namespace common\modules\rbac\user;

use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = 'Управление правами доступа';

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Пользователи'), 'url' => ['/user/index']];
$this->params['breadcrumbs'][] = ['label' => $user->getUserName(), 'url' => ['/user/view', 'id' => $user->id]];
$this->params['breadcrumbs'][] = $this->title;

?>



<div id="page-content">
    <div class="block full">
<h3><?=Yii::t('db_rbac', 'Управление ролями пользователя');?> <?= $user->getUserName(); ?></h3>
<?php $form = ActiveForm::begin(['action' => ["update", 'id' => $user->getId()]]); ?>

<?= Html::checkboxList('roles', $user_permit, $roles, ['separator' => '<br>']); ?>

<div class="form-group">
    <?= Html::submitButton(Yii::t('db_rbac', 'Сохранить'), ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

    </div>
</div>
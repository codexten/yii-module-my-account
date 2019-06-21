<?php

use codexten\yii\modules\my\account\forms\PasswordForm;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model PasswordForm */
?>

<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'old_password')->passwordInput() ?>

<?= $form->field($model, 'new_password')->passwordInput() ?>

<?= $form->field($model, 'repeat_password')->passwordInput() ?>

<div class="form-group">

    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-primary']) ?>

</div>

<?php ActiveForm::end() ?>

<?php

use codexten\yii\modules\geo\models\Province;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model Province */
?>


<?php $form = ActiveForm::begin() ?>

<?= $this->render('form/_fields', compact(['model', 'form'])) ?>

<div class="form-group">

    <?= Html::submitButton(
        $model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

</div>

<?php ActiveForm::end() ?>

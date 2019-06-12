<?php

use codexten\yii\modules\my\account\models\ProfileInterface;
use codexten\yii\web\widgets\UpdatePage;

/* @var $this yii\web\View */
/* @var $model ProfileInterface */

$this->title = 'Update Profile';
?>
<?php $page = UpdatePage::begin() ?>

<?php $page->beginContent('form') ?>

<?= $this->render('_form', ['model' => $model]) ?>

<?php $page->endContent() ?>

<?php $page->end() ?>

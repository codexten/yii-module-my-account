<?php

use codexten\yii\modules\my\account\forms\PasswordForm;
use codexten\yii\web\widgets\Page;
use yii\web\View;

/* @var $this View */
/* @var $model PasswordForm */

$this->title = 'Password';
?>
<?php $page = Page::begin() ?>

<div class="my-account-security-password">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <?= $this->render('password/_form', ['model' => $model]) ?>

        </div>
    </div>
</div>


<?php $page->end() ?>

<?php


namespace codexten\yii\modules\my\account\controllers;


use codexten\yii\modules\my\account\forms\PasswordForm;
use codexten\yii\web\Controller;
use Yii;

class SecurityController extends Controller
{
    public function actionPassword()
    {
        $model = new PasswordForm();

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            Yii::$app->getSession()->setFlash('success', 'Password changed');

            return $this->refresh();
        }

        return $this->render('password', compact(['model']));

    }

}

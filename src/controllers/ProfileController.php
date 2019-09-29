<?php

namespace codexten\yii\modules\my\account\controllers;

use codexten\yii\modules\auth\helpers\UserHelper;
use codexten\yii\modules\my\account\models\ProfileInterface;
use Yii;
use yii\base\InvalidConfigException;
use yii\base\Model;
use yii\web\Controller;

class ProfileController extends Controller
{

    /**
     * @var string
     */
    public $modelClass;

    public function init()
    {
        parent::init();
        if ($this->modelClass === null) {
            throw new InvalidConfigException("modelClass not configured");
        }
    }

    public function actionUpdate()
    {
        /* @var $model ProfileInterface|Model */

        $model = $this->modelClass::findOne(['user_id' => UserHelper::getMyId()]);

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            Yii::$app->getSession()->setFlash('success', 'Profile updated');

            return $this->refresh();
        }

        return $this->render('update', [
            'model' => $model,
        ]);

    }
}

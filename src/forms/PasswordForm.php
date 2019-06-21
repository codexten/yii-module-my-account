<?php

namespace codexten\yii\modules\my\account\forms;

use codexten\yii\modules\auth\helpers\Password;
use codexten\yii\modules\auth\helpers\UserHelper;
use codexten\yii\modules\auth\models\User;
use yii\base\Model;

class PasswordForm extends Model
{
    public $old_password;
    public $new_password;
    public $repeat_password;

    /**
     * @var User
     */
    private $_user;

    public function init()
    {
        parent::init();
        $this->_user = User::findOne(UserHelper::getMyId());
    }

    /**
     * {@inheritDoc}
     */
    public function rules()
    {
        return [
            [['old_password', 'new_password', 'repeat_password'], 'required'],
            ['old_password', 'validateOldPassword'],
            ['repeat_password', 'compare', 'compareAttribute' => 'new_password'],
        ];
    }

    public function validateOldPassword($attribute, $params)
    {
        if (!Password::validate($this->old_password, $this->_user->password_hash)) {
            $this->addError($attribute, 'Old password is incorrect.');
        }
    }

    public function save()
    {
        if (!$this->validate()) {
            return false;
        }

        return $this->_user->setPasswordHash($this->new_password);
    }
}

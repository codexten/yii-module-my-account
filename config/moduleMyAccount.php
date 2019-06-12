<?php

use yii\base\Module;

return [
    'aliases' => [
        '@moduleMyAccount' => '@codexten/yii/modules/my/account',
    ],
    'modules' => [
        'myaccount' => [
            'class' => Module::class,
            'controllerNamespace' => 'codexten\yii\modules\my\account\controllers',
        ],
    ],
];

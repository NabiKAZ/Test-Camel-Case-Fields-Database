<?php

$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'components' => [
        'db' => $db,
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
	/*
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
	*/
}

return $config;

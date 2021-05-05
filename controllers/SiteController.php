<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Test;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
	
    public function actionIndex()
    {
		$model = Test::findOne(1);
        return $this->render('index', [
            'model' => $model,
        ]);
    }
}

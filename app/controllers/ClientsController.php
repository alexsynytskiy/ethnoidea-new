<?php

namespace app\controllers;

use yii\web\Controller;

class ClientsController extends Controller
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
        \Yii::$app->seo->setTitle("Клієнтам");
        \Yii::$app->seo->setDescription('Етноідея');
        \Yii::$app->seo->setKeywords('етноідея, україна');

        return $this->render('index', []);
    }
}
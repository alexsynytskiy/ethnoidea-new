<?php

namespace app\controllers;

use yii\easyii\modules\gallery\api\Gallery;
use yii\web\Controller;

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
        \Yii::$app->seo->setTitle('Головна');
        \Yii::$app->seo->setDescription('Етноідея');
        \Yii::$app->seo->setKeywords('етноідея, україна');

        $partners = [];
        $gallery = Gallery::cat('partners');

        if ($gallery) {
            $partners = $gallery->photos();
        }

        return $this->render('index', [
            'partners' => $partners,
        ]);
    }
}

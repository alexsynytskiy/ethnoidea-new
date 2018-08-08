<?php

namespace app\controllers;

use yii\easyii\modules\page\api\Page;
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

    /**
     * @return string
     */
    public function actionIndex()
    {
        \Yii::$app->seo->setTitle("Клієнтам");
        \Yii::$app->seo->setDescription('Етноідея');
        \Yii::$app->seo->setKeywords('етноідея, україна');

        $block1 = Page::get(['clients-page-block-1']);
        $block2 = Page::get(['clients-page-block-2']);
        $block3 = Page::get(['clients-page-block-3']);

        return $this->render('index', [
            'block1' => $block1,
            'block2' => $block2,
            'block3' => $block3,
        ]);
    }
}

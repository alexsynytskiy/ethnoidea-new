<?php

namespace app\controllers;

use yii\easyii\modules\page\api\Page;
use yii\web\Controller;

/**
 * Class ContactController
 * @package app\controllers
 */
class ContactController extends Controller
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
        \Yii::$app->seo->setTitle("Контакти");
        \Yii::$app->seo->setDescription('Етноідея');
        \Yii::$app->seo->setKeywords('фундація, україна');

        $block1 = Page::get(['contact-page-block-1']);
        $block2 = Page::get(['contact-page-block-2']);

        return $this->render('index', [
            'block1' => $block1,
            'block2' => $block2,
        ]);
    }
}

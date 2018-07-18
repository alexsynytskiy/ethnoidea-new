<?php

namespace app\controllers;

use app\components\PublicationsQuery;
use yii\easyii\components\helpers\CategoryHelper;
use yii\easyii\modules\page\api\Page;
use yii\web\Controller;

/**
 * Class BlogController
 * @package app\controllers
 */
class BlogController extends Controller
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
        \Yii::$app->seo->setTitle("Новини");
        \Yii::$app->seo->setDescription('');
        \Yii::$app->seo->setKeywords('');

        $news = PublicationsQuery::getList([CategoryHelper::CATEGORY_NEWS]);

        $block1 = Page::get(['blog-page-block-1']);

        return $this->render('index', [
            'news' => $news,
            'block1' => $block1,
        ]);
    }
}

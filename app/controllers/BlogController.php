<?php

namespace app\controllers;

use app\components\PublicationsQuery;
use yii\easyii\components\helpers\CategoryHelper;
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

    public function actionIndex()
    {
        \Yii::$app->seo->setTitle("Новини");
        \Yii::$app->seo->setDescription('');
        \Yii::$app->seo->setKeywords('');

        $news = PublicationsQuery::getList([CategoryHelper::CATEGORY_NEWS]);

        $showLoadMore = false;
        if (count($news) > 6) {
            $showLoadMore = true;
            array_pop($news);
        }

        return $this->render('index', [
            'news' => $news,
            'showLoadMore' => $showLoadMore,
        ]);
    }
}
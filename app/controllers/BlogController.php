<?php

namespace app\controllers;

use yii\easyii\components\helpers\CategoryHelper;
use yii\easyii\components\helpers\LanguageHelper;
use yii\easyii\modules\news\api\News;
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
     * @param     $category
     * @param int $limit
     *
     * @return array|null
     */
    public function getNewsList($category = [
        CategoryHelper::CATEGORY_NEWS,
        CategoryHelper::CATEGORY_PORTFOLIO], $limit = 9)
    {
        $news = null;

        if (\Yii::$app->language !== LanguageHelper::LANG_UA) {
            $news = News::items([
                'limit' => $limit,
                'language' => 'en',
                'where' => [
                    'category' => $category,
                ],
            ]);
        } else {
            $news = News::items([
                'limit' => $limit,
                'tags' => \Yii::$app->request->get('tag'),
                'where' => [
                    'category' => $category,
                ],
            ]);
        }

        return $news;
    }

    public function actionIndex()
    {
        \Yii::$app->seo->setTitle("Новини");
        \Yii::$app->seo->setDescription('');
        \Yii::$app->seo->setKeywords('');

        $news = $this->getNewsList([
            CategoryHelper::CATEGORY_NEWS
        ]);

        $showLoadMore = false;
        if (count($news) > 6) {
            $showLoadMore = true;
            array_pop($news);
        }

        $tag = \Yii::$app->request->get('tag');

        return $this->render('index', [
            'news' => $news,
            'showLoadMore' => $showLoadMore,
        ]);
    }
}
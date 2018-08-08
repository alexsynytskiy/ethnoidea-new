<?php

namespace app\controllers;

use app\components\PublicationsQuery;
use yii\easyii\components\helpers\CategoryHelper;
use yii\easyii\components\helpers\LanguageHelper;
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\page\api\Page;
use yii\web\Controller;

/**
 * Class PortfolioController
 * @package app\controllers
 */
class PortfolioController extends Controller
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
        \Yii::$app->seo->setTitle("Портфоліо");
        \Yii::$app->seo->setDescription('Етноідея');
        \Yii::$app->seo->setKeywords('етноідея, україна');

        $works = PublicationsQuery::getList([CategoryHelper::CATEGORY_PORTFOLIO]);

        $block1 = Page::get(['portfolio-page-block-1']);

        return $this->render('index', [
            'works' => $works,
            'block1' => $block1,
        ]);
    }

    /**
     * @param null $slug
     *
     * @return string
     */
    public function actionView($slug = null)
    {
        if (!$slug) {
            return $this->redirect(['news/index']);
        }

        $work = null;

        if (\Yii::$app->language !== LanguageHelper::LANG_UA) {
            $work = News::get([$slug, 'en']);
        } else {
            $work = News::get([$slug]);
        }

        isset($work->title) ? \Yii::$app->seo->setTitle($work->title) : null;
        isset($work->seo->description) ? \Yii::$app->seo->setDescription($work->seo->description) : null;
        isset($work->seo->keywords) ? \Yii::$app->seo->setKeywords($work->seo->keywords) : null;

        $block1 = Page::get(['portfolio-page-view-block-1']);

        return $this->render('view', [
            'work' => $work,
            'block1' => $block1,
        ]);
    }
}

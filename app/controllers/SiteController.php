<?php

namespace app\controllers;

use app\components\PublicationsQuery;
use yii\easyii\components\helpers\CategoryHelper;
use yii\easyii\modules\gallery\api\Gallery;
use yii\easyii\modules\page\api\Page;
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

        $block1 = Page::get(['main-page-block-1']);
        $block2 = Page::get(['main-page-block-2']);
        $block3 = Page::get(['main-page-block-3']);
        $block4 = Page::get(['main-page-block-4']);
        $block5 = Page::get(['main-page-block-5']);

        $portfolioExamples = PublicationsQuery::getList([CategoryHelper::CATEGORY_PORTFOLIO], 2);

        $partners = [];
        $gallery = Gallery::cat('partners');

        if ($gallery) {
            $partners = $gallery->photos();
        }

        return $this->render('index', [
            'portfolioExamples' => $portfolioExamples,
            'block1' => $block1,
            'block2' => $block2,
            'block3' => $block3,
            'block4' => $block4,
            'block5' => $block5,
            'partners' => $partners,
        ]);
    }
}

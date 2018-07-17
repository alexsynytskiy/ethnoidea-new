<?php

namespace app\components;

use yii\base\Object;
use yii\easyii\components\helpers\LanguageHelper;
use yii\easyii\modules\news\api\News;

/**
 * Class PublicationsQuery
 * @package app\components
 */
class PublicationsQuery extends Object
{
    /**
     * @param     $category
     * @param int $limit
     *
     * @return array|null
     */
    public static function getList($category, $limit = 9)
    {
        $works = null;

        if (\Yii::$app->language !== LanguageHelper::LANG_UA) {
            $works = News::items([
                'limit' => $limit,
                'language' => 'en',
                'where' => [
                    'category' => $category,
                ],
            ]);
        } else {
            $works = News::items([
                'limit' => $limit,
                'tags' => \Yii::$app->request->get('tag'),
                'where' => [
                    'category' => $category,
                ],
            ]);
        }

        return $works;
    }
}

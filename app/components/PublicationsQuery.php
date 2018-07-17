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
        return News::items([
            'limit' => $limit,
            //'tags' => \Yii::$app->request->get('tag'),
            'language' => \Yii::$app->language !== LanguageHelper::LANG_UA ? 'en' : 'uk',
            'where' => [
                'category' => $category,
            ],
        ]);
    }
}

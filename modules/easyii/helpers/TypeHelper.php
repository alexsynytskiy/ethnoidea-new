<?php
namespace yii\easyii\helpers;

use Yii;

/**
 * Class TypeHelper
 * @package yii\easyii\helpers
 */
class TypeHelper
{
    const JUR_OSOBA = 'jur-osoba';
    const FIZ_OSOBA = 'fiz-osoba';

    /**
     * Parse list array and return required data for incoming option
     *
     * @param array $data
     * @param string $returnType define structure of return array.
     *                           Allow variants: { 'key-value', 'keys', 'values' }
     *
     * @return array|null
     */
    public static function getListDataByReturnType($data, $returnType = 'key-value')
    {
        switch ($returnType) {
            case 'key-value':
                return $data;
            case 'keys':
                return array_keys($data);
            case 'values':
                return array_values($data);
            default:
                return null;
        }
    }

    /**
     * @param string $key
     * @return mixed
     */
    public static function getValue($key)
    {
        $statuses = [
            self::JUR_OSOBA => 'Юридична особа',
            self::FIZ_OSOBA => 'Фізична особа',
        ];

        return $statuses[$key];
    }

    /**
     * @param string $returnType
     *
     * @see BaseDefinition::getListDataByReturnType()
     *
     * @return array
     */
    public static function getListRules($returnType = 'key-value')
    {
        $statuses = [
            self::JUR_OSOBA => 'Юридична особа',
            self::FIZ_OSOBA => 'Фізична особа',
        ];

        return static::getListDataByReturnType($statuses, $returnType);
    }
}

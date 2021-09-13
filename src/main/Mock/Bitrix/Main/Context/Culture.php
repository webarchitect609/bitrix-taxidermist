<?php
/** @noinspection PhpDocRedundantThrowsInspection */
/** @noinspection PhpMissingReturnTypeInspection */
/** @noinspection PhpUnusedParameterInspection */
/** @noinspection PhpPluralMixedCanBeReplacedWithArrayInspection */
/** @noinspection PhpMissingParamTypeInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Context;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

class Culture
{
    /**
     * @var array<mixed>
     */
    protected $fields;

    public function __construct($fields = null)
    {
    }

    /**
     * @param int $cultureId
     *
     * @return null|Culture
     */
    public static function wakeUp($cultureId)
    {
        return new static;
    }

    /**
     * @throws Main\ObjectPropertyException
     * @return string
     */
    public function getDateTimeFormat()
    {
        return '';
    }

    /**
     * @throws Main\ObjectPropertyException
     * @return string
     */
    public function getDateFormat()
    {
        return '';
    }

    /**
     * @throws Main\ObjectPropertyException
     * @return string
     */
    public function getCharset()
    {
        return '';
    }

    /**
     * @throws Main\ObjectPropertyException
     * @return string
     */
    public function getNameFormat()
    {
        return '';
    }
}

<?php

declare(strict_types=1);
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
     */
    public static function wakeUp($cultureId): ?Culture
    {
        return new static;
    }

    /**
     * @return string
     *
     * @throws Main\ObjectPropertyException
     */
    public function getDateTimeFormat()
    {
        return '';
    }

    /**
     * @return string
     *
     * @throws Main\ObjectPropertyException
     */
    public function getDateFormat()
    {
        return '';
    }

    /**
     * @return string
     *
     * @throws Main\ObjectPropertyException
     */
    public function getCharset()
    {
        return '';
    }

    /**
     * @return string
     *
     * @throws Main\ObjectPropertyException
     */
    public function getNameFormat()
    {
        return '';
    }
}

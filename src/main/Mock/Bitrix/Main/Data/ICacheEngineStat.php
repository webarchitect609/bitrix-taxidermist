<?php

declare(strict_types=1);
/** @noinspection PhpUnused */
/** @noinspection PhpUnusedParameterInspection */
/** @noinspection PhpDocRedundantThrowsInspection */
/** @noinspection PhpMissingReturnTypeInspection */
/** @noinspection PhpMissingParamTypeInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data;

interface ICacheEngineStat
{
    /**
     * @return false|int
     */
    public function getReadBytes();

    /**
     * @return false|int
     */
    public function getWrittenBytes();

    /**
     * @return string
     */
    public function getCachePath();
}

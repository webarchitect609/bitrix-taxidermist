<?php
/** @noinspection PhpUnusedParameterInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data;

interface ICacheEngineStat
{
    /**
     * @return false|integer
     */
    public function getReadBytes();

    /**
     * @return false|integer
     */
    public function getWrittenBytes();

    /**
     * @return string
     */
    public function getCachePath();
}

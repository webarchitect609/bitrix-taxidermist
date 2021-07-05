<?php
/** @noinspection PhpUnusedParameterInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data;

interface ICacheEngineStat
{
    /**
     * @return integer|false
     */
    public function getReadBytes();

    /**
     * @return integer|false
     */
    public function getWrittenBytes();

    /**
     * @return string
     */
    public function getCachePath();
}

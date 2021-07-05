<?php
/** @noinspection PhpUnusedParameterInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data;

interface ICacheEngineStat
{
    public function getReadBytes();
    public function getWrittenBytes();
    public function getCachePath();
}

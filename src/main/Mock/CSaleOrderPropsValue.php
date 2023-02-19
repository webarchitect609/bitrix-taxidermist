<?php
declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class CSaleOrderPropsValue
{
    public static function GetList($arOrder = [], $arFilter = [], $arGroupBy = false, $arNavStartParams = false, $arSelectFields = [])
    {
        return new CDBResult();
    }
}

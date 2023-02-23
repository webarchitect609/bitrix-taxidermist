<?php
declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class CSaleOrderPropsValue
{
    public static function GetList($arOrder = array(), $arFilter = array(), $arGroupBy = false, $arNavStartParams = false, $arSelectFields = array())
    {
        return new CDBResult();
    }
}
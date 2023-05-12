<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class CSaleUser extends CAllSaleUser
{
    public static function Add()
    {
        return 0;
    }

    public static function _Add($arFields)
    {
        return 0;
    }

    public static function DeleteOld($nDays)
    {
        return true;
    }

    public static function GetBuyersList($arOrder = [], $arFilter = [], $arGroupBy = false, $arNavStartParams = false, $arSelectFields = [])
    {
        return new CDBResult();
    }

    public static function GetUserID($intFUserID)
    {
        return 1;
    }
}

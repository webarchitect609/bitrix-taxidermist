<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class CUser extends CAllUser
{
    public static function GetByID($ID)
    {
        return new CDBResult();
    }

    public static function GetList($by = '', $order = '', $arFilter = [], $arParams = [])
    {
        return new CDBResult();
    }
}

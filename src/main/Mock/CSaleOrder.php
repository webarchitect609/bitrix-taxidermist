<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class CSaleOrder extends CAllSaleOrder
{
    public static function Add($arFields)
    {
        return true;
    }

    public static function Update($ID, $arFields, $bDateUpdate = true)
    {
        return 0;
    }

    public static function PrepareGetListArray($key, &$arFields, &$arPropIDsTmp)
    {
    }

    /**
     * @param array $arOrder
     * @param array $arFilter
     * @param array $arSelectFields
     * @param array $arOptions
     */
    public static function GetList($arOrder = ['ID' => 'DESC'], $arFilter = [], array|bool $arGroupBy = false, array|bool $arNavStartParams = false, $arSelectFields = [], $arOptions = []): bool|CDBResult
    {
        return new CDBResult();
    }

    public static function GetLockStatus($ID, &$lockedBY, &$dateLock)
    {
        return true;
    }

    /*
     * Change order to add stories
     *
     * @param array $arOrderOld old order fields
     * @return bool true
     */
    public static function AddOrderHistory($OldFields, $NewFields)
    {
        return true;
    }
}

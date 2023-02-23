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
     * @param array|bool $arGroupBy
     * @param array|bool $arNavStartParams
     * @param array $arSelectFields
     * @param array $arOptions
     * @return bool|CDBResult
     */
    public static function GetList($arOrder = ["ID"=>"DESC"], $arFilter = [], $arGroupBy = false, $arNavStartParams = false, $arSelectFields = [], $arOptions = [])
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

<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class CIBlockElement
{
    ///////////////////////////////////////////////////////////////////
    // Function returns lock status of element (red, yellow, green)
    ///////////////////////////////////////////////////////////////////
    public static function WF_GetLockStatus($ID, &$locked_by, &$date_lock)
    {
        return '';
    }

    ///////////////////////////////////////////////////////////////////
    // Locking element
    ///////////////////////////////////////////////////////////////////
    public static function WF_Lock($LAST_ID, $bWorkFlow = true)
    {
    }

    ///////////////////////////////////////////////////////////////////
    // Unlock element
    ///////////////////////////////////////////////////////////////////
    public static function WF_UnLock($LAST_ID, $bWorkFlow = true)
    {
    }

    ///////////////////////////////////////////////////////////////////
    // List the history items
    ///////////////////////////////////////////////////////////////////
    public static function WF_GetHistoryList($ELEMENT_ID, $by = 's_id', $order = 'desc', $arFilter = [])
    {
        return new CDBResult();
    }

    public function prepareSql($arSelectFields = [], $arFilter = [], $arGroupBy = false, $arOrder = ['SORT' => 'ASC'])
    {
    }

    /**
     * List of elements.
     *
     * @param array $arOrder
     * @param array $arFilter
     * @param array $arSelectFields
     */
    public static function GetList($arOrder = ['SORT' => 'ASC'], $arFilter = [], array|bool $arGroupBy = false, array|bool $arNavStartParams = false, $arSelectFields = []): CIBlockResult|int
    {
        return new CIBlockResult();
    }

    ///////////////////////////////////////////////////////////////////
    // Update element function
    ///////////////////////////////////////////////////////////////////
    public function Update($ID, $arFields, $bWorkFlow = false, $bUpdateSearch = true, $bResizePictures = false, $bCheckDiskQuota = true)
    {
        return true;
    }

    public static function SetPropertyValues($ELEMENT_ID, $IBLOCK_ID, $PROPERTY_VALUES, $PROPERTY_CODE = false)
    {
    }

    public static function GetRandFunction()
    {
        return ' RAND('.random_int(0, 1000000).') ';
    }

    public static function GetShowedFunction()
    {
        return ' IfNULL(BE.SHOW_COUNTER/((UNIX_TIMESTAMP(now())-UNIX_TIMESTAMP(BE.SHOW_COUNTER_START)+0.1)/60/60),0) ';
    }

    ///////////////////////////////////////////////////////////////////
    // Update list of elements w/o any events
    ///////////////////////////////////////////////////////////////////
    protected function UpdateList($arFields, $arFilter = [])
    {
        return true;
    }

    protected function getIdOrder(mixed $order): string
    {
        return '';
    }
}

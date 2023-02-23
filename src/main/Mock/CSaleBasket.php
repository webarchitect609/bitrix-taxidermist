<?php
declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class CSaleBasket extends CAllSaleBasket
{
    /**
     * The function remove old subscribe product
     *
     * @param string $LID - site for cleaning
     * @return true false
     */
    public static function _ClearProductSubscribe($LID)
    {
        return true;
    }

    public static function GetList($arOrder = [], $arFilter = [], $arGroupBy = false, $arNavStartParams = false, $arSelectFields = [])
    {
        return new CDBResult();
    }

    public static function GetPropsList($arOrder = [], $arFilter = [], $arGroupBy = false, $arNavStartParams = false, $arSelectFields = [])
    {
        return new CDBResult();
    }

    //************** ADD, UPDATE, DELETE ********************//

    /**
     * Adds item to the basket.
     * Automatically adds Set items to the basket if Set parents is added
     *
     * @param $arFields
     * @return mixed - int ID or false
     */
    public static function Add($arFields)
    {
        return 0;
    }

    public static function Delete($ID)
    {
        return true;
    }

    public static function DeleteAll($FUSER_ID = 0, $bIncOrdered = false)
    {
        return true;
    }

    public static function GetLeave($arOrder = [], $arFilter = [], $arGroupBy = false, $arNavStartParams = false, $arSelectFields = [])
    {
        return new CDBResult();
    }
}

<?php
declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

/** @deprecated */
class CAllSalePaySystem
{
    public static function DoProcessOrder(&$arOrder, $paySystemId, &$arErrors)
    {
    }

    public static function DoLoadPaySystems($personType, $deliveryId = 0, $arDeliveryMap = null)
    {
        $arResult = [];
        return $arResult;
    }

    public static function GetByID($id, $personTypeId = 0)
    {
        return [];
    }

    protected static function getAliases()
    {
        $aliases = [
            "PSA_ID" => 'ID',
            "PSA_ACTION_FILE" => 'ACTION_FILE',
            "PSA_RESULT_FILE" => 'RESULT_FILE',
            "PSA_NEW_WINDOW" => 'NEW_WINDOW',
            "PSA_PERSON_TYPE_ID" => 'PERSON_TYPE_ID',
            "PSA_PARAMS" => 'PARAMS',
            "PSA_TARIF" => 'TARIF',
            "PSA_HAVE_PAYMENT" => 'HAVE_PAYMENT',
            "PSA_HAVE_ACTION" => 'HAVE_ACTION',
            "PSA_HAVE_RESULT" => 'HAVE_RESULT',
            "PSA_HAVE_PREPAY" => 'HAVE_PREPAY',
            "PSA_HAVE_RESULT_RECEIVE" => 'HAVE_RESULT_RECEIVE',
            "PSA_ENCODING" => 'ENCODING',
            "PSA_LOGOTIP" => 'LOGOTIP',
        ];
        return $aliases;
    }

    public static function CheckFields($ACTION, &$arFields)
    {
        return true;
    }

    public static function Update($id, $arFields)
    {
        return true;
    }

    public static function Delete($id)
    {
        return true;
    }

    public static function getNewIdsFromOld($ids, $personTypeId = null)
    {
        return [];
    }

    public static function getPaySystemPersonTypeIds($paySystemId)
    {
        return [];
    }

    public static function GetList($arOrder = ["SORT" => "ASC", "NAME" => "ASC"], $arFilter = [], $arGroupBy = false, $arNavStartParams = false, $arSelectFields = [])
    {
        $dbRes = new CDBResult();
        return $dbRes;
    }

    private static function getAlias($key)
    {
        return "";
    }

    private static function getAliasBack($value)
    {
        return $value;
    }

    /**
     * @param $arFields
     * @throws \Exception
     * @return bool|int
     */
    public static function Add($arFields)
    {
        return true;
    }
}

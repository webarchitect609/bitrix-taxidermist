<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class CAllSaleUser
{
    /**
     * Creates new anonymous user with e-mail 'anonymous_some_number@example.com' and returns his ID
     * Used mainly in CRM
     *
     * @return int - new user ID or ID of already existing anonymous user, 0 if error
     */
    public static function GetAnonymousUserID()
    {
        return 1;
    }

    public static function DoAutoRegisterUser($autoEmail, $payerName, $siteId, &$arErrors, $arOtherFields = null)
    {
        return 0;
    }

    public static function CheckFields($ACTION, &$arFields, $ID = 0)
    {
        return true;
    }

    public static function GetID($bSkipFUserInit = false)
    {
        return 1;
    }

    public static function Update($ID, $allowUpdate = true)
    {
        return true;
    }

    public static function _Update($ID, $arFields)
    {
        return 1;
    }

    public static function GetList($arFilter)
    {
        return [];
    }

    public static function Delete($ID)
    {
        return true;
    }

    public static function OnUserLogin($new_user_id, array $params = [])
    {
        return true;
    }

    public static function UpdateSessionSaleUserID()
    {
        return 0;
    }

    public static function getFUserCode()
    {
        return 0;
    }

    public static function OnUserLogout($userID)
    {
    }

    public static function DeleteOldAgent($nDays, $speed = 0)
    {
        return true;
    }

    public static function OnUserDelete($userID)
    {
        return true;
    }
}

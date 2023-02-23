<?php
declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class CAllSaleOrder
{
    /**
     * @param $siteId
     * @param $userId
     * @param $arShoppingCart
     * @param $personTypeId
     * @param $arOrderPropsValues
     * @param $deliveryId
     * @param $paySystemId
     * @param $arOptions
     * @param $arErrors
     * @param $arWarnings
     * @return null|array
     */
    public static function DoCalculateOrder(
        $siteId,
        $userId,
        $arShoppingCart,
        $personTypeId,
        $arOrderPropsValues,
        $deliveryId,
        $paySystemId,
        $arOptions,
        &$arErrors,
        &$arWarnings
    )
    {
        return [];
    }

    /**
     * @param $siteId
     * @param null $userId
     * @param $shoppingCart
     * @param array $options
     *
     * @return array
     */
    public static function makeOrderArray($siteId, $userId = null, array $shoppingCart, array $options = [])
    {
        return [];
    }

    /**
     * calculate the cost according to the order basket
     * @param array $arBasketItems
     * @return array|bool
     */
    public static function CalculateOrderPrices($arBasketItems)
    {
        return [];
    }

    // $direct == true => ID => CODE
    // $direct == false => CODE => ID
    public static function TranslateLocationPropertyValues($personTypeId, &$orderProps, $direct = true)
    {
    }

    /**
     *
     *
     */
    public static function DoSaveOrder(&$arOrder, $arAdditionalFields, $orderId, &$arErrors, $arCoupons = [], $arStoreBarcodeOrderFormData = [], $bSaveBarcodes = false)
    {
        return 0;
    }

    //*************** USER PERMISSIONS *********************/
    /**
     * @param int $ID
     * @param array|bool $arUserGroups
     * @param int $userID
     * @return bool
     */
    public static function CanUserViewOrder($ID, $arUserGroups = false, $userID = 0)
    {
        return true;
    }

    /**
     * @param int $ID
     * @param array|bool $arUserGroups
     * @param bool $siteID
     * @return bool
     */
    public static function CanUserUpdateOrder($ID, $arUserGroups = false, $siteID = false)
    {
        return false;
    }

    /**
     * @param int $ID
     * @param array|bool $arUserGroups
     * @param int $userID
     * @return bool
     */
    public static function CanUserCancelOrder($ID, $arUserGroups = false, $userID = 0)
    {
        return true;
    }

    /**
     * @param int $ID
     * @param array|bool $arUserGroups
     * @param int $userID
     * @return bool
     */
    public static function CanUserMarkOrder($ID, $arUserGroups = false, $userID = 0)
    {
        return true;
    }

    /**
     * @param int $ID
     * @param string $flag
     * @param array|bool $arUserGroups
     * @return bool
     */
    public static function CanUserChangeOrderFlag($ID, $flag, $arUserGroups = false)
    {
        return true;
    }

    /**
     * @param int $ID
     * @param string $statusID
     * @param array|bool $arUserGroups
     * @return bool
     */
    public static function CanUserChangeOrderStatus($ID, $statusID, $arUserGroups = false)
    {
        return true;
    }

    /**
     * @param int $ID
     * @param array|bool $arUserGroups
     * @param int $userID
     * @return bool
     */
    public static function CanUserDeleteOrder($ID, $arUserGroups = false, $userID = 0)
    {
        return true;
    }

    //*************** ADD, UPDATE, DELETE *********************/
    public static function CheckFields($ACTION, &$arFields, $ID = 0)
    {
        return true;
    }

    public static function _Delete($ID)
    {
        return true;
    }

    public static function Delete($ID)
    {
        return true;
    }

    //*************** COMMON UTILS *********************/
    public static function GetFilterOperation($key)
    {
        return [];
    }

    public static function PrepareSql(&$arFields, $arOrder, &$arFilter, $arGroupBy, $arSelectFields, $obUserFieldsSql = false, $callback = false, $arOptions = [])
    {
        return [
            "SELECT" => "",
            "FROM" => "",
            "WHERE" => "",
            "GROUPBY" => "",
            "ORDERBY" => "",
        ];
    }


    //*************** SELECT *********************/
    public static function GetByID($ID)
    {
        return true;
    }


    //*************** EVENTS *********************/
    public static function OnBeforeCurrencyDelete($currency)
    {
        return true;
    }

    public static function OnBeforeUserDelete($userID)
    {
        return true;
    }

    //*************** ACTIONS *********************/
    public static function PayOrder($ID, $val, $bWithdraw = true, $bPay = true, $recurringID = 0, $arAdditionalFields = [])
    {
        return true;
    }

    public static function DeliverOrder($ID, $val, $recurringID = 0, $arAdditionalFields = [])
    {
        return true;
    }

    public static function DeductOrder($ID, $val, $description = "", $bAutoDeduction = true, $arStoreBarcodeOrderFormData = [], $recurringID = 0)
    {
        return true;
    }

    public static function ReserveOrder($ID, $val)
    {
        return true;
    }

    public static function CancelOrder($ID, $val, $description = "")
    {
        return true;
    }

    public static function StatusOrder($ID, $val)
    {
        return true;
    }

    public static function CommentsOrder($ID, $val)
    {
        return true;
    }

    public static function Lock($ID)
    {
        return true;
    }

    public static function UnLock($ID)
    {
        return true;
    }

    public static function IsLocked($ID, &$lockedBY, &$dateLock)
    {
        return true;
    }

    public static function RemindPayment()
    {
        return "CSaleOrder::RemindPayment();";
    }

    /**
     * @deprecated
     *
     * Use \Bitrix\Main\Numerator\Numerator::previewNextNumber instead
     *
     * Generates next account number according to the scheme selected in the module options
     *
     * @param int $orderID - order ID
     * @param string $templateType - account number template type code
     * @param string $param - account number template param
     * @return mixed - generated number or false
     */
    public static function GetNextAccountNumber($orderID, $templateType, $param)
    {
        return "";
    }

    public static function __SaleOrderCount($arFilter, $strCurrency = '')
    {
        return [];
    }

    /**
     * @deprecated Use CSaleOrderChange::GetList instead
     * The function selects order history
     *
     * @param array $arOrder - array to sort
     * @param array $arFilter - array to filter
     * @param array|false $arGroupBy - array to group records
     * @param array|false $arNavStartParams - array to parameters
     * @param array $arSelectFields - array to selectes fields
     * @return object $dbRes - object result
     */
    public static function GetHistoryList($arOrder = ["ID"=>"DESC"], $arFilter = [], $arGroupBy = false, $arNavStartParams = false, $arSelectFields = [])
    {
        return new CDBResult();
    }

    public static function SetMark($ID, $comment = "", $userID = 0)
    {
        return true;
    }

    public static function UnsetMark($ID, $userID = 0)
    {
        return true;
    }

    /**
     * Sets order account number
     * Use OnBeforeOrderAccountNumberSet event to generate custom account number.
     * Account number value must be unique! By default order ID is used if generated value is incorrect
     *
     * @param int $ID - order ID
     * @return bool - true if account number is set successfully
     */
    public static function SetAccountNumber($ID)
    {
        return true;
    }


    /**
     * The agent function. Moves reserved quantity back to the quantity field for each product
     * for orders which were placed earlier than specific date
     *
     * @return string
     */
    public static function ClearProductReservedQuantity()
    {
        return "CSaleOrder::ClearProductReservedQuantity();";
    }

    /**
     * Function processes "COMPLETE_ORDERS" key in $arFilter for CSaleOrder::GetList() method
     *
     * @param mixed[]|string $values - next key value in the filter
     * @param string $key - key name
     * @param string $op - key operation modificator
     * @param string $opNegative - key condition is negative or not
     * @param mixed[] $field - field array of the key
     * @param mixed[] $fields - array of all fields
     * @param mixed[] $filter - filter array of the key
     * @return false|string
     */
    protected static function ProcessCompleteOrdersParam($values, $key, $op, $opNegative, $field, $fields, $filter)
    {
        return "";
    }

    // returns reference of all properties of TYPE = LOCATION
    public static function getLocationPropertyInfo()
    {
        return [];
    }

    /**
     * @internal
     * @return array
     */
    public static function getRoundFields()
    {
        return [
            'ORDER_PRICE',
            'DISCOUNT_PRICE',
            'VAT_RATE',
            'VAT_SUM',
        ];
    }

    /**
     * @internal
     * @param array $list
     * @param $perm
     * @param bool $userGroups
     * @param bool $userId
     *
     * @return array
     */
    public static function checkUserPermissionOrderList(array $list, $perm, $userGroups = false, $userId = false)
    {
        return [];
    }
}

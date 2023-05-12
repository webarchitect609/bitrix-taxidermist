<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class CAllSaleOrder
{
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
        &$arWarnings,
    ): ?array {
        return [];
    }

    /**
     * @param null $userId
     * @return array
     */
    public static function makeOrderArray($siteId, array $shoppingCart, $userId = null, array $options = [])
    {
        return [];
    }

    /**
     * calculate the cost according to the order basket
     *
     * @param array $arBasketItems
     */
    public static function CalculateOrderPrices($arBasketItems): array|bool
    {
        return [];
    }

    // $direct == true => ID => CODE
    // $direct == false => CODE => ID
    public static function TranslateLocationPropertyValues($personTypeId, &$orderProps, $direct = true)
    {
    }

    public static function DoSaveOrder(&$arOrder, $arAdditionalFields, $orderId, &$arErrors, $arCoupons = [], $arStoreBarcodeOrderFormData = [], $bSaveBarcodes = false)
    {
        return 0;
    }

    //*************** USER PERMISSIONS *********************/
    /**
     * @param int $ID
     * @param int $userID
     * @return bool
     */
    public static function CanUserViewOrder($ID, array|bool $arUserGroups = false, $userID = 0)
    {
        return true;
    }

    /**
     * @param int $ID
     * @param bool $siteID
     * @return bool
     */
    public static function CanUserUpdateOrder($ID, array|bool $arUserGroups = false, $siteID = false)
    {
        return false;
    }

    /**
     * @param int $ID
     * @param int $userID
     * @return bool
     */
    public static function CanUserCancelOrder($ID, array|bool $arUserGroups = false, $userID = 0)
    {
        return true;
    }

    /**
     * @param int $ID
     * @param int $userID
     * @return bool
     */
    public static function CanUserMarkOrder($ID, array|bool $arUserGroups = false, $userID = 0)
    {
        return true;
    }

    /**
     * @param int $ID
     * @param string $flag
     * @return bool
     */
    public static function CanUserChangeOrderFlag($ID, $flag, array|bool $arUserGroups = false)
    {
        return true;
    }

    /**
     * @param int $ID
     * @param string $statusID
     * @return bool
     */
    public static function CanUserChangeOrderStatus($ID, $statusID, array|bool $arUserGroups = false)
    {
        return true;
    }

    /**
     * @param int $ID
     * @param int $userID
     * @return bool
     */
    public static function CanUserDeleteOrder($ID, array|bool $arUserGroups = false, $userID = 0)
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
            'SELECT'  => '',
            'FROM'    => '',
            'WHERE'   => '',
            'GROUPBY' => '',
            'ORDERBY' => '',
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

    public static function DeductOrder($ID, $val, $description = '', $bAutoDeduction = true, $arStoreBarcodeOrderFormData = [], $recurringID = 0)
    {
        return true;
    }

    public static function ReserveOrder($ID, $val)
    {
        return true;
    }

    public static function CancelOrder($ID, $val, $description = '')
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
        return 'CSaleOrder::RemindPayment();';
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
        return '';
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
    public static function GetHistoryList($arOrder = ['ID' => 'DESC'], $arFilter = [], array|false $arGroupBy = false, array|false $arNavStartParams = false, $arSelectFields = [])
    {
        return new CDBResult();
    }

    public static function SetMark($ID, $comment = '', $userID = 0)
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
        return 'CSaleOrder::ClearProductReservedQuantity();';
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
     */
    protected static function ProcessCompleteOrdersParam(array|string $values, $key, $op, $opNegative, $field, $fields, $filter): false|string
    {
        return '';
    }

    // returns reference of all properties of TYPE = LOCATION
    public static function getLocationPropertyInfo()
    {
        return [];
    }

    /**
     * @internal
     *
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
     *
     * @param bool $userGroups
     * @param bool $userId
     * @return array
     */
    public static function checkUserPermissionOrderList(array $list, $perm, $userGroups = false, $userId = false)
    {
        return [];
    }
}

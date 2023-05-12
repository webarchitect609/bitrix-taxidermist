<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class CAllSaleBasket
{
    final public const TYPE_SET = 1;

    protected static $currencySiteList = [];

    protected static $currencyList = [];

    /**
     * Checks if the basket item has product provider class implementing IBXSaleProductProvider interface
     *
     * @param array $arBasketItem - array of basket item fields
     * @return mixed
     */
    public static function GetProductProvider($arBasketItem)
    {
        return false;
    }

    /**
     * Removes old product subscription
     *
     * @param string $LID - site for cleaning
     * @return bool
     */
    public static function ClearProductSubscribe($LID)
    {
        return "CSaleBasket::ClearProductSubscribe('".$LID."');";
    }

    /**
     * Sends product subscription letter
     *
     * @param int $ID - code product
     * @param string $MODULE - module product
     * @return bool
     */
    public static function ProductSubscribe($ID, $MODULE)
    {
        return true;
    }

    public static function DoGetUserShoppingCart($siteId, $userId, $shoppingCart, &$arErrors, $arCoupons = [], $orderId = 0, $enableCustomCurrency = false)
    {
        return [];
    }

    /**
     * Changes product quantity in the catalog.
     * Used in the DoSaveOrderBasket to actualize basket items quantity
     * after some operations with the order are made in the order_new form
     *
     * Depending on the state of the order (reserved/deducted)
     * and the state of the product (reserved/deducted) calls appropriate provider methods
     *
     * If the quantity is 0 and CHECK_QUANTITY is N, this method is used only to call OrderProduct method to actualize coupon data
     *
     * @param array $arBasketItem - basket item data array
     * @param int $deltaQuantity - quantity to be changed. Can be zero, in this case CHECK_QUANTITY should be N
     * @param bool $isOrderReserved - order reservation flag
     * @param bool $isOrderDeducted - order deduction flag
     * @param array $arStoreBarcodeOrderFormData - array of barcode and stores from order_new form to be used for deduction
     * @param array $arAdditionalParams - user id, site id, check_quantity flag
     * @return bool
     */
    public static function DoChangeProductQuantity($arBasketItem, $deltaQuantity, $isOrderReserved = false, $isOrderDeducted = false, $arStoreBarcodeOrderFormData = [], $arAdditionalParams = [])
    {
        return true;
    }

    /**
     * Updates information about basket products after changes have been made in the order_new form
     * (saves newly added basket items, changes their quantity, saves barcodes etc)
     *
     * @param int $orderId - order ID
     * @param string $siteId - site ID
     * @param bool $userId - user ID
     * @param array $arShoppingCart - array of basket items
     * @param array $arErrors
     * @param array $arCoupons
     * @param array $arStoreBarcodeOrderFormData - array of stores and barcodes for deduction (from order_new form)
     * @param bool $bSaveBarcodes - flat to save given barcode data. Used if the order is already deducted or at least has saved other barcodes
     * @return bool
     */
    public static function DoSaveOrderBasket($orderId, $siteId, $userId, &$arShoppingCart, &$arErrors, $arCoupons = [], $arStoreBarcodeOrderFormData = [], $bSaveBarcodes = false)
    {
        return true;
    }

    //************** ADD, UPDATE, DELETE ********************//
    public static function CheckFields($ACTION, &$arFields, $ID = 0)
    {
        return true;
    }

    public static function _Update($ID, &$arFields)
    {
        return true;
    }

    public static function Update($ID, $arFields)
    {
        return true;
    }

    //************** BASKET USER ********************//
    public static function Init($bVar = false, $bSkipFUserInit = false)
    {
    }

    public static function GetBasketUserID($bSkipFUserInit = false)
    {
        return 0;
    }

    //************** SELECT ********************//
    public static function GetByID($ID)
    {
        return [];
    }

    //************** CALLBACK FUNCTIONS ********************//
    public static function ExecuteCallbackFunction($callbackFunc = '', $module = '', $productID = 0)
    {
        return [];
    }

    public static function ReReadPrice($callbackFunc = '', $module = '', $productID = 0, $quantity = 0, $renewal = 'N', $productProvider = '')
    {
        return [];
    }

    public static function OnOrderProduct($callbackFunc = '', $module = '', $productID = 0, $quantity = 0, $productProvider = '')
    {
        return true;
    }

    public static function UpdatePrice($ID, $callbackFunc = '', $module = '', $productID = 0, $quantity = 0, $renewal = 'N', $productProvider = '', $notes = '')
    {
    }

    /**
     * @deprecated deprecated since sale 14.0.6
     * @see CSaleBasket::DoSaveOrderBasket
     *
     * @param int $orderID
     * @param int $fuserID
     * @param mixed|string $strLang
     * @param bool $arDiscounts
     * @return bool
     */
    public static function OrderBasket($orderID, $fuserID = 0, $strLang = '', $arDiscounts = false)
    {
        return true;
    }

    public static function OrderPayment($orderID, $bPaid, $recurringID = 0)
    {
    }

    public static function OrderDelivery($orderID, $bPaid, $recurringID = 0)
    {
    }

    public static function OrderCanceled($orderID, $bCancel)
    {
    }

    /**
     * Method is called to reserve all products in the order basket
     *
     * @param int $orderID
     * @param bool $bUndoReservation
     * @return mixed array
     */
    public static function OrderReservation($orderID, $bUndoReservation = false)
    {
        return [];
    }

    /**
     * Method is called to reserve one product in the basket
     * (it's a wrapper around product provider ReserveProduct method to use for the single product)
     *
     * @param int $basketID
     * @param float $deltaQuantity - quantity to reserve
     * @param bool $isOrderDeducted
     * @return mixed array
     */
    public static function ReserveBasketProduct($basketID, $deltaQuantity, $isOrderDeducted = false)
    {
        return [];
    }

    /**
     * Method is called to deduct one product in the basket
     * (it's a wrapper around product provider DeductProduct method to use for the single product)
     *
     * @param int $basketID
     * @param float $deltaQuantity - quantity to reserve
     * @param array $arStoreBarcodeData
     * @return mixed array
     */
    public static function DeductBasketProduct($basketID, $deltaQuantity, $arStoreBarcodeData = [])
    {
        return [];
    }

    /**
     * Method is called to deduct all products of the order or undo deduction
     *
     * @param int $orderID
     * @param bool $bUndoDeduction
     * @param int $recurringID
     * @param bool $bAutoDeduction
     * @param array $arStoreBarcodeOrderFormData
     * @return mixed array
     */
    public static function OrderDeduction($orderID, $bUndoDeduction = false, $recurringID = 0, $bAutoDeduction = true, $arStoreBarcodeOrderFormData = [])
    {
        return [];
    }

    public static function TransferBasket($FROM_FUSER_ID, $TO_FUSER_ID)
    {
        return true;
    }

    public static function UpdateBasketPrices($fuserID, $siteID, array $options = [])
    {
        return true;
    }

    /**
     * @param array $newProperties
     * @param array $oldProperties
     */
    public static function compareBasketProps($newProperties, $oldProperties): ?bool
    {
        return true;
    }

    /**
     * @internal
     *
     * @return array
     */
    public static function getRoundFields()
    {
        return [
            'DISCOUNT_PRICE',
            'DISCOUNT_PRICE_PERCENT',
        ];
    }
}

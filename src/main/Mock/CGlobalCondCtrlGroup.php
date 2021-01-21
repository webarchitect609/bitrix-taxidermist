<?php
/** @noinspection PhpMissingReturnTypeInspection */

namespace WebArch\BitrixTaxidermist\Mock;

class CGlobalCondCtrlGroup extends CGlobalCondCtrl
{
    /**
     * @inheritDoc
     */
    public static function GetControlDescr()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public static function GetControlShow($arParams)
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public static function GetConditionShow($arParams)
    {
        return '';
    }

    /**
     * @inheritDoc
     */
    public static function GetControlID()
    {
        return '';
    }

    /**
     * @inheritDoc
     */
    public static function GetAtoms()
    {
        return [];
    }

    /**
     * @return array<mixed>
     */
    public static function GetVisual()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public static function IsGroup($strControlID = false)
    {
        return 'Y';
    }

    /**
     * @inheritDoc
     */
    public static function Parse($arOneCondition)
    {
        return '';
    }

    /**
     * @inheritDoc
     */
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = false)
    {
        return '';
    }

    /**
     * @inheritDoc
     */
    public static function ApplyValues($arOneCondition, $arControl)
    {
        return false;
    }
}

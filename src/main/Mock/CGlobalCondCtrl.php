<?php
/** @noinspection PhpMissingReturnTypeInspection */
/** @noinspection PhpUnusedParameterInspection */
/** @noinspection PhpMissingParamTypeInspection */

namespace WebArch\BitrixTaxidermist\Mock;

class CGlobalCondCtrl
{
    /**
     * @var bool
     */
    public static $arInitParams = false;

    /**
     * @var bool
     */
    public static $boolInit = false;

    /**
     * @return false|string
     */
    public static function GetClassName()
    {
        return '';
    }

    /**
     * @return array<string, mixed>|false
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function GetControlDescr()
    {
        return [];
    }

    /**
     * @param array<mixed> $arParams
     *
     * @return array<string, mixed>|false
     */
    public static function GetControlShow($arParams)
    {
        return [];
    }

    /**
     * @param array<mixed> $arParams
     *
     * @return string
     */
    public static function GetConditionShow($arParams)
    {
        return '';
    }

    /**
     * @param false|string $strControlID
     *
     * @return string
     */
    public static function IsGroup($strControlID = false)
    {
        return 'N';
    }

    /**
     * @param array<mixed> $arOneCondition
     *
     * @return bool|string
     */
    public static function Parse($arOneCondition)
    {
        return '';
    }

    /**
     * @param array<mixed> $arOneCondition
     * @param array<mixed> $arParams
     * @param array<mixed> $arControl
     * @param array<mixed>|false $arSubs
     *
     * @return string
     */
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = false)
    {
        return '';
    }

    /**
     * @param array<mixed> $arOneCondition
     * @param array<mixed> $arControl
     *
     * @return array<mixed>|bool
     */
    public static function ApplyValues($arOneCondition, $arControl)
    {
        return [];
    }

    /**
     * @param array<mixed> $arParams
     *
     * @return void
     */
    public static function InitParams($arParams)
    {
    }

    /**
     * @return array<mixed>|string
     */
    public static function GetControlID()
    {
        return '';
    }

    /**
     * @param array<mixed> $arControls
     *
     * @return array<mixed>
     */
    public static function GetShowIn($arControls)
    {
        return [];
    }

    /**
     * @param bool|string $strControlID
     *
     * @return array<string, mixed>|bool
     */
    public static function GetControls($strControlID = false)
    {
        return false;
    }

    /**
     * @return array<mixed>
     */
    public static function GetAtoms()
    {
        return [];
    }

    /**
     * @param false|string $strControlID
     * @param bool $boolEx
     *
     * @return array<mixed>|bool
     */
    public static function GetAtomsEx($strControlID = false, $boolEx = false)
    {
        return [];
    }

    /**
     * @param array<mixed> $arControl
     * @param array<mixed> $arParams
     *
     * @return array<mixed>
     */
    public static function GetJSControl($arControl, $arParams = [])
    {
        return [];
    }

    /**
     * @return void
     */
    public static function OnBuildConditionAtomList()
    {
    }

    /**
     * @param array<mixed>|bool $arOperators
     *
     * @return array<mixed>
     */
    public static function GetLogic($arOperators = false)
    {
        return [];
    }

    /**
     * @param array<mixed>|bool $arOperators
     * @param array<mixed>|bool $arLabels
     *
     * @return array<mixed>
     */
    public static function GetLogicEx($arOperators = false, $arLabels = false)
    {
        return [];
    }

    /**
     * @param array<mixed> $arLogic
     *
     * @return array<mixed>|false
     */
    public static function GetLogicAtom($arLogic)
    {
        return false;
    }

    /**
     * @param array<mixed> $arValue
     *
     * @return string[]
     */
    public static function GetValueAtom($arValue)
    {
        return [];
    }

    /**
     * @param array<mixed> $strValue
     * @param array<mixed> $arLogic
     * @param false $boolShow
     *
     * @return false|mixed|string
     */
    public static function CheckLogic($strValue, $arLogic, $boolShow = false)
    {
        return false;
    }

    /**
     * @param array<mixed> $strValue
     * @param array<mixed> $arLogic
     *
     * @return false|mixed
     */
    public static function SearchLogic($strValue, $arLogic)
    {
        return false;
    }

    /**
     * @param array<mixed> $arOneCondition
     * @param array<mixed> $arParams
     * @param array<mixed> $arControl
     * @param bool $boolShow
     *
     * @return array<mixed>|false|string[]
     */
    public static function Check($arOneCondition, $arParams, $arControl, $boolShow)
    {
        return [];
    }

    /**
     * @param array<mixed> $arOneCondition
     * @param array<mixed> $arParams
     * @param array<mixed> $arControl
     * @param array<mixed> $boolShow
     *
     * @return false|string[]
     */
    public static function Validate($arOneCondition, $arParams, $arControl, $boolShow)
    {
        return false;
    }

    /**
     * @param array<mixed> $arOneCondition
     * @param array<mixed> $arParams
     * @param array<mixed> $arControl
     * @param bool $boolShow
     *
     * @return array<mixed>|bool
     */
    public static function CheckAtoms($arOneCondition, $arParams, $arControl, $boolShow)
    {
        return false;
    }

    /**
     * @param array<mixed> $arValues
     * @param array<mixed> $arParams
     * @param array<mixed> $arControl
     * @param bool $boolShow
     *
     * @return array<array<mixed>>|false
     */
    public static function ValidateAtoms($arValues, $arParams, $arControl, $boolShow)
    {
        return false;
    }

    /**
     * @param false $boolFatal
     *
     * @return void
     */
    public static function UndefinedCondition($boolFatal = false)
    {
    }

    /**
     * @param array<mixed> $arField
     * @param mixed $mxValue
     *
     * @return bool
     */
    public static function LogicGreat($arField, $mxValue)
    {
        return false;
    }

    /**
     * @param array<mixed> $arField
     * @param mixed $mxValue
     *
     * @return bool
     */
    public static function LogicLess($arField, $mxValue)
    {
        return false;
    }

    /**
     * @param array<mixed> $arField
     * @param mixed $mxValue
     *
     * @return bool
     */
    public static function LogicEqualGreat($arField, $mxValue)
    {
        return false;
    }

    /**
     * @param array<mixed> $arField
     * @param mixed $mxValue
     *
     * @return bool
     */
    public static function LogicEqualLess($arField, $mxValue)
    {
        return false;
    }

    /**
     * @param array<mixed> $arField
     * @param mixed $mxValue
     *
     * @return bool
     */
    public static function LogicContain($arField, $mxValue)
    {
        return false;
    }

    /**
     * @param array<mixed> $arField
     * @param mixed $mxValue
     *
     * @return bool
     */
    public static function LogicNotContain($arField, $mxValue)
    {
        return false;
    }

    /**
     * @param mixed $mxValues
     *
     * @return bool
     */
    public static function ClearValue(&$mxValues)
    {
        return false;
    }

    /**
     * @param mixed $mxValues
     * @param string $strFormat
     * @param int $intOffset
     *
     * @return bool
     */
    public static function ConvertInt2DateTime(&$mxValues, $strFormat, $intOffset)
    {
        return false;
    }

    /**
     * @param mixed $mxValues
     * @param string $strFormat
     * @param int $intOffset
     *
     * @return bool
     */
    public static function ConvertDateTime2Int(&$mxValues, $strFormat, $intOffset)
    {
        return false;
    }

    /**
     * @param array<mixed> $atoms
     * @param false|string $controlId
     * @param bool $extendedMode
     *
     * @return array<mixed>|false
     */
    protected static function searchControlAtoms(array $atoms, $controlId, $extendedMode)
    {
        return false;
    }

    /**
     * @param array<mixed> $controls
     * @param string $controlId
     *
     * @return array<mixed>|false|mixed
     */
    protected static function searchControl(array $controls, $controlId)
    {
        return false;
    }
}

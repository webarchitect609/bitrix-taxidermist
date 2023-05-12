<?php

declare(strict_types=1);
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

    public static function GetClassName(): false|string
    {
        return '';
    }

    /**
     * @return array<string, mixed>|false
     *
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function GetControlDescr(): array|false
    {
        return [];
    }

    /**
     * @param array<mixed> $arParams
     * @return array<string, mixed>|false
     */
    public static function GetControlShow($arParams): array|false
    {
        return [];
    }

    /**
     * @param array<mixed> $arParams
     * @return string
     */
    public static function GetConditionShow($arParams)
    {
        return '';
    }

    /**
     * @return string
     */
    public static function IsGroup(false|string $strControlID = false)
    {
        return 'N';
    }

    /**
     * @param array<mixed> $arOneCondition
     */
    public static function Parse($arOneCondition): bool|string
    {
        return '';
    }

    /**
     * @param array<mixed> $arOneCondition
     * @param array<mixed> $arParams
     * @param array<mixed> $arControl
     * @param array<mixed>|false $arSubs
     * @return string
     */
    public static function Generate($arOneCondition, $arParams, $arControl, array|false $arSubs = false)
    {
        return '';
    }

    /**
     * @param array<mixed> $arOneCondition
     * @param array<mixed> $arControl
     * @return array<mixed>|bool
     */
    public static function ApplyValues($arOneCondition, $arControl): array|bool
    {
        return [];
    }

    /**
     * @param array<mixed> $arParams
     * @return void
     */
    public static function InitParams($arParams)
    {
    }

    /**
     * @return array<mixed>|string
     */
    public static function GetControlID(): array|string
    {
        return '';
    }

    /**
     * @param array<mixed> $arControls
     * @return array<mixed>
     */
    public static function GetShowIn($arControls)
    {
        return [];
    }

    /**
     * @return array<string, mixed>|bool
     */
    public static function GetControls(bool|string $strControlID = false): array|bool
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
     * @param bool $boolEx
     * @return array<mixed>|bool
     */
    public static function GetAtomsEx(false|string $strControlID = false, $boolEx = false): array|bool
    {
        return [];
    }

    /**
     * @param array<mixed> $arControl
     * @param array<mixed> $arParams
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
     * @return array<mixed>
     */
    public static function GetLogic(array|bool $arOperators = false)
    {
        return [];
    }

    /**
     * @param array<mixed>|bool $arOperators
     * @param array<mixed>|bool $arLabels
     * @return array<mixed>
     */
    public static function GetLogicEx(array|bool $arOperators = false, array|bool $arLabels = false)
    {
        return [];
    }

    /**
     * @param array<mixed> $arLogic
     * @return array<mixed>|false
     */
    public static function GetLogicAtom($arLogic): array|false
    {
        return false;
    }

    /**
     * @param array<mixed> $arValue
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
     * @return false|mixed|string
     */
    public static function CheckLogic($strValue, $arLogic, $boolShow = false)
    {
        return false;
    }

    /**
     * @param array<mixed> $strValue
     * @param array<mixed> $arLogic
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
     * @return array<mixed>|false|string[]
     */
    public static function Check($arOneCondition, $arParams, $arControl, $boolShow): array|bool
    {
        return [];
    }

    /**
     * @param array<mixed> $arOneCondition
     * @param array<mixed> $arParams
     * @param array<mixed> $arControl
     * @param array<mixed> $boolShow
     * @return false|string[]
     */
    public static function Validate($arOneCondition, $arParams, $arControl, $boolShow): false|array
    {
        return false;
    }

    /**
     * @param array<mixed> $arOneCondition
     * @param array<mixed> $arParams
     * @param array<mixed> $arControl
     * @param bool $boolShow
     * @return array<mixed>|bool
     */
    public static function CheckAtoms($arOneCondition, $arParams, $arControl, $boolShow): array|bool
    {
        return false;
    }

    /**
     * @param array<mixed> $arValues
     * @param array<mixed> $arParams
     * @param array<mixed> $arControl
     * @param bool $boolShow
     * @return array<array<mixed>>|false
     */
    public static function ValidateAtoms($arValues, $arParams, $arControl, $boolShow): array|false
    {
        return false;
    }

    /**
     * @param false $boolFatal
     * @return void
     */
    public static function UndefinedCondition($boolFatal = false)
    {
    }

    /**
     * @param array<mixed> $arField
     * @return bool
     */
    public static function LogicGreat($arField, mixed $mxValue)
    {
        return false;
    }

    /**
     * @param array<mixed> $arField
     * @return bool
     */
    public static function LogicLess($arField, mixed $mxValue)
    {
        return false;
    }

    /**
     * @param array<mixed> $arField
     * @return bool
     */
    public static function LogicEqualGreat($arField, mixed $mxValue)
    {
        return false;
    }

    /**
     * @param array<mixed> $arField
     * @return bool
     */
    public static function LogicEqualLess($arField, mixed $mxValue)
    {
        return false;
    }

    /**
     * @param array<mixed> $arField
     * @return bool
     */
    public static function LogicContain($arField, mixed $mxValue)
    {
        return false;
    }

    /**
     * @param array<mixed> $arField
     * @return bool
     */
    public static function LogicNotContain($arField, mixed $mxValue)
    {
        return false;
    }

    /**
     * @return bool
     */
    public static function ClearValue(mixed &$mxValues)
    {
        return false;
    }

    /**
     * @param string $strFormat
     * @param int $intOffset
     * @return bool
     */
    public static function ConvertInt2DateTime(mixed &$mxValues, $strFormat, $intOffset)
    {
        return false;
    }

    /**
     * @param string $strFormat
     * @param int $intOffset
     * @return bool
     */
    public static function ConvertDateTime2Int(mixed &$mxValues, $strFormat, $intOffset)
    {
        return false;
    }

    /**
     * @param array<mixed> $atoms
     * @param bool $extendedMode
     * @return array<mixed>|false
     */
    protected static function searchControlAtoms(array $atoms, false|string $controlId, $extendedMode): array|false
    {
        return false;
    }

    /**
     * @param array<mixed> $controls
     * @param string $controlId
     * @return array<mixed>|false|mixed
     */
    protected static function searchControl(array $controls, $controlId)
    {
        return false;
    }
}

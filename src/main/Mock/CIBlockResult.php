<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class CIBlockResult extends CDBResult
{
    /** @var array|bool */
    public $arIBlockMultProps = false;

    /** @var array|bool */
    public $arIBlockConvProps = false;

    /** @var array|bool */
    public $arIBlockAllProps = false;

    /** @var array|bool */
    public $arIBlockNumProps = false;

    /** @var array|bool */
    public $arIBlockLongProps = false;

    public $nInitialSize;

    public $table_id;

    public $strDetailUrl = false;

    public $strSectionUrl = false;

    public $strListUrl = false;

    public $arSectionContext = false;

    public $bIBlockSection = false;

    public $nameTemplate = '';

    public $_LAST_IBLOCK_ID = '';

    public $_FILTER_IBLOCK_ID = [];

    public function __construct($res = null)
    {
    }

    public function SetUrlTemplates($DetailUrl = '', $SectionUrl = '', $ListUrl = '')
    {
    }

    public function SetSectionContext($arSection)
    {
    }

    public function SetIBlockTag($iblock_id)
    {
    }

    public function SetNameTemplate($nameTemplate)
    {
    }

    public function Fetch()
    {
        return [];
    }

    public function GetNext($bTextHtmlAuto = true, $use_tilda = true)
    {
        return [];
    }

    public function GetNextElement($bTextHtmlAuto = true, $use_tilda = true)
    {
        $res = new _CIBElement;

        return $res;
    }

    public function SetTableID($table_id)
    {
    }

    public function NavStart($nPageSize = 20, $bShowAll = true, $iNumPage = false)
    {
    }

    public function GetNavPrint($title, $show_allways = true, $StyleText = '', $template_path = false, $arDeleteParam = false)
    {
        return '';
    }
}

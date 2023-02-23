<?php
declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class _CIBElement
{
    public $fields;
    public $props=false;

    public function GetFields()
    {
        return $this->fields;
    }

    /**
     * @param array|bool $arOrder
     * @param array $arFilter
     * @return array
     */
    public function GetProperties($arOrder = false, $arFilter = [])
    {
        return [];
    }

    public function GetProperty($ID)
    {
        return [];
    }

    public function GetGroups()
    {
        return [];
    }
}

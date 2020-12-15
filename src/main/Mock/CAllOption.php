<?php

namespace WebArch\BitrixTaxidermist\Mock;

class CAllOption
{
    /**
     * @return string
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function err_mess()
    {
        return '';
    }

    /**
     * @param string $module_id
     * @param string $name
     * @param string $def
     * @param false $site
     * @param false $bExactSite
     *
     * @return null|false
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function GetOptionString($module_id, $name, $def = "", $site = false, $bExactSite = false)
    {
        return null;
    }

    /**
     * @param string $module_id
     * @param string $name
     * @param string $value
     * @param false $desc
     * @param string $site
     *
     * @return bool
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function SetOptionString($module_id, $name, $value = "", $desc = false, $site = "")
    {
        return true;
    }

    /**
     * @param string $module_id
     * @param string $name
     * @param false $site
     *
     * @return void
     * @noinspection PhpMissingParamTypeInspection
     */
    public static function RemoveOption($module_id, $name = "", $site = false)
    {
    }

    /**
     * @param string $module_id
     * @param string $name
     * @param string $def
     * @param false $site
     *
     * @return int
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function GetOptionInt($module_id, $name, $def = "", $site = false)
    {
        return 0;
    }

    /**
     * @param string $module_id
     * @param string $name
     * @param string $value
     * @param string $desc
     * @param string $site
     *
     * @return bool
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function SetOptionInt($module_id, $name, $value = "", $desc = "", $site = "")
    {
        return true;
    }
}

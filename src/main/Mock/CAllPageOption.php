<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class CAllPageOption
{
    /**
     * @param string $module_id
     * @param string $name
     * @param string $def
     * @return mixed
     *
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     */
    public static function GetOptionString($module_id, $name, $def = '', bool|string $site = false)
    {
        return null;
    }

    /**
     * @param string $module_id
     * @param string $name
     * @param string $value
     * @param false $desc
     * @param string $site
     * @return bool
     *
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function SetOptionString($module_id, $name, $value = '', $desc = false, $site = '')
    {
        return true;
    }

    /**
     * @param string $module_id
     * @param string $name
     * @param false $site
     * @return void
     *
     * @noinspection PhpMissingParamTypeInspection
     */
    public static function RemoveOption($module_id, $name = '', $site = false)
    {
    }

    /**
     * @param string $module_id
     * @param string $name
     * @param string $def
     * @param false $site
     * @return mixed
     *
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingParamTypeInspection
     */
    public static function GetOptionInt($module_id, $name, $def = '', $site = false)
    {
        return null;
    }

    /**
     * @param string $module_id
     * @param string $name
     * @param string $value
     * @param string $desc
     * @param string $site
     * @return bool
     *
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function SetOptionInt($module_id, $name, $value = '', $desc = '', $site = '')
    {
        return true;
    }
}

<?php

/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Config;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ArgumentOutOfRangeException;

class Option
{
    /**
     * @var array<mixed>
     */
    protected static $options = [];

    /**
     * @var null|int
     */
    protected static $cacheTtl;

    /**
     * Returns a value of an option.
     *
     * @param string $moduleId The module ID.
     * @param string $name The option name.
     * @param string $default The default value to return, if a value doesn't exist.
     * @param bool|string $siteId The site ID, if the option differs for sites.
     *
     * @throws Main\ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @return string
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function get($moduleId, $name, $default = "", $siteId = false)
    {
        return '';
    }

    /**
     * Returns the real value of an option as it's written in a DB.
     *
     * @param string $moduleId The module ID.
     * @param string $name The option name.
     * @param bool|string $siteId The site ID.
     *
     * @throws Main\ArgumentNullException
     * @return null|string
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function getRealValue($moduleId, $name, $siteId = false)
    {
        return null;
    }

    /**
     * Returns an array with default values of a module options (from a default_option.php file).
     *
     * @param string $moduleId The module ID.
     *
     * @throws ArgumentOutOfRangeException
     * @return array<mixed>
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function getDefaults($moduleId)
    {
        return [];
    }

    /**
     * Returns an array of set options array(name => value).
     *
     * @param string $moduleId The module ID.
     * @param bool|string $siteId The site ID, if the option differs for sites.
     *
     * @throws Main\ArgumentNullException
     * @return array<mixed>
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function getForModule($moduleId, $siteId = false)
    {
        return [];
    }

    /**
     * @param string $moduleId
     * @param string $siteId
     *
     * @throws Main\SystemException
     * @return void
     * @noinspection PhpUnusedPrivateMethodInspection
     * @noinspection PhpMissingParamTypeInspection
     */
    private static function load($moduleId, $siteId)
    {
    }

    /**
     * Sets an option value and saves it into a DB. After saving the OnAfterSetOption event is triggered.
     *
     * @param string $moduleId The module ID.
     * @param string $name The option name.
     * @param string $value The option value.
     * @param string $siteId The site ID, if the option depends on a site.
     *
     * @throws Main\ArgumentOutOfRangeException
     * @return void
     * @noinspection PhpMissingParamTypeInspection
     */
    public static function set($moduleId, $name, $value = "", $siteId = "")
    {
    }

    /**
     * @param string $moduleId
     *
     * @throws ArgumentOutOfRangeException
     * @return void
     * @noinspection PhpUnusedPrivateMethodInspection
     * @noinspection PhpMissingParamTypeInspection
     */
    private static function loadTriggers($moduleId)
    {
    }

    /**
     * @return int
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection PhpUnusedPrivateMethodInspection
     */
    private static function getCacheTtl()
    {
        return 0;
    }

    /**
     * Deletes options from a DB.
     *
     * @param string $moduleId The module ID.
     * @param array<mixed> $filter The array with filter keys:
     *        name - the name of the option;
     *        site_id - the site ID (can be empty).
     *
     * @throws Main\ArgumentNullException
     * @return void
     * @noinspection PhpMissingParamTypeInspection
     */
    public static function delete($moduleId, $filter = [])
    {
    }
}

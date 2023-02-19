<?php
declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class CModule
{
    /**
     * Makes module classes and function available. Returns true on success.
     *
     * @param string $module_name
     * @return bool
     */
    public static function IncludeModule($module_name)
    {
        return true;
    }
}

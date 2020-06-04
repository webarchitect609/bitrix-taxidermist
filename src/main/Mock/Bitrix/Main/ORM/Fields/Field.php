<?php
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Fields;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;

abstract class Field
{
    /**
     * @param string $name
     * @param array $parameters deprecated, use configure* and add* methods instead
     *
     * @throws SystemException
     */
    public function __construct($name, $parameters = [])
    {
    }
}

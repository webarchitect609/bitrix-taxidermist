<?php

declare(strict_types=1);
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Fields;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;

class StringField extends ScalarField
{
    /**
     * @param mixed $value
     * @return string
     */
    public function cast($value)
    {
        return '';
    }

    /**
     * @param mixed $value
     * @return string
     *
     * @throws SystemException
     */
    public function convertValueFromDb($value)
    {
        return '';
    }

    /**
     * @param string $value
     * @return string
     *
     * @throws SystemException
     */
    public function convertValueToDb($value)
    {
        return '';
    }
}

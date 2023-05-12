<?php

declare(strict_types=1);
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Fields;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;

class BooleanField extends ScalarField
{
    /**
     * @param mixed $value
     * @return mixed
     */
    public function cast($value)
    {
        return false;
    }

    /**
     * @return mixed
     */
    public function convertValueFromDb($value)
    {
        return false;
    }

    /**
     * @param mixed $value
     * @return string
     *
     * @throws SystemException
     */
    public function convertValueToDb($value)
    {
        return '';
    }
}

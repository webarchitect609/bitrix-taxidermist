<?php

declare(strict_types=1);
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Fields;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;

class FloatField extends ScalarField
{
    /**
     * @param mixed $value
     * @return float|mixed
     */
    public function cast($value)
    {
        return 0.0;
    }

    /**
     * @param mixed $value
     * @return float|mixed
     *
     * @throws SystemException
     */
    public function convertValueFromDb($value)
    {
        return 0.0;
    }

    /**
     * @param mixed $value
     * @return string
     *
     * @throws SystemException
     */
    public function convertValueToDb($value)
    {
        return 0.0;
    }
}

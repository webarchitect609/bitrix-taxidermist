<?php
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Fields;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;

class FloatField extends ScalarField
{
    /**
     * @param mixed $value
     *
     * @return float|mixed
     */
    public function cast($value)
    {
        return 0.0;
    }

    /**
     * @param mixed $value
     *
     * @throws SystemException
     * @return float|mixed
     */
    public function convertValueFromDb($value)
    {
        return 0.0;
    }

    /**
     * @param mixed $value
     *
     * @throws SystemException
     * @return string
     */
    public function convertValueToDb($value)
    {
        return 0.0;
    }
}

<?php
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Fields;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;

class BooleanField extends ScalarField
{
    /**
     * @param mixed $value
     *
     * @return mixed
     */
    public function cast($value)
    {
        return false;
    }

    /**
     * @param $value
     *
     * @return mixed
     */
    public function convertValueFromDb($value)
    {
        return false;
    }

    /**
     * @param mixed $value
     *
     * @throws SystemException
     * @return string
     */
    public function convertValueToDb($value)
    {
        return '';
    }
}

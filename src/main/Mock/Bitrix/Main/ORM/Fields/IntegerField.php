<?php
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Fields;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;

class IntegerField extends ScalarField
{
    /**
     * @param mixed $value
     *
     * @return int
     */
    public function cast($value)
    {
        return 0;
    }

    /**
     * @param mixed $value
     *
     * @throws SystemException
     * @return int
     */
    public function convertValueFromDb($value)
    {
        return 0;
    }

    /**
     * @param int $value
     *
     * @throws SystemException
     * @return string
     */
    public function convertValueToDb($value)
    {
        return 0;
    }
}

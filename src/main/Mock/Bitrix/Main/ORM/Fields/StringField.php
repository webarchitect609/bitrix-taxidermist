<?php
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Fields;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;

class StringField extends ScalarField
{
    /**
     * @param mixed $value
     *
     * @return string
     */
    public function cast($value)
    {
        return '';
    }

    /**
     * @param mixed $value
     *
     * @throws SystemException
     * @return string
     */
    public function convertValueFromDb($value)
    {
        return '';
    }

    /**
     * @param string $value
     *
     * @throws SystemException
     * @return string
     */
    public function convertValueToDb($value)
    {
        return '';
    }
}

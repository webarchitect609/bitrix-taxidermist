<?php

declare(strict_types=1);
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Fields;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;

class IntegerField extends ScalarField
{
    /**
     * @param mixed $value
     * @return int
     */
    public function cast($value)
    {
        return 0;
    }

    /**
     * @param mixed $value
     * @return int
     *
     * @throws SystemException
     */
    public function convertValueFromDb($value)
    {
        return 0;
    }

    /**
     * @param int $value
     * @return string
     *
     * @throws SystemException
     */
    public function convertValueToDb($value)
    {
        return 0;
    }
}

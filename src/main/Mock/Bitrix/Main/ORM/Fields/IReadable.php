<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Fields;

/**
 * Interface for Entity Fields to be filtered by Query.
 */
interface IReadable
{
    /**
     * Casts value strictly to field type.
     * Non-static because of field configuration (e.g. length for string or precision for float)
     *
     * @param mixed $value
     * @return mixed
     */
    public function cast($value);

    /**
     * Returns value converted from SQL raw result.
     * Non-static because of dependency on Entity's Connection. Should use $this->getConnection() inside.
     *
     * @param mixed $value
     * @return mixed
     */
    public function convertValueFromDb($value);

    /**
     * Returns raw SQL with escaped and quoted value.
     * Non-static because of dependency on Entity's Connection. Should use $this->getConnection() inside.
     *
     * @param mixed $value
     * @return string
     */
    public function convertValueToDb($value);
}

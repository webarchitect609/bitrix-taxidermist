<?php

declare(strict_types=1);
/** @noinspection PhpDocRedundantThrowsInspection */

/** @noinspection PhpUnusedParameterInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Query;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ArgumentException;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\DB\ArrayResult;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ObjectPropertyException;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Entity;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;

class Query
{
    /**
     * @param Entity|Query|string $source
     *
     * @throws ArgumentException
     * @throws SystemException
     */
    public function __construct($source)
    {
    }

    /**
     * Sets a list of fields for SELECT clause
     *
     *
     * @return Query
     */
    public function setSelect(array $select)
    {
        return $this;
    }

    /**
     * Sets a list of filters for WHERE clause
     *
     *
     * @return Query
     */
    public function setFilter(array $filter)
    {
        return $this;
    }

    /**
     * Sets a limit for LIMIT n clause
     *
     * @param int $limit
     * @return Query
     */
    public function setLimit($limit)
    {
        return $this;
    }

    /**
     * Builds and executes the query and returns the result
     *
     * @return Result
     *
     * @throws ObjectPropertyException
     * @throws SystemException
     */
    public function exec()
    {
        return new Result($this, new ArrayResult(fopen('/dev/null', 'rb+')));
    }
}

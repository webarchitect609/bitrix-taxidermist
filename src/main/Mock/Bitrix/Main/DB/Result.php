<?php

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\DB;

use IteratorAggregate;
use Traversable;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Diag\SqlTrackerQuery;

abstract class Result implements IteratorAggregate
{
    /**
     * @param resource $result Database-specific query result.
     * @param Connection $dbConnection Connection object.
     * @param SqlTrackerQuery $trackerQuery Helps to collect debug information.
     */
    public function __construct(
        $result,
        Connection $dbConnection = null,
        SqlTrackerQuery $trackerQuery = null
    ) {
    }

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        return new ResultIterator($this);
    }
}

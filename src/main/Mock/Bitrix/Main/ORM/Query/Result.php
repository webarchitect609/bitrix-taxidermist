<?php
/** @noinspection PhpUnusedParameterInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Query;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\DB\Result as BaseResult;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Text\Converter;

class Result extends BaseResult
{
    /** @noinspection PhpMissingParentConstructorInspection */
    public function __construct(Query $query, BaseResult $result)
    {
    }

    /**
     * Fetches one row of the query result and returns it in the associative array of converted data or false on empty
     * data.
     *
     * @param Converter $converter Optional converter to encode data on fetching.
     *
     * @return array|false
     */
    public function fetch(Converter $converter = null)
    {
        return false;
    }
}

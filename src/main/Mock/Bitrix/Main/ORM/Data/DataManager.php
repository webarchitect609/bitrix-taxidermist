<?php

declare(strict_types=1);
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Data;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ArgumentException;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Entity;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Query\Query;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;

abstract class DataManager
{
    /**
     * Returns DB table name for entity
     *
     * @return string
     */
    public static function getTableName()
    {
        return null;
    }

    /**
     * Returns entity map definition.
     * To get initialized fields @see \Bitrix\Main\ORM\Entity::getFields() and \Bitrix\Main\ORM\Base::getField()
     */
    public static function getMap()
    {
        return [];
    }

    /**
     * Creates and returns the Query object for the entity
     *
     * @return Query
     *
     * @throws ArgumentException
     * @throws SystemException
     */
    public static function query()
    {
        return new Query(static::getEntity());
    }

    /**
     * Returns entity object
     *
     * @return Entity
     *
     * @throws ArgumentException
     * @throws SystemException
     */
    public static function getEntity()
    {
        return new Entity;
    }
}

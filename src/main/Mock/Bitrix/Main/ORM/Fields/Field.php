<?php
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Fields;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Entity;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;

abstract class Field
{
    /** @var string */
    protected $name;

    /** @var Entity */
    protected $entity;

    /**
     * @param string $name
     * @param array<string, mixed> $parameters deprecated, use configure* and add* methods instead
     *
     * @throws SystemException
     */
    public function __construct($name, $parameters = [])
    {
    }

    /**
     * @param callable $modifier
     *
     * @throws SystemException
     * @return Field
     * @noinspection PhpUnusedParameterInspection
     */
    public function addFetchDataModifier($modifier)
    {
        return $this;
    }

    /**
     * Called after being initialized by Entity
     * @return null
     */
    public function postInitialize()
    {
        return null;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Entity
     */
    public function getEntity()
    {
        return $this->entity;
    }
}

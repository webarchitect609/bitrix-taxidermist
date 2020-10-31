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

    /** @var null|callback[] */
    protected $saveDataModifiers;

    /**
     * @param string $name
     * @param array<string, mixed> $parameters deprecated, use configure* and add* methods instead
     *
     * @throws SystemException
     * @noinspection PhpMissingParamTypeInspection
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
     * @noinspection PhpMissingParamTypeInspection
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

    /**
     * @throws SystemException
     * @return null|array|callback[]
     */
    public function getSaveDataModifiers()
    {
        return $this->saveDataModifiers;
    }

    /**
     * @param $modifier
     *
     * @throws SystemException
     * @return $this
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpUnusedParameterInspection
     */
    public function addSaveDataModifier($modifier)
    {
        return $this;
    }
}

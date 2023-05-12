<?php

declare(strict_types=1);
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

    /** @var null|callable[] */
    protected $saveDataModifiers;

    /** @var string */
    protected $dataType;

    /**
     * @param string $name
     * @param array<string, mixed> $parameters deprecated, use configure* and add* methods instead
     *
     * @throws SystemException
     *
     * @noinspection PhpMissingParamTypeInspection
     */
    public function __construct($name, $parameters = [])
    {
    }

    /**
     * @param callable $modifier
     * @return Field
     *
     * @throws SystemException
     *
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingParamTypeInspection
     */
    public function addFetchDataModifier($modifier)
    {
        return $this;
    }

    /**
     * Called after being initialized by Entity
     *
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
     * @return null|array|callable[]
     *
     * @throws SystemException
     */
    public function getSaveDataModifiers()
    {
        return $this->saveDataModifiers;
    }

    /**
     * @return $this
     *
     * @throws SystemException
     *
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpUnusedParameterInspection
     */
    public function addSaveDataModifier($modifier)
    {
        return $this;
    }

    /**
     * @return null|string
     *
     * @deprecated
     */
    public function getDataType()
    {
        return $this->dataType;
    }
}

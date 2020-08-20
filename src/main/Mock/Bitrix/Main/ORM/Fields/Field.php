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
     * @param array $parameters deprecated, use configure* and add* methods instead
     *
     * @throws SystemException
     */
    public function __construct($name, $parameters = [])
    {
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

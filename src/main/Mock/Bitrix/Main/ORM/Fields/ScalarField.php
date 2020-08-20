<?php

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Fields;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\DB\SqlExpression;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;

abstract class ScalarField extends Field implements IStorable
{
    /**
     * ScalarField constructor.
     *
     * @param string $name
     * @param array<string, mixed> $parameters deprecated, use configure* and add* methods instead
     *
     * @throws SystemException
     */
    public function __construct($name, $parameters = [])
    {
        parent::__construct($name, $parameters);
    }

    /**
     * @param boolean $value
     *
     * @return $this
     * @noinspection PhpUnusedParameterInspection
     */
    public function configureRequired($value)
    {
        return $this;
    }

    /**
     * @return bool
     */
    public function isRequired()
    {
        return false;
    }

    /**
     * @param callable|mixed $value
     *
     * @return $this
     * @noinspection PhpUnusedParameterInspection
     */
    public function configureDefaultValue($value)
    {
        return $this;
    }

    /**
     * @param array<mixed> $row ORM data row in case of dependency value on other values
     *
     * @return null|callable|mixed
     * @noinspection PhpUnusedParameterInspection
     */
    public function getDefaultValue($row = null)
    {
        return null;
    }

    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function isValueEmpty($value)
    {
        if ($value instanceof SqlExpression) {
            $value = $value->compile();
        }

        return (strval($value) === '');
    }
}

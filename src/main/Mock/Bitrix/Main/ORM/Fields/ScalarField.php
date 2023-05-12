<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Fields;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\DB\SqlExpression;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;

abstract class ScalarField extends Field implements IStorable
{
    protected $column_name = '';

    /**
     * ScalarField constructor.
     *
     * @param string $name
     * @param array<string, mixed> $parameters deprecated, use configure* and add* methods instead
     *
     * @throws SystemException
     *
     * @noinspection PhpMissingParamTypeInspection
     */
    public function __construct($name, $parameters = [])
    {
        parent::__construct($name, $parameters);
    }

    /**
     * @param bool $value
     * @return $this
     *
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingParamTypeInspection
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
     * @return $this
     *
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingParamTypeInspection
     */
    public function configureDefaultValue($value)
    {
        return $this;
    }

    /**
     * @param array<mixed> $row ORM data row in case of dependency value on other values
     * @return null|callable|mixed
     *
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpDocSignatureInspection
     */
    public function getDefaultValue($row = null)
    {
        return null;
    }

    /**
     * @return bool
     */
    public function isValueEmpty(mixed $value)
    {
        if ($value instanceof SqlExpression) {
            $value = $value->compile();
        }

        return strval($value) === '';
    }

    public function getColumnName()
    {
        return $this->column_name;
    }

    /**
     * @param string $column_name
     *
     * @noinspection PhpMissingParamTypeInspection*/
    public function setColumnName($column_name)
    {
        $this->column_name = $column_name;
    }
}

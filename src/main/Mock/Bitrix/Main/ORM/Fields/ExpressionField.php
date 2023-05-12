<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Fields;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;

class ExpressionField extends Field implements IReadable
{
    /**
     * @var ScalarField
     */
    protected $valueField;

    /**
     * All fields in exression should be placed as %s (or as another placeholder for sprintf),
     * and the real field names being carrying in $buildFrom array (= args for sprintf)
     *
     * @param string $name
     * @param string $expression
     * @param null|array|string $buildFrom
     * @param array $parameters deprecated, use configure* and add* instead
     *
     * @throws SystemException
     *
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingParamTypeInspection
     */
    public function __construct($name, $expression, $buildFrom = null, $parameters = [])
    {
        parent::__construct($name, $parameters);
    }

    /**
     * @param mixed $value
     * @return mixed
     */
    public function cast($value)
    {
        $valueField = $this->valueField;

        return $valueField->cast($value);
    }

    /**
     * @param mixed $value
     * @return mixed
     */
    public function convertValueFromDb($value)
    {
        $valueField = $this->valueField;

        return $valueField->convertValueFromDb($value);
    }

    /**
     * @param mixed $value
     * @return string
     */
    public function convertValueToDb($value)
    {
        /** @var IStorable $valueField */
        $valueField = $this->valueField;

        return $valueField->convertValueToDb($value);
    }
}

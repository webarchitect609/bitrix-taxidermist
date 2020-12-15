<?php

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

use Exception;

class ArgumentOutOfRangeException extends ArgumentException
{
    /**
     * @var null|array|mixed
     */
    protected $lowerLimit;

    /**
     * @var null
     */
    protected $upperLimit;

    /**
     * Creates new exception object.
     *
     * @param string $parameter Argument that generates exception
     * @param null $lowerLimit Either lower limit of the allowable range of values or an array of allowable values
     * @param null $upperLimit Upper limit of the allowable values
     * @param null|Exception $previous
     *
     * @noinspection PhpMissingParamTypeInspection
     */
    public function __construct($parameter, $lowerLimit = null, $upperLimit = null, Exception $previous = null)
    {
        // @phpstan-ignore-next-line
        if (is_array($lowerLimit)) {
            $message = sprintf("The value of an argument '%s' is outside the allowable range of values: %s", $parameter, implode(", ", $lowerLimit));
        // @phpstan-ignore-next-line
        } elseif (($lowerLimit !== null) && ($upperLimit !== null)) {
            $message = sprintf("The value of an argument '%s' is outside the allowable range of values: from %s to %s", $parameter, $lowerLimit, $upperLimit);
        // @phpstan-ignore-next-line
        } elseif (($lowerLimit === null) && ($upperLimit !== null)) {
            $message = sprintf("The value of an argument '%s' is outside the allowable range of values: not greater than %s", $parameter, $upperLimit);
        // @phpstan-ignore-next-line
        } elseif (($lowerLimit !== null) && ($upperLimit === null)) {
            $message = sprintf("The value of an argument '%s' is outside the allowable range of values: not less than %s", $parameter, $lowerLimit);
        } else {
            $message = sprintf("The value of an argument '%s' is outside the allowable range of values", $parameter);
        }

        $this->lowerLimit = $lowerLimit;
        $this->upperLimit = $upperLimit;

        parent::__construct($message, $parameter, $previous);
    }

    /**
     * @return null|array|mixed
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function getLowerLimitType()
    {
        return $this->lowerLimit;
    }

    /**
     * @return null
     */
    public function getUpperType()
    {
        return $this->upperLimit;
    }
}

<?php

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

use Exception;

class ArgumentTypeException extends ArgumentException
{
    /**
     * @var string
     */
    protected $requiredType;

    /**
     * Creates new exception object
     *
     * @param string $parameter Argument that generates exception
     * @param string $requiredType Required type
     * @param null|Exception $previous
     *
     * @noinspection PhpMissingParamTypeInspection
     */
    public function __construct($parameter, $requiredType = "", Exception $previous = null)
    {
        if (!empty($requiredType)) {
            $message = sprintf("The value of an argument '%s' must be of type %s", $parameter, $requiredType);
        } else {
            $message = sprintf("The value of an argument '%s' has an invalid type", $parameter);
        }

        $this->requiredType = $requiredType;

        parent::__construct($message, $parameter, $previous);
    }

    /**
     * @return string
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function getRequiredType()
    {
        return $this->requiredType;
    }
}

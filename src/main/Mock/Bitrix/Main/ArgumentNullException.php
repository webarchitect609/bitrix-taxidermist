<?php

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

use Exception;

class ArgumentNullException extends ArgumentException
{
    /**
     * ArgumentNullException constructor.
     *
     * @param string $parameter
     * @param null|Exception $previous
     *
     * @noinspection PhpMissingParamTypeInspection
     */
    public function __construct($parameter, Exception $previous = null)
    {
        $message = sprintf("Argument '%s' is null or empty", $parameter);
        parent::__construct($message, $parameter, $previous);
    }
}

<?php

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

/**
 * Exception is thrown when the object can't be constructed.
 */
class ObjectException extends SystemException
{
    public function __construct($message = "", \Exception $previous = null)
    {
        parent::__construct($message, 500, '', 0, $previous);
    }
}

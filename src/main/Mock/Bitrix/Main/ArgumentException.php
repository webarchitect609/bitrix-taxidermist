<?php

declare(strict_types=1);
/** @noinspection PhpUnusedParameterInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

use Exception;

class ArgumentException extends SystemException
{
    public function __construct($message = '', $parameter = '', Exception $previous = null)
    {
        parent::__construct($message, 100, '', 0, $previous);
    }
}

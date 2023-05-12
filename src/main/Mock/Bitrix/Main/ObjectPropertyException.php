<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

use Exception;

class ObjectPropertyException extends ArgumentException
{
    public function __construct($parameter = '', Exception $previous = null)
    {
        parent::__construct('Object property "'.$parameter.'" not found.', $parameter, $previous);
    }
}

<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Enum;

class ErrorCode
{
    final public const ERROR_REGISTERING_AUTOLOADER = 1;

    final public const AUTOLOADER_IS_ALREADY_REGISTERED = 2;

    final public const AUTOLOADER_NOT_REGISTERED = 3;
}
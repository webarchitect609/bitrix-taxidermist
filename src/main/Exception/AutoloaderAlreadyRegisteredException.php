<?php

namespace WebArch\BitrixTaxidermist\Exception;

use LogicException;
use Throwable;
use WebArch\BitrixTaxidermist\Enum\ErrorCode;

class AutoloaderAlreadyRegisteredException extends LogicException implements TaxidermistExceptionInterface
{
    public function __construct(string $autoloaderMethod, Throwable $previous = null)
    {
        parent::__construct(
            sprintf(
                '`%s` has been already registered as autoloader.',
                $autoloaderMethod
            ),
            ErrorCode::AUTOLOADER_IS_ALREADY_REGISTERED,
            $previous
        );
    }
}

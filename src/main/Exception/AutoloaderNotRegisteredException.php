<?php

namespace WebArch\BitrixTaxidermist\Exception;

use LogicException;
use Throwable;
use WebArch\BitrixTaxidermist\Enum\ErrorCode;

class AutoloaderNotRegisteredException extends LogicException implements TaxidermistExceptionInterface
{
    public function __construct(string $autoloaderMethod, Throwable $previous = null)
    {
        parent::__construct(
            sprintf(
                '`%s` is not registered as autoloader.',
                $autoloaderMethod
            ),
            ErrorCode::AUTOLOADER_NOT_REGISTERED,
            $previous
        );
    }

}

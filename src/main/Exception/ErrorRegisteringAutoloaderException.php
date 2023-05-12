<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Exception;

use LogicException;
use Throwable;
use WebArch\BitrixTaxidermist\Enum\ErrorCode;

class ErrorRegisteringAutoloaderException extends LogicException implements TaxidermistExceptionInterface
{
    public function __construct(string $autoloaderMethod, Throwable $previous = null)
    {
        parent::__construct(
            sprintf(
                'Error registering `%s` as class autoloader.',
                $autoloaderMethod
            ),
            ErrorCode::ERROR_REGISTERING_AUTOLOADER,
            $previous
        );
    }
}

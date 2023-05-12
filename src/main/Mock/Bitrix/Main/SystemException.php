<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

use Exception;

class SystemException extends Exception
{
    /**
     * Creates new exception object.
     *
     * @param string $message
     * @param int $code
     * @param string $file
     * @param int $line
     * @param Exception $previous
     */
    public function __construct($message = '', $code = 0, $file = '', $line = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        if (! empty($file) && ! empty($line)) {
            $this->file = $file;
            $this->line = $line;
        }
    }
}

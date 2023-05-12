<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Diag;

use ArrayAccess;

class SqlTrackerQuery implements ArrayAccess
{
    /**
     * @return bool|void
     */
    public function offsetExists(mixed $offset)
    {
        return false;
    }

    /**
     * @return mixed|void
     */
    public function offsetGet(mixed $offset)
    {
        return null;
    }

    public function offsetSet(mixed $offset, mixed $value)
    {
    }

    public function offsetUnset(mixed $offset)
    {
    }
}

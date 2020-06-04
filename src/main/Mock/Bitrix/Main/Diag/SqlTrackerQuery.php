<?php

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Diag;

use ArrayAccess;

class SqlTrackerQuery implements ArrayAccess
{
    /**
     * @param mixed $offset
     *
     * @return bool|void
     */
    public function offsetExists($offset)
    {
        return false;
    }

    /**
     * @param mixed $offset
     *
     * @return mixed|void
     */
    public function offsetGet($offset)
    {
        return null;
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
    }
}

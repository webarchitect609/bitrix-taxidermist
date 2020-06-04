<?php

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\DB;

use Iterator;

class ResultIterator implements Iterator
{
    /**
     * ResultIterator constructor.
     *
     * @param Result $result
     */
    public function __construct(Result $result)
    {
    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        return false;
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
    }
}

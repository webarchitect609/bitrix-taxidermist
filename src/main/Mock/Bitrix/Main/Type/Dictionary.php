<?php

declare(strict_types=1);
/** @noinspection PhpUnused */
/** @noinspection PhpUnusedParameterInspection */
/** @noinspection PhpDocRedundantThrowsInspection */
/** @noinspection PhpMissingReturnTypeInspection */
/** @noinspection PhpMissingParamTypeInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Type;

use ArrayAccess;
use Countable;
use Iterator;

class Dictionary implements ArrayAccess, Iterator, Countable
{
    /**
     * @var array
     */
    protected $values = [];

    /**
     * Creates object.
     */
    public function __construct(array $values = null)
    {
    }

    /**
     * Returns any variable by its name. Null if variable is not set.
     *
     * @param string $name
     */
    public function get($name): null|array|string
    {
        return null;
    }

    public function set(array $values)
    {
        $this->values = $values;
    }

    public function clear()
    {
        $this->values = [];
    }

    /**
     * Return the current element
     */
    public function current()
    {
        return [];
    }

    /**
     * Move forward to next element
     */
    public function next()
    {
        return [];
    }

    /**
     * Return the key of the current element
     */
    public function key()
    {
        return '';
    }

    /**
     * Checks if current position is valid
     */
    public function valid()
    {
        return true;
    }

    /**
     * Rewind the Iterator to the first element
     */
    public function rewind()
    {
        return true;
    }

    /**
     * Whether a offset exists
     */
    public function offsetExists($offset)
    {
        return true;
    }

    /**
     * Offset to retrieve
     */
    public function offsetGet($offset)
    {
        return null;
    }

    /**
     * Offset to set
     */
    public function offsetSet($offset, $value)
    {
    }

    /**
     * Offset to unset
     */
    public function offsetUnset($offset)
    {
    }

    /**
     * Count elements of an object
     */
    public function count()
    {
        return 0;
    }

    /**
     * Returns the values as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [];
    }

    /**
     * Returns true if the dictionary is empty.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return true;
    }
}

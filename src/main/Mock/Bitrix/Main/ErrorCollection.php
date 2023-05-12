<?php

declare(strict_types=1);
/** @noinspection PhpUnused */
/** @noinspection PhpUnusedParameterInspection */
/** @noinspection PhpDocRedundantThrowsInspection */
/** @noinspection PhpMissingReturnTypeInspection */
/** @noinspection PhpMissingParamTypeInspection */
/** @noinspection PhpMissingParentConstructorInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Type\Dictionary;

class ErrorCollection extends Dictionary
{
    /**
     * Constructor ErrorCollection.
     *
     * @param Error[] $values Initial errors in the collection.
     */
    public function __construct(array $values = null)
    {
    }

    /**
     * Adds an array of errors to the collection.
     *
     * @param Error[] $errors
     * @return void
     */
    public function add(array $errors)
    {
    }

    /**
     * Returns an error with the necessary code.
     *
     * @param int|string $code The code of the error.
     */
    public function getErrorByCode(int|string $code): ?Error
    {
        return null;
    }

    /**
     * Adds an error to the collection.
     *
     * @param Error $error An error object.
     * @param null|int|string $offset. Offset in the array.
     * @return void
     */
    public function setError(Error $error, null|int|string $offset = null)
    {
        parent::offsetSet($offset, $error);
    }

    /**
     * \ArrayAccess thing.
     *
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
    }
}

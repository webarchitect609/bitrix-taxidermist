<?php
declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

class Result
{
    /** @var bool */
    protected $isSuccess = true;

    /** @var ErrorCollection */
    protected $errors;

    /** @var  array */
    protected $data = [];

    public function __construct()
    {
    }

    public function __clone()
    {
    }

    /**
     * Returns the result status.
     *
     * @return bool
     */
    public function isSuccess()
    {
        return true;
    }

    /**
     * Adds the error.
     *
     * @param Error $error
     * @return $this
     */
    public function addError(Error $error)
    {
        return $this;
    }

    /**
     * Returns an array of Error objects.
     *
     * @return Error[]
     */
    public function getErrors()
    {
        return [];
    }

    /**
     * Returns the error collection.
     *
     * @return ErrorCollection
     */
    public function getErrorCollection()
    {
        return new ErrorCollection();
    }

    /**
     * Returns array of strings with error messages
     *
     * @return array
     */
    public function getErrorMessages()
    {
        $messages = [];
        return $messages;
    }

    /**
     * Adds array of Error objects
     *
     * @param Error[] $errors
     * @return $this
     */
    public function addErrors(array $errors)
    {
        return $this;
    }

    /**
     * Sets data of the result.
     * @param array $data
     * @return $this
     */
    public function setData(array $data)
    {
        return $this;
    }

    /**
     * Returns data array saved into the result.
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}

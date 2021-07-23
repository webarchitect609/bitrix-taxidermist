<?php
/** @noinspection PhpUnused */
/** @noinspection PhpUnusedParameterInspection */
/** @noinspection PhpDocRedundantThrowsInspection */
/** @noinspection PhpMissingReturnTypeInspection */
/** @noinspection PhpMissingParamTypeInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

/**
 * @implements Bitrix\Main\Errorable
 */
trait ErrorableImplementation
{
    /** @var ErrorCollection */
    private $errorCollection;

    /**
     * Return true if collection has errors.
     *
     * @return boolean
     */
    public function hasErrors()
    {
        return false;
    }

    /**
     * Getting array of errors.
     *
     * @return Error[]
     */
    public function getErrors()
    {
        return [];
    }

    /**
     * Returns an error with the necessary code.
     *
     * @param int|string $code The code of the error.
     *
     * @return null|Error
     */
    public function getErrorByCode($code)
    {
        return null;
    }
}

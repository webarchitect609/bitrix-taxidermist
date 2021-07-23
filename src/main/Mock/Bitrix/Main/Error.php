<?php
/** @noinspection PhpUnused */
/** @noinspection PhpUnusedParameterInspection */
/** @noinspection PhpDocRedundantThrowsInspection */
/** @noinspection PhpMissingReturnTypeInspection */
/** @noinspection PhpMissingParamTypeInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

class Error implements \JsonSerializable
{
    /** @var int|string */
    protected $code;

    /** @var string */
    protected $message;
    /**
     * @var null
     */
    protected $customData;

    /**
     * Creates a new Error.
     *
     * @param string $message Message of the error.
     * @param int|string $code Code of the error.
     * @param null|mixed $customData Data typically of key/value pairs that provide additional
     * user-defined information about the error.
     */
    public function __construct($message, $code = 0, $customData = null)
    {
    }

    /**
     * Returns the code of the error.
     * @return int|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Returns the message of the error.
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|mixed
     */
    public function getCustomData()
    {
        return $this->customData;
    }

    public function __toString()
    {
        return $this->getMessage();
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [];
    }
}

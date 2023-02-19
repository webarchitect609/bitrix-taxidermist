<?php
declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Sale;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ErrorCollection;

class Result extends \WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Data\Result
{
    /** @var  int */
    protected $id;

    protected $warnings = [];

    /** @var bool */
    protected $isSuccess = true;

    public function __construct()
    {
        $this->warnings = new ErrorCollection();
        parent::__construct();
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Returns id of added record
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __destruct()
    {
        //just quietly die in contrast Entity\Result either checked errors or not.
    }

    public function addData(array $data)
    {
    }

    public function get($offset)
    {
        return null;
    }

    public function set($offset, $value)
    {
    }

    /**
     * Returns array of strings with warning messages
     *
     * @return array
     */
    public function getWarningMessages()
    {
        $messages = [];
        return $messages;
    }


    /**
     * @return bool
     */
    public function hasWarnings()
    {
        return 0;
    }
}

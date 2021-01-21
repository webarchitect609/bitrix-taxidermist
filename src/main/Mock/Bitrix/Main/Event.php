<?php
/** @noinspection PhpUnused */
/** @noinspection PhpUnusedParameterInspection */
/** @noinspection PhpDocRedundantThrowsInspection */
/** @noinspection PhpMissingReturnTypeInspection */
/** @noinspection PhpMissingParamTypeInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

use Closure;
use Exception;

class Event
{
    /**
     * @var string
     */
    protected $moduleId;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var null|array<mixed>|closure
     */
    protected $parameters = [];

    /** @var callable */
    protected $parametersLoader;

    /**
     * @var null|string|string[]
     */
    protected $filter;

    /**
     * @var null|Event
     */
    protected $sender;

    /**
     * @var bool
     */
    protected $debugMode = false;

    /**
     * @var array<mixed>
     */
    protected $debugInfo = [];

    /** @var EventResult[] */
    protected $results = [];

    /** @var Exception[] */
    protected $exceptions = [];

    /**
     * @param string $moduleId
     * @param string $type
     * @param array<mixed> $parameters
     * @param null|string|string[] $filter Filter of module names, mail event names and component names of the event
     *     handlers
     *
     * @throws ArgumentTypeException
     */
    public function __construct($moduleId, $type, $parameters = [], $filter = null)
    {
        $this->moduleId = $moduleId;
        $this->type = $type;
        $this->setParameters($parameters);
        $this->setFilter($filter);

        $this->debugMode = false;
    }

    /**
     * @return string
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * @return string
     */
    public function getEventType()
    {
        return $this->type;
    }

    /**
     * @param array<mixed>|closure $parameters
     *
     * @throws ArgumentTypeException
     * @return void
     */
    public function setParameters($parameters)
    {
    }

    /**
     * @return null|array<mixed>|Closure
     */
    public function getParameters()
    {
        return [];
    }

    /**
     * @param string $key
     * @param mixed $value
     *
     * @return void
     */
    public function setParameter($key, $value)
    {
    }

    /**
     * @param string $key
     *
     * @return null|mixed
     */
    public function getParameter($key)
    {
        return null;
    }

    /**
     * @throws ArgumentTypeException
     * @return bool
     */
    protected function loadParameters()
    {
        return true;
    }

    /**
     * @param null|string|string[] $filter
     *
     * @return void
     */
    public function setFilter($filter)
    {
    }

    /**
     * @return null|string|string[]
     */
    public function getFilter()
    {
        return '';
    }

    /**
     * @return EventResult[]
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param EventResult $result
     *
     * @return void
     */
    public function addResult(EventResult $result)
    {
    }

    /**
     * @return null|Event
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param null|Event $sender
     *
     * @throws SystemException
     * @return void
     */
    public function send($sender = null)
    {
    }

    /**
     * @param Exception $exception
     *
     * @return void
     */
    public function addException(Exception $exception)
    {
    }

    /**
     * @return Exception[]
     */
    public function getExceptions()
    {
        return [];
    }

    /**
     * @return void
     */
    public function turnDebugOn()
    {
    }

    /**
     * @return bool
     */
    public function isDebugOn()
    {
        return false;
    }

    /**
     * @param array<mixed> $ar
     *
     * @return void
     */
    public function addDebugInfo($ar)
    {
    }

    /**
     * @return array<mixed>
     */
    public function getDebugInfo()
    {
        return [];
    }
}

<?php

declare(strict_types=1);
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
    public function __construct(
        protected $moduleId,
        protected $type,
        $parameters = [],
        $filter = null,
    ) {
        $this->setParameters($parameters);
        $this->setFilter($filter);
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
     * @return void
     *
     * @throws ArgumentTypeException
     */
    public function setParameters(array|Closure $parameters)
    {
    }

    /**
     * @return null|array<mixed>|Closure
     */
    public function getParameters(): null|array|Closure
    {
        return [];
    }

    /**
     * @param string $key
     * @return void
     */
    public function setParameter($key, mixed $value)
    {
    }

    /**
     * @param string $key
     * @return null|mixed
     */
    public function getParameter($key)
    {
        return null;
    }

    /**
     * @return bool
     *
     * @throws ArgumentTypeException
     */
    protected function loadParameters()
    {
        return true;
    }

    /**
     * @param null|string|string[] $filter
     * @return void
     */
    public function setFilter(null|string|array $filter)
    {
    }

    /**
     * @return null|string|string[]
     */
    public function getFilter(): null|string|array
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
     * @return void
     */
    public function addResult(EventResult $result)
    {
    }

    public function getSender(): ?Event
    {
        return $this->sender;
    }

    /**
     * @return void
     *
     * @throws SystemException
     */
    public function send(?Event $sender = null)
    {
    }

    /**
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

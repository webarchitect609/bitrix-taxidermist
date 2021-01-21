<?php
/** @noinspection PhpMissingReturnTypeInspection */

/** @noinspection PhpMissingParamTypeInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

class EventResult
{
    const UNDEFINED = 0;

    const SUCCESS = 1;

    const ERROR = 2;

    /**
     * @var null|mixed
     */
    protected $moduleId;

    /**
     * @var null|mixed
     */
    protected $handler;

    /**
     * @var int
     */
    protected $type;

    /**
     * @var null|array<mixed>
     */
    protected $parameters;

    /**
     * EventResult constructor.
     *
     * @param int $type
     * @param null|array<mixed> $parameters
     * @param null|string $moduleId
     * @param null|callable $handler
     */
    public function __construct($type, $parameters = null, $moduleId = null, $handler = null)
    {
        $this->type = $type;
        $this->moduleId = $moduleId;
        $this->handler = $handler;
        $this->parameters = $parameters;
    }

    /**
     * @return int
     * @deprecated Use getType()
     */
    public function getResultType()
    {
        return EventResult::UNDEFINED;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return EventResult::UNDEFINED;
    }

    /**
     * @return null|mixed|string
     */
    public function getModuleId()
    {
        return '';
    }

    /**
     * @return null|callable|mixed
     */
    public function getHandler()
    {
        return null;
    }

    /**
     * @return null|array<mixed>
     */
    public function getParameters()
    {
        return [];
    }
}

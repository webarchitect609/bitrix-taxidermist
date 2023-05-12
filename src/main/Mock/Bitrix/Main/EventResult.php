<?php

declare(strict_types=1);
/** @noinspection PhpMissingReturnTypeInspection */

/** @noinspection PhpMissingParamTypeInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

class EventResult
{
    final public const UNDEFINED = 0;

    final public const SUCCESS = 1;

    final public const ERROR = 2;

    /**
     * EventResult constructor.
     *
     * @param int $type
     * @param null|array<mixed> $parameters
     * @param null|string $moduleId
     * @param null|callable $handler
     */
    public function __construct(
        protected $type,
        protected ?array $parameters = null,
        protected $moduleId = null,
        protected $handler = null,
    ) {
    }

    /**
     * @return int
     *
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
    public function getParameters(): ?array
    {
        return [];
    }
}

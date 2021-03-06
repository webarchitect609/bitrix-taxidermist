<?php
/** @noinspection PhpDocRedundantThrowsInspection */
/** @noinspection PhpUnused */
/** @noinspection PhpMissingParamTypeInspection */
/** @noinspection PhpUnusedParameterInspection */
/** @noinspection PhpMissingReturnTypeInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

use Exception;

class EventManager
{
    /**
     * @var EventManager
     */
    protected static $instance;

    /**
     * @var array<mixed>
     */
    protected $handlers = [];

    /**
     * @var bool
     */
    protected $isHandlersLoaded = false;

    /**
     * @var string
     */
    protected static $cacheKey = "b_module_to_module";

    protected function __construct()
    {
    }

    /**
     * @static
     * @return EventManager
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
    }

    /**
     * @param string $fromModuleId
     * @param string $eventType
     * @param callable $callback
     * @param bool|string $includeFile
     * @param int $sort
     * @param int $version
     *
     * @return int|mixed
     */
    protected function addEventHandlerInternal($fromModuleId, $eventType, $callback, $includeFile, $sort, $version)
    {
        return 0;
    }

    /**
     * @param string $fromModuleId
     * @param string $eventType
     * @param callable $callback
     * @param bool|string $includeFile
     * @param int $sort
     *
     * @return int
     */
    public function addEventHandler($fromModuleId, $eventType, $callback, $includeFile = false, $sort = 100)
    {
        return $this->addEventHandlerInternal($fromModuleId, $eventType, $callback, $includeFile, $sort, 2);
    }

    /**
     * @param string $fromModuleId
     * @param string $eventType
     * @param callable $callback
     * @param bool|string $includeFile
     * @param int $sort
     *
     * @return int
     */
    public function addEventHandlerCompatible($fromModuleId, $eventType, $callback, $includeFile = false, $sort = 100)
    {
        return $this->addEventHandlerInternal($fromModuleId, $eventType, $callback, $includeFile, $sort, 1);
    }

    /**
     * @param string $fromModuleId
     * @param string $eventType
     * @param int $iEventHandlerKey
     *
     * @return bool
     */
    public function removeEventHandler($fromModuleId, $eventType, $iEventHandlerKey)
    {
        return false;
    }

    /**
     * @param string $fromModuleId
     * @param string $eventType
     * @param string $toModuleId
     * @param string $toClass
     * @param string $toMethod
     * @param string $toPath
     * @param array<mixed> $toMethodArg
     *
     * @return void
     */
    public function unRegisterEventHandler(
        $fromModuleId,
        $eventType,
        $toModuleId,
        $toClass = "",
        $toMethod = "",
        $toPath = "",
        $toMethodArg = []
    ) {
    }

    /**
     * @param string $fromModuleId
     * @param string $eventType
     * @param string $toModuleId
     * @param string $toClass
     * @param string $toMethod
     * @param int $sort
     * @param string $toPath
     * @param array<string> $toMethodArg
     *
     * @return void
     */
    public function registerEventHandler(
        $fromModuleId,
        $eventType,
        $toModuleId,
        $toClass = "",
        $toMethod = "",
        $sort = 100,
        $toPath = "",
        $toMethodArg = []
    ) {
    }

    /**
     * @param string $fromModuleId
     * @param string $eventType
     * @param string $toModuleId
     * @param string $toClass
     * @param string $toMethod
     * @param int $sort
     * @param string $toPath
     * @param array<mixed> $toMethodArg
     *
     * @return void
     */
    public function registerEventHandlerCompatible(
        $fromModuleId,
        $eventType,
        $toModuleId,
        $toClass = "",
        $toMethod = "",
        $sort = 100,
        $toPath = "",
        $toMethodArg = []
    ) {
    }

    /**
     * @param string $fromModuleId
     * @param string $eventType
     * @param string $toModuleId
     * @param string $toClass
     * @param string $toMethod
     * @param int $sort
     * @param string $toPath
     * @param string $toMethodArg
     * @param int $version
     *
     * @return void
     */
    protected function registerEventHandlerInternal(
        $fromModuleId,
        $eventType,
        $toModuleId,
        $toClass,
        $toMethod,
        $sort,
        $toPath,
        $toMethodArg,
        $version
    ) {
    }

    /**
     * @param array<mixed> $arEvent
     *
     * @return string
     */
    protected function formatEventName($arEvent)
    {
        return '';
    }

    /**
     * @throws SystemException
     * @return void
     */
    protected function loadEventHandlers()
    {
    }

    /**
     * @throws SystemException
     * @return void
     */
    protected function clearLoadedHandlers()
    {
    }

    /**
     * @param string $eventModuleId
     * @param string $eventType
     * @param null|array<mixed> $filter
     *
     * @throws SystemException
     * @return array<mixed>
     */
    public function findEventHandlers($eventModuleId, $eventType, array $filter = null)
    {
        return [];
    }

    /**
     * @param Event $event
     *
     * @throws SystemException
     * @return void
     */
    public function send(Event $event)
    {
    }

    /**
     * @param array<mixed> $handler
     * @param Event $event
     *
     * @throws Exception
     * @return void
     */
    protected function sendToEventHandler(array $handler, Event $event)
    {
    }
}

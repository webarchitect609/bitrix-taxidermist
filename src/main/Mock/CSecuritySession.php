<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

use ErrorException;

class CSecuritySession
{
    final public const GC_AGENT_NAME = 'CSecuritySession::CleanUpAgent();';

    /**
     * @var null|string
     */
    protected static $oldSessionId;

    /**
     * @return void
     */
    public static function Init()
    {
    }

    /**
     * @param string $pMessage
     * @return void
     *
     * @throws ErrorException всегда
     *
     * @noinspection PhpDocRedundantThrowsInspection
     */
    public static function triggerFatalError($pMessage = ''): never
    {
        trigger_error($pMessage, E_USER_ERROR);
    }

    /**
     * @return string
     *
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function CleanUpAgent()
    {
        return self::GC_AGENT_NAME;
    }

    /**
     * @return void
     */
    public static function UpdateSessID()
    {
    }

    /**
     * @return bool
     *
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function isOldSessionIdExist()
    {
        return false;
    }

    /**
     * @param bool $cleanUp
     * @return string
     *
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function getOldSessionId($cleanUp = false)
    {
        return '';
    }

    /**
     * @param string $id
     * @return bool
     *
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     */
    public static function checkSessionId($id)
    {
        return true;
    }

    /**
     * @return void
     */
    public static function activate()
    {
    }

    /**
     * @return void
     */
    public static function deactivate()
    {
    }

    /**
     * @param string $class
     * @return void
     *
     * @noinspection PhpMissingParamTypeInspection
     */
    protected static function registerHandler($class)
    {
    }

    /**
     * @return string
     *
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function createSid()
    {
        return '';
    }
}

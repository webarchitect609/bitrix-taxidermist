<?php

declare(strict_types=1);
/** @noinspection PhpComposerExtensionStubsInspection */

namespace WebArch\BitrixTaxidermist\Mock;

use Memcache;

class CSecuritySessionMC
{
    /** @var Memcache */
    protected static $connection;

    /**
     * @var string
     */
    protected static $sessionId;

    /**
     * @var bool
     */
    protected static $isReadOnly = false;

    /**
     * @var bool
     */
    protected static $isSessionReady = false;

    /**
     * @return bool
     *
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function Init()
    {
        return true;
    }

    /**
     * @param string $savePath - unused on this handler
     * @param string $sessionName - unused on this handler
     * @return bool
     *
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     */
    public static function open($savePath, $sessionName)
    {
        return true;
    }

    /**
     * @return bool
     *
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function close()
    {
        return true;
    }

    /**
     * @param string $id - session id, must be valid hash
     * @return string
     *
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     */
    public static function read($id)
    {
        return '';
    }

    /**
     * @param string $id - session id, must be valid hash
     * @param string $sessionData
     * @return bool
     *
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     */
    public static function write($id, $sessionData)
    {
        return true;
    }

    /**
     * @param string $id - session id, must be valid hash
     * @return bool
     *
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     */
    public static function destroy($id)
    {
        return true;
    }

    /**
     * @param int $maxLifeTime - unused on this handler
     * @return bool
     *
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     */
    public static function gc($maxLifeTime)
    {
        return true;
    }

    /**
     * @return bool
     *
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function isStorageEnabled()
    {
        return true;
    }

    /**
     * @return bool
     *
     * @noinspection PhpMissingReturnTypeInspection
     */
    protected static function isConnected()
    {
        return true;
    }

    /**
     * @param string $pId
     * @return bool
     *
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     */
    protected static function isValidId($pId)
    {
        return true;
    }

    /**
     * @return string
     *
     * @noinspection PhpMissingReturnTypeInspection
     */
    protected static function getPrefix()
    {
        return '';
    }

    /**
     * @return bool
     *
     * @noinspection PhpMissingReturnTypeInspection
     */
    protected static function newConnection()
    {
        return true;
    }

    /**
     * @return void
     */
    protected static function closeConnection()
    {
    }
}

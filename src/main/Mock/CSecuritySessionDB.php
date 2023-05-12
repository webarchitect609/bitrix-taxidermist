<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

class CSecuritySessionDB
{
    /**
     * @var bool
     */
    protected static $isReadOnly = false;

    /**
     * @var null
     */
    protected static $sessionId;

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
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpMissingReturnTypeInspection
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
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpMissingReturnTypeInspection
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
     * @param int $maxLifeTime
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
}

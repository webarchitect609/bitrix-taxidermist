<?php

namespace WebArch\BitrixTaxidermist\Mock;

class CSecuritySessionVirtual
{
    /**
     * @return bool
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function isStorageEnabled()
    {
        return true;
    }

    /**
     * @return bool
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function Init()
    {
        return true;
    }

    /**
     * @param string $savePath - unused on this handler
     * @param string $sessionName - unused on this handler
     *
     * @return bool
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
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function close()
    {
        return true;
    }

    /**
     * @param string $id - session id, must be valid hash
     *
     * @return string
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
     * @param array $sessionData
     *
     * @return bool
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     * @phpstan-ignore-next-line
     */
    public static function write($id, $sessionData)
    {
        return true;
    }

    /**
     * @param string $id - session id, must be valid hash
     *
     * @return bool
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
     *
     * @return void
     * @noinspection PhpMissingParamTypeInspection
     */
    public static function gc($maxLifeTime)
    {
    }
}

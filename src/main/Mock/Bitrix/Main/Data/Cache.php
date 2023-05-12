<?php

declare(strict_types=1);

/** @noinspection PhpUnused */
/** @noinspection PhpUnusedParameterInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data;

use WebArch\BitrixTaxidermist\Enum\CacheEngineType;

class Cache
{
    /**
     * @var bool
     */
    protected $hasOutput = true;

    /**
     * @return Cache
     */
    public static function createInstance()
    {
        return new static();
    }

    /**
     * @param int         $TTL
     * @param string      $uniqueString
     * @param string      $baseDir
     * @return bool
     */
    public function initCache($TTL, $uniqueString, bool|string $initDir = false, $baseDir = 'cache')
    {
        return false;
    }

    /**
     * @param array       $vars
     * @param string      $baseDir
     * @return bool
     */
    public function startDataCache(
        bool|int $TTL = false,
        bool|string $uniqueString = false,
        bool|string $initDir = false,
        $vars = [],
        $baseDir = 'cache',
    ) {
        return false;
    }

    /**
     * @return void
     */
    public function endDataCache(array|bool $vars = false)
    {
    }

    public function getVars(): array|bool
    {
        return [];
    }

    /**
     * @param string      $baseDir
     * @return void
     */
    public function cleanDir(bool|string $initDir = false, $baseDir = 'cache')
    {
    }

    /**
     * @param string      $uniqueString
     * @param string      $baseDir
     * @return void
     */
    public function clean($uniqueString, bool|string $initDir = false, $baseDir = 'cache')
    {
    }

    /**
     * @return void
     */
    public function abortDataCache()
    {
    }

    /**
     * @return string
     */
    public static function getCacheEngineType()
    {
        return CacheEngineType::MEMCACHE;
    }

    /**
     * @return void But may make "echo"!
     */
    public function output()
    {
    }

    /**
     * @return void
     */
    public function noOutput()
    {
    }
}

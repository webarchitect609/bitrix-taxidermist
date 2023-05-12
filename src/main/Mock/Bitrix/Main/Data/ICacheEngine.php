<?php

declare(strict_types=1);
/** @noinspection PhpUnused */
/** @noinspection PhpUnusedParameterInspection */
/** @noinspection PhpDocRedundantThrowsInspection */
/** @noinspection PhpMissingReturnTypeInspection */
/** @noinspection PhpMissingParamTypeInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data;

interface ICacheEngine
{
    /**
     * @return bool
     */
    public function isAvailable();

    /**
     * @param string $baseDir
     * @param bool|string $initDir
     * @param bool|string $filename
     * @return void
     */
    public function clean($baseDir, $initDir = false, $filename = false);

    /**
     * @param string $baseDir
     * @param string $initDir
     * @param string $filename
     * @param int $TTL
     * @return bool
     */
    public function read(mixed &$allVars, $baseDir, $initDir, $filename, $TTL);

    /**
     * @param string $baseDir
     * @param string $initDir
     * @param string $filename
     * @param int $TTL
     * @return void
     */
    public function write(mixed $allVars, $baseDir, $initDir, $filename, $TTL);

    /**
     * @param string $path
     * @return bool
     */
    public function isCacheExpired($path);
}

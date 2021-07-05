<?php
/** @noinspection PhpUnusedParameterInspection */

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
     *
     * @return void
     */
    public function clean($baseDir, $initDir = false, $filename = false);

    /**
     * @param mixed $allVars
     * @param string $baseDir
     * @param string $initDir
     * @param string $filename
     * @param int $TTL
     *
     * @return bool
     */
    public function read(&$allVars, $baseDir, $initDir, $filename, $TTL);

    /**
     * @param mixed $allVars
     * @param string $baseDir
     * @param string $initDir
     * @param string $filename
     * @param int $TTL
     *
     * @return void
     */
    public function write($allVars, $baseDir, $initDir, $filename, $TTL);

    /**
     * @param string $path
     *
     * @return bool
     */
    public function isCacheExpired($path);
}

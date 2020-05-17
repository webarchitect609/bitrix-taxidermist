<?php
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data\TaggedCache;
use WebArch\BitrixTaxidermist\Test\Mock\Bitrix\Main\SystemException;

abstract class Application
{
    /**
     * @var Application
     */
    protected static $instance = null;

    /**
     * Tagged cache instance.
     *
     * @var \WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data\TaggedCache
     */
    protected $taggedCache;

    /**
     * Creates new application instance.
     */
    protected function __construct()
    {

    }

    /**
     * Returns current instance of the Application.
     *
     * @throws SystemException
     * @return Application
     */
    public static function getInstance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Returns new instance of the Cache object.
     *
     * @return \WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data\Cache
     */
    public function getCache()
    {
        return \WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data\Cache::createInstance();
    }

    /**
     * Returns manager of the managed cache.
     *
     * @return \WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data\TaggedCache
     */
    public function getTaggedCache()
    {
        if ($this->taggedCache == null) {
            $this->taggedCache = new \WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data\TaggedCache();
        }

        return $this->taggedCache;
    }
}

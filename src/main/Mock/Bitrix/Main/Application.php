<?php
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data\Cache;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data\TaggedCache;

abstract class Application
{
    /**
     * @var Application
     */
    protected static $instance = null;

    /**
     * Tagged cache instance.
     *
     * @var TaggedCache
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
     * @return Cache
     */
    public function getCache()
    {
        return Cache::createInstance();
    }

    /**
     * Returns manager of the managed cache.
     *
     * @return TaggedCache
     */
    public function getTaggedCache()
    {
        if ($this->taggedCache == null) {
            $this->taggedCache = new TaggedCache();
        }

        return $this->taggedCache;
    }
}

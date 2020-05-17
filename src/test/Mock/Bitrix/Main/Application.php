<?php
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Test\Mock\Bitrix\Main;

use WebArch\BitrixTaxidermist\Test\Mock\Bitrix\Main\Data\TaggedCache;

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
     * @return Data\Cache
     */
    public function getCache()
    {
        return Data\Cache::createInstance();
    }

    /**
     * Returns manager of the managed cache.
     *
     * @return Data\TaggedCache
     */
    public function getTaggedCache()
    {
        if ($this->taggedCache == null) {
            $this->taggedCache = new Data\TaggedCache();
        }

        return $this->taggedCache;
    }
}

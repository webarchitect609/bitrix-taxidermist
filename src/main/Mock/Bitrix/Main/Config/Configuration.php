<?php
/** @noinspection PhpUnusedPrivateMethodInspection */

/** @noinspection PhpUnusedPrivateFieldInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Config;

use ArrayAccess;
use Countable;
use Iterator;

/**
 * Class Configuration
 * @package WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Config
 * @phpstan-ignore-next-line
 */
final class Configuration implements ArrayAccess, Iterator, Countable
{
    /**
     * @var Configuration[]
     */
    private static $instances;

    /**
     * @var string
     */
    private $moduleId;

    /**
     * @var array<mixed>
     */
    private $storedData;

    /**
     * @var array<mixed>
     */
    private $data = [];

    /**
     * @var bool
     */
    private $isLoaded = false;

    const CONFIGURATION_FILE_PATH = "/bitrix/.settings.php";

    const CONFIGURATION_FILE_PATH_EXTRA = "/bitrix/.settings_extra.php";

    /**
     * @param string $name
     *
     * @return null|mixed
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingParamTypeInspection
     */
    public static function getValue($name)
    {
        return null;
    }

    /**
     * @param string $name
     * @param mixed $value
     *
     * @return void
     * @noinspection PhpMissingParamTypeInspection
     */
    public static function setValue($name, $value)
    {
    }

    /**
     * Configuration constructor.
     *
     * @param null|string $moduleId
     *
     * @phpstan-ignore-next-line
     */
    private function __construct($moduleId = null)
    {
    }

    /**
     * @static
     *
     * @param null|string $moduleId
     *
     * @return Configuration
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function getInstance($moduleId = null)
    {
        if (!isset(self::$instances[$moduleId])) {
            /** @noinspection PhpUnnecessaryStaticReferenceInspection */
            self::$instances[$moduleId] = new static($moduleId);
        }

        return self::$instances[$moduleId];
    }

    /**
     * @param string $path
     *
     * @return string
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection PhpMissingParamTypeInspection
     */
    private static function getPath($path)
    {
        return '';
    }

    /**
     * @param null|string $moduleId
     *
     * @return false|string
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     * @phpstan-ignore-next-line
     */
    private static function getPathConfigForModule($moduleId)
    {
        return '';
    }

    /**
     * @return void
     */
    private function loadConfiguration()
    {
    }

    /**
     * @return void
     */
    public function saveConfiguration()
    {
    }

    /**
     * @param string $name
     * @param mixed $value
     *
     * @return void
     * @noinspection PhpMissingParamTypeInspection
     */
    public function add($name, $value)
    {
    }

    /**
     * Changes readonly params.
     * Warning! Developer must use this method very carfully!.
     * You must use this method only if you know what you do!
     *
     * @param string $name
     * @param array<mixed> $value
     *
     * @return void
     * @noinspection PhpMissingParamTypeInspection
     */
    public function addReadonly($name, $value)
    {
    }

    /**
     * @param string $name
     *
     * @return void
     * @noinspection PhpMissingParamTypeInspection
     */
    public function delete($name)
    {
    }

    /**
     * @param string $name
     *
     * @return null|mixed
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     */
    public function get($name)
    {
        return null;
    }

    /**
     * @inheritDoc
     *
     * @param mixed $name
     *
     * @return bool
     * @noinspection PhpParameterNameChangedDuringInheritanceInspection
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function offsetExists($name)
    {
        return true;
    }

    /**
     * @inheritDoc
     *
     * @param mixed $name
     *
     * @return mixed
     * @noinspection PhpParameterNameChangedDuringInheritanceInspection
     */
    public function offsetGet($name)
    {
        return null;
    }

    /**
     * @inheritDoc
     *
     * @param mixed $name
     * @param mixed $value
     *
     * @noinspection PhpParameterNameChangedDuringInheritanceInspection
     */
    public function offsetSet($name, $value)
    {
    }

    /**
     * @inheritDoc
     *
     * @param mixed $name
     *
     * @noinspection PhpParameterNameChangedDuringInheritanceInspection
     */
    public function offsetUnset($name)
    {
    }

    /**
     * @inheritDoc
     * @return mixed
     */
    public function current()
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
    }

    /**
     * @inheritDoc
     * @return null|bool|float|int|string
     */
    public function key()
    {
        return null;
    }

    /**
     * @inheritDoc
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function valid()
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
    }

    /**
     * @inheritDoc
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function count()
    {
        return 0;
    }

    /**
     * @return void
     */
    public static function wnc()
    {
    }
}

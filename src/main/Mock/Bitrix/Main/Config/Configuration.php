<?php

declare(strict_types=1);
/** @noinspection PhpUnusedPrivateMethodInspection */

/** @noinspection PhpUnusedPrivateFieldInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Config;

use ArrayAccess;
use Countable;
use Iterator;

/**
 * Class Configuration
 *
 * @phpstan-ignore-next-line
 */
final class Configuration implements ArrayAccess, Iterator, Countable
{
    /**
     * @var Configuration[]
     */
    private static ?array $instances = null;

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
    private array $data = [];

    private bool $isLoaded = false;

    public const CONFIGURATION_FILE_PATH = '/bitrix/.settings.php';

    public const CONFIGURATION_FILE_PATH_EXTRA = '/bitrix/.settings_extra.php';

    /**
     * @param string $name
     * @return null|mixed
     *
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingParamTypeInspection
     */
    public static function getValue($name)
    {
        return null;
    }

    /**
     * @param string $name
     * @return void
     *
     * @noinspection PhpMissingParamTypeInspection
     */
    public static function setValue($name, mixed $value)
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
     * @return Configuration
     *
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function getInstance(?string $moduleId = null)
    {
        if (! isset(self::$instances[$moduleId])) {
            /** @noinspection PhpUnnecessaryStaticReferenceInspection */
            self::$instances[$moduleId] = new self($moduleId);
        }

        return self::$instances[$moduleId];
    }

    /**
     * @param string $path
     * @return string
     *
     * @noinspection PhpUnusedParameterInspection
     * @noinspection PhpMissingReturnTypeInspection
     * @noinspection PhpMissingParamTypeInspection
     */
    private static function getPath($path)
    {
        return '';
    }

    /**
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     *
     * @phpstan-ignore-next-line
     */
    private static function getPathConfigForModule(?string $moduleId): false|string
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
     * @return void
     *
     * @noinspection PhpMissingParamTypeInspection
     */
    public function add($name, mixed $value)
    {
    }

    /**
     * Changes readonly params.
     * Warning! Developer must use this method very carfully!.
     * You must use this method only if you know what you do!
     *
     * @param string $name
     * @param array<mixed> $value
     * @return void
     *
     * @noinspection PhpMissingParamTypeInspection
     */
    public function addReadonly($name, $value)
    {
    }

    /**
     * @param string $name
     * @return void
     *
     * @noinspection PhpMissingParamTypeInspection
     */
    public function delete($name)
    {
    }

    /**
     * @param string $name
     * @return null|mixed
     *
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     */
    public function get($name)
    {
        return null;
    }

    /**
     * {@inheritDoc}
     *
     *
     * @return bool
     *
     * @noinspection PhpParameterNameChangedDuringInheritanceInspection
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function offsetExists(mixed $name)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     *
     *
     * @return mixed
     *
     * @noinspection PhpParameterNameChangedDuringInheritanceInspection
     */
    public function offsetGet(mixed $name)
    {
        return null;
    }

    /**
     * {@inheritDoc}
     *
     *
     * @noinspection PhpParameterNameChangedDuringInheritanceInspection
     */
    public function offsetSet(mixed $name, mixed $value)
    {
    }

    /**
     * {@inheritDoc}
     *
     *
     * @noinspection PhpParameterNameChangedDuringInheritanceInspection
     */
    public function offsetUnset(mixed $name)
    {
    }

    /**
     * {@inheritDoc}
     *
     * @return mixed
     */
    public function current()
    {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function next()
    {
    }

    /**
     * {@inheritDoc}
     *
     * @return null|bool|float|int|string
     */
    public function key()
    {
        return null;
    }

    /**
     * {@inheritDoc}
     *
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function valid()
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function rewind()
    {
    }

    /**
     * {@inheritDoc}
     *
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

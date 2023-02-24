<?php

namespace WebArch\BitrixTaxidermist;

use Symfony\Component\Finder\Finder;
use Throwable;
use WebArch\BitrixTaxidermist\Exception\AutoloaderAlreadyRegisteredException;
use WebArch\BitrixTaxidermist\Exception\AutoloaderNotRegisteredException;
use WebArch\BitrixTaxidermist\Exception\ErrorRegisteringAutoloaderException;

/**
 * Class Taxidermist
 * @package WebArch\BitrixTaxidermist
 */
class Taxidermist
{
    private const MOCK_NAMESPACE = 'WebArch\BitrixTaxidermist\Mock\\';

    private const AUTOLOAD_METHOD = 'taxidermize';

    /**
     * @var bool Признак регистрации автозагрузчика.
     */
    private static $autoloadRegistered = false;

    /**
     * @var bool Признак вызова проверки существования класса. Используется для защиты от бесконечной рекурсии.
     */
    private static $classExistsCalled = false;

    /**
     * Заменяет макетами(mocks, "чучелами") все поддерживаемые библиотекой классы Битрикс.
     */
    public function taxidermizeAll(): void
    {
        $finder = Finder::create()
                        ->in(__DIR__ . '/Mock')
                        ->files()
                        ->name('*.php');
        foreach ($finder as $splFileInfo) {
            $this->taxidermize(
                str_replace(
                    ['/', '.php'],
                    ['\\', ''],
                    $splFileInfo->getRelativePathname()
                )
            );
        }
    }

    /**
     * Устанавливает автозагрузчик классов, который выполняет создание макетов(mocks, "чучел") классов Битрикс при
     * помощи class_alias().
     *
     * ПРИМЕЧАНИЕ: При проверке типа исключения в `try-catch` и проверке возвращаемого типа какого-либо метода
     * автозагрузчик не вызывается.
     *
     * @throws AutoloaderAlreadyRegisteredException
     * @throws ErrorRegisteringAutoloaderException
     */
    public function registerAutoload(): void
    {
        if (true === self::$autoloadRegistered) {
            throw new AutoloaderAlreadyRegisteredException(
                $this->getAutoloadCallableAsString()
            );
        }
        try {
            /** @phpstan-ignore-next-line */
            spl_autoload_register($this->getAutoloadCallable());
            self::$autoloadRegistered = true;
        } catch (Throwable $exception) {
            throw new ErrorRegisteringAutoloaderException(
                $this->getAutoloadCallableAsString(),
                $exception
            );
        }
    }

    /**
     * Удаляет автозагрузчик классов, который выполняет создание макетов(mocks, "чучел") классов Битрикс при
     * помощи class_alias().
     */
    public function removeAutoload(): void
    {
        if (false === self::$autoloadRegistered) {
            throw new AutoloaderNotRegisteredException(
                $this->getAutoloadCallableAsString()
            );
        }
        /** @var array<array<object|string>> $functions */
        $functions = spl_autoload_functions();
        foreach ($functions as $function) {
            if (!is_array($function) || count($function) !== 2) {
                continue;
            }
            if ($function[0] instanceof $this && $function[1] === self::AUTOLOAD_METHOD) {
                spl_autoload_unregister($function);
            }
        }
        self::$autoloadRegistered = false;
    }

    /**
     * Заменяет макетами(mocks, "чучелами") требуемый класс $bitrixClass при помощи class_alias().
     *
     * @param string $bitrixClass Класс Битрикс. Например, \Bitrix\Main\Application
     *
     * @return null|bool bool true - успешно установлен алиас; false - алиас не установлен, т.к. $bitrixClass
     *     существует или алиас уже был создан ранее; null - невозможно найти подходящий класс для создания алиаса на
     *     него.
     * @noinspection SpellCheckingInspection
     */
    public function taxidermize(string $bitrixClass): ?bool
    {
        /**
         * Защита от бесконечной рекурсии.
         */
        if (self::$classExistsCalled === true) {
            return null;
        }
        self::$classExistsCalled = true;
        if (class_exists($bitrixClass) || interface_exists($bitrixClass) || trait_exists($bitrixClass)) {
            self::$classExistsCalled = false;

            return false;
        }
        $mockClass = self::MOCK_NAMESPACE . ltrim($bitrixClass, '\\');
        if (!class_exists($mockClass) && !interface_exists($mockClass) && !trait_exists($mockClass)) {
            self::$classExistsCalled = false;

            return null;
        }
        class_alias($mockClass, $bitrixClass);
        self::$classExistsCalled = false;

        return true;
    }

    /**
     * @return array<object|string>
     */
    protected function getAutoloadCallable(): array
    {
        return [$this, self::AUTOLOAD_METHOD];
    }

    /**
     * @return string
     */
    private function getAutoloadCallableAsString(): string
    {
        $autoloadCallable = $this->getAutoloadCallable();

        return sprintf(
            '%s::%s()',
            /** @phpstan-ignore-next-line */
            get_class($autoloadCallable[0]),
            /** @phpstan-ignore-next-line */
            $autoloadCallable[1]
        );
    }
}

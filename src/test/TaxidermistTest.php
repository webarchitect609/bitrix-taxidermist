<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Test;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Throwable;
use WebArch\BitrixTaxidermist\Enum\ErrorCode;
use WebArch\BitrixTaxidermist\Exception\AutoloaderAlreadyRegisteredException;
use WebArch\BitrixTaxidermist\Exception\AutoloaderNotRegisteredException;
use WebArch\BitrixTaxidermist\Exception\ErrorRegisteringAutoloaderException;
use WebArch\BitrixTaxidermist\Taxidermist;

/**
 * Class TaxidermistTest
 *
 * Главная проблема всего Unit-тестирования здесь: однажды создав class_alias его нельзя удалить.
 */
class TaxidermistTest extends TestCase
{
    /**
     * Этот тест обязательно должен быть самым первым,
     * иначе условие бесконечной рекурсии не будет выполнено.
     *
     * @return void
     */
    public function testTaxidermizeDoesNotReachMaxNestingLevel()
    {
        $taxidermist = new Taxidermist();
        $taxidermist->registerAutoload();
        $this->assertTrue(
            $taxidermist->taxidermize('\Bitrix\Main\Application')
        );
    }

    /**
     * @return void
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('taxidermizeDataProvider')]
    #[\PHPUnit\Framework\Attributes\Depends('testTaxidermizeDoesNotReachMaxNestingLevel')]
    public function testTaxidermize(string $bitrixClass)
    {
        $this->assertFalse(
            class_exists($bitrixClass)
        );
        $this->assertTrue(
            (new Taxidermist)->taxidermize($bitrixClass)
        );
        $this->assertTrue(
            class_exists($bitrixClass)
        );
    }

    /**
     * @return array<array<string>>
     */
    public static function taxidermizeDataProvider(): array
    {
        return [
            ['\Bitrix\Main\HttpApplication'],
            ['\Bitrix\Main\SystemException'],
            ['\Bitrix\Main\Data\Cache'],
        ];
    }

    /**
     * @return void
     */
    #[\PHPUnit\Framework\Attributes\Depends('testTaxidermize')]
    public function testTaxidermizeTwice()
    {
        /**
         * Т.к. удалить алиас уже невозможно, этот тест поставлен в зависимость от testTaxidermize
         */
        $this->assertFalse(
            (new Taxidermist)->taxidermize('\Bitrix\Main\Application')
        );
        $this->assertTrue(
            class_exists('\Bitrix\Main\Application')
        );
    }

    /**
     * @return void
     */
    public function testTaxidermizeInterface()
    {
        $interfaceName = 'Bitrix\Main\Data\ICacheEngine';

        $this->assertFalse(
            interface_exists($interfaceName)
        );

        (new Taxidermist())->taxidermize($interfaceName);

        $this->assertTrue(
            interface_exists($interfaceName)
        );
    }

    /**
     * @return void
     */
    public function testTaxidermizeTrait()
    {
        $traitName = 'Bitrix\Main\ErrorableImplementation';

        $this->assertFalse(
            trait_exists($traitName)
        );

        (new Taxidermist())->taxidermize($traitName);

        $this->assertTrue(
            trait_exists($traitName)
        );
    }

    /**
     * @return void
     */
    public function testTaxidermizeAll()
    {
        $className = 'Bitrix\Main\Data\TaggedCache';
        $this->assertFalse(class_exists($className));
        (new Taxidermist())->taxidermizeAll();
        $this->assertTrue(class_exists($className));
    }

    /**
     * @return void
     */
    public function testTaxidermizeNonExistingClass()
    {
        $this->assertNull(
            (new Taxidermist())->taxidermize(
                '\WebArch\BitrixTaxidermist\Test\Definitely\Non\Existing\Class\Name'
            )
        );
    }

    /**
     * @return void
     */
    public function testRegisterAndRemoveAutoload()
    {
        $fakeAutoloadAsClosure = function (string $class) {
        };
        /** @var callable $fakeAutoloadAsClosure */
        spl_autoload_register($fakeAutoloadAsClosure);
        $expectedAutoloadFunctions = spl_autoload_functions();
        if (false == $expectedAutoloadFunctions) {
            $expectedAutoloadFunctions = [];
        }
        $taxidermist                 = new Taxidermist();
        $expectedAutoloadFunctions[] = $taxidermist->taxidermize(...);
        $taxidermist->registerAutoload();
        $this->assertEqualsCanonicalizing(
            $expectedAutoloadFunctions,
            spl_autoload_functions()
        );
        array_pop($expectedAutoloadFunctions);
        $taxidermist->removeAutoload();
        $this->assertEqualsCanonicalizing(
            $expectedAutoloadFunctions,
            spl_autoload_functions()
        );
    }

    /**
     * @return void
     */
    public function testRegisterAutoloadTwice()
    {
        $taxidermist = new Taxidermist();
        $taxidermist->registerAutoload();
        $this->expectException(AutoloaderAlreadyRegisteredException::class);
        $this->expectExceptionCode(ErrorCode::AUTOLOADER_IS_ALREADY_REGISTERED);
        $taxidermist->registerAutoload();
    }

    /**
     * @return void
     */
    public function testRemoveAutoloadWhenIsNotSet()
    {
        $this->expectException(AutoloaderNotRegisteredException::class);
        $this->expectExceptionCode(ErrorCode::AUTOLOADER_NOT_REGISTERED);
        (new Taxidermist())->removeAutoload();
    }

    /**
     * @return void
     */
    public function testRegisterAutoloadError()
    {
        /** @var MockObject|Taxidermist $taxidermistMock */
        $taxidermistMock = $this->getMockBuilder(Taxidermist::class)
            ->onlyMethods(['getAutoloadCallable'])
            ->getMock();
        $taxidermistMock->expects($this->exactly(2))
            ->method('getAutoloadCallable')
            ->willReturn([$taxidermistMock, 'nonExistingMethodName']);

        $this->expectException(ErrorRegisteringAutoloaderException::class);
        $this->expectExceptionCode(ErrorCode::ERROR_REGISTERING_AUTOLOADER);
        $taxidermistMock->registerAutoload();
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown(): void
    {
        $this->tearDownAutoload();
    }

    /**
     * {@inheritDoc}
     */
    protected function onNotSuccessfulTest(Throwable $t): never
    {
        $this->tearDownAutoload();
        parent::onNotSuccessfulTest($t);
    }

    /**
     * Принудительно удалить все навешенные автозагрузчики.
     */
    protected function tearDownAutoload(): void
    {
        try {
            (new Taxidermist())->removeAutoload();
        } catch (AutoloaderNotRegisteredException) {
            // Не имеет значения.
        }
    }
}
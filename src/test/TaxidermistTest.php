<?php

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
 *
 * @package WebArch\BitrixTaxidermist\Test
 */
class TaxidermistTest extends TestCase
{
    /**
     * Этот тест обязательно должен быть самым первым,
     * иначе условие бесконечной рекурсии не будет выполнено.
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
     * @param string $bitrixClass
     *
     * @dataProvider taxidermizeDataProvider
     * @depends      testTaxidermizeDoesNotReachMaxNestingLevel
     */
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
     * @return array|string[]
     */
    public function taxidermizeDataProvider(): array
    {
        return [
            ['Bitrix\Main\HttpApplication'],
            ['\Bitrix\Main\SystemException'],
            ['\Bitrix\Main\Data\Cache'],
        ];
    }

    /**
     * @depends testTaxidermize
     */
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

    public function testTaxidermizeAll()
    {
        $className = 'Bitrix\Main\Data\TaggedCache';
        $this->assertFalse(class_exists($className));
        (new Taxidermist())->taxidermizeAll();
        $this->assertTrue(class_exists($className));
    }

    public function testTaxidermizeNonExistingClass()
    {
        $this->assertNull(
            (new Taxidermist())->taxidermize(
                '\WebArch\BitrixTaxidermist\Test\Definitely\Non\Existing\Class\Name'
            )
        );
    }

    public function testRegisterAndRemoveAutoload()
    {
        $fakeAutoloadAsClosure = function () {
        };
        spl_autoload_register($fakeAutoloadAsClosure);
        $expectedAutoloadFunctions = spl_autoload_functions();
        $taxidermist = new Taxidermist();
        $expectedAutoloadFunctions[] = [($taxidermist), 'taxidermize'];
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

    public function testRegisterAutoloadTwice()
    {
        $taxidermist = new Taxidermist();
        $taxidermist->registerAutoload();
        $this->expectException(AutoloaderAlreadyRegisteredException::class);
        $this->expectExceptionCode(ErrorCode::AUTOLOADER_IS_ALREADY_REGISTERED);
        $taxidermist->registerAutoload();
    }

    public function testRemoveAutoloadWhenIsNotSet()
    {
        $this->expectException(AutoloaderNotRegisteredException::class);
        $this->expectExceptionCode(ErrorCode::AUTOLOADER_NOT_REGISTERED);
        (new Taxidermist())->removeAutoload();
    }

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
     * @inheritDoc
     */
    protected function tearDown(): void
    {
        $this->tearDownAutoload();
    }

    /**
     * @inheritDoc
     */
    protected function onNotSuccessfulTest(Throwable $t): void
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
        } catch (AutoloaderNotRegisteredException $exception) {
            // Не имеет значения.
        }
    }
}

<?php

namespace WebArch\BitrixTaxidermist\Test;

use PHPUnit\Framework\TestCase;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Application;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data\Cache;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data\TaggedCache;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\HttpApplication;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\SystemException;
use WebArch\BitrixTaxidermist\Taxidermist;

class TaxidermistTest extends TestCase
{
    /**
     * @param string $originalClassName
     * @param string $mockClassName
     *
     * @dataProvider taxidermizeDataProvider
     */
    public function testTaxidermize(string $originalClassName, string $mockClassName)
    {
        $this->assertFalse(
            class_exists($originalClassName)
        );
        Taxidermist::taxidermize($mockClassName);
        $this->assertTrue(
            class_exists($originalClassName)
        );
    }

    /**
     * @return array|string[]
     */
    public function taxidermizeDataProvider(): array
    {
        return [
            ['\Bitrix\Main\Application', Application::class],
            ['\Bitrix\Main\HttpApplication', HttpApplication::class],
            ['\Bitrix\Main\SystemException', SystemException::class],
            ['\Bitrix\Main\Data\Cache', Cache::class],
            ['\Bitrix\Main\Data\TaggedCache', TaggedCache::class],
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
        Taxidermist::taxidermize(Application::class);
        $this->assertTrue(
            class_exists('\Bitrix\Main\Application')
        );
    }
}

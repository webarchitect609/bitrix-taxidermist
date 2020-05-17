<?php

namespace WebArch\BitrixTaxidermist\Test;

use PHPUnit\Framework\TestCase;
use WebArch\BitrixTaxidermist\Taxidermist;
use WebArch\BitrixTaxidermist\Test\Mock\Bitrix\Main\Application;
use WebArch\BitrixTaxidermist\Test\Mock\Bitrix\Main\Data\Cache;
use WebArch\BitrixTaxidermist\Test\Mock\Bitrix\Main\Data\TaggedCache;
use WebArch\BitrixTaxidermist\Test\Mock\Bitrix\Main\HttpApplication;
use WebArch\BitrixTaxidermist\Test\Mock\Bitrix\Main\SystemException;

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
}

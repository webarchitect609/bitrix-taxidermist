Битрикс таксидермист
====================
[![Travis Build Status](https://travis-ci.org/webarchitect609/bitrix-taxidermist.svg?branch=master)](https://travis-ci.org/webarchitect609/bitrix-taxidermist)
[![Latest version](https://img.shields.io/github/v/tag/webarchitect609/bitrix-taxidermist?sort=semver)](https://github.com/webarchitect609/bitrix-taxidermist/releases)
[![Downloads](https://img.shields.io/packagist/dt/webarchitect609/bitrix-taxidermist)](https://packagist.org/packages/webarchitect609/bitrix-taxidermist)
[![PHP version](https://img.shields.io/packagist/php-v/webarchitect609/bitrix-taxidermist)](https://www.php.net/supported-versions.php)
[![License](https://img.shields.io/github/license/webarchitect609/bitrix-taxidermist)](LICENSE.md)
[![More stuff from me](https://img.shields.io/badge/packagist-webarchitect609-blueviolet)](https://packagist.org/packages/webarchitect609/)

**Пожалуйста, будьте внимательны:** это пока нестабильная альфа-версия!

Создание имитаций(mocking) классов Битрикс для Unit-тестов.

Возможности
-----------
- Лёгкое создание mock-классов Битрикс, причём таким образом, который не приводит к дублированию определений классов
при разработке.
    
Установка
---------
`composer require --dev webarchitect609/bitrix-taxidermist`

Использование
-------------
При переопределении метода `\PHPUnit\Framework\TestCase::setUp()` или `\PHPUnit\Framework\TestCase::setUpBeforeClass()`
или непосредственно в коде теста следует указать какие классы нужно имитировать, указав их mock-версии:

```php
use WebArch\BitrixTaxidermist\Test\Mock\Bitrix\Main\Data\Cache;
use WebArch\BitrixTaxidermist\Test\Mock\Bitrix\Main\Data\TaggedCache;
use WebArch\BitrixTaxidermist\Taxidermist;

Taxidermist::taxidermize(Cache::class);
Taxidermist::taxidermize(TaggedCache::class);

```

Динамически будут созданы необходимые алиасы:

```php
/** @noinspection ALL */

class_alias('\WebArch\BitrixTaxidermist\Test\Mock\Bitrix\Main\Data\Cache', '\Bitrix\Main\Data\Cache');
class_alias('\WebArch\BitrixTaxidermist\Test\Mock\Bitrix\Main\Data\TaggedCache', '\Bitrix\Main\Data\TaggedCache');
```

И Unit-тест может пользоваться этими классами точно также, как если бы в его распоряжении был установленный Битрикс.

Известные особенности
---------------------
Пока отсутствуют.

Лицензия и информация об авторе
-------------------------------
[BSD-3-Clause](LICENSE.md)

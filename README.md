Битрикс таксидермист
====================

[![Travis Build Status](https://travis-ci.com/webarchitect609/bitrix-taxidermist.svg?branch=master)](https://travis-ci.com/webarchitect609/bitrix-taxidermist)
[![codecov](https://codecov.io/gh/webarchitect609/bitrix-taxidermist/branch/master/graph/badge.svg?token=BVYMR6SDYJ)](https://codecov.io/gh/webarchitect609/bitrix-taxidermist)
[![PHP version](https://img.shields.io/packagist/php-v/webarchitect609/bitrix-taxidermist)](https://www.php.net/supported-versions.php)
[![Latest version](https://img.shields.io/github/v/tag/webarchitect609/bitrix-taxidermist?sort=semver)](https://github.com/webarchitect609/bitrix-taxidermist/releases)
[![Downloads](https://img.shields.io/packagist/dt/webarchitect609/bitrix-taxidermist)](https://packagist.org/packages/webarchitect609/bitrix-taxidermist)
[![License](https://img.shields.io/github/license/webarchitect609/bitrix-taxidermist)](LICENSE.md)

**Пожалуйста, будьте внимательны:** это пока нестабильная альфа-версия!

Для разработки Unit-тестов библиотек, зависимых от Битрикс, требуется сам Битрикс. Однако его установка является долгим
процессом, который контролируется через визуальный интерфейс в браузере и очень сложно поддаётся автоматизации. Данная
библиотека предоставляет возможность автоматического создания имитаций(mocking) классов Битрикс без установки
последнего. Одновременно решается проблема `Multiple definitions exist for class '%bitrixClassName%'` в IDE при
разработке.

Возможности
-----------

- Автоматическое создание mock-классов Битрикс для использование в Unit-тестах

Установка
---------

`composer require --dev webarchitect609/bitrix-taxidermist`

Использование
-------------

### Unit-тесты

При написании Unit-теста в переопределении метода `\PHPUnit\Framework\TestCase::setUp()` или
`\PHPUnit\Framework\TestCase::setUpBeforeClass()` следует запустить изготовление имитаций всех классов:

```php
use WebArch\BitrixTaxidermist\Taxidermist;

(new Taxidermist)->taxidermizeAll();

```

Будут автоматически созданы алиасы. Например,

```php
/** @noinspection ALL */
class_alias('\WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data\Cache', '\Bitrix\Main\Data\Cache');
```

, и таким образом Unit-тест может пользоваться этими классами точно также, как если бы в его распоряжении был
установленный Битрикс.

### Статический анализ кода

Следует указать файл `~/resources/autoload-dist.php` в качестве дополнительного файла автозагрузчика.

Известные особенности
---------------------

### Ошибка при вызове `\Bitrix\Main\Application::getInstance()`

Если необходимо работать с `\Bitrix\Main\Application::getInstance()`, он будет вызывать ошибку:

```
Error: Cannot instantiate abstract class WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Application
```

Чтобы этого избежать, следует создать требуемый объект приложения. Например, так:

```php
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\HttpApplication;

HttpApplication::getInstance();
```

Лицензия и информация об авторе
-------------------------------

[BSD-3-Clause](LICENSE.md)

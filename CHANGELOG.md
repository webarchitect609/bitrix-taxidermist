# Change Log

0.1.18
------

### Исправлено:

- `\Bitrix\Main\Type\DateTime` не наследовался от `\Bitrix\Main\Type\Date`.

0.1.17
------

### Добавлено

- типы данных: `\Bitrix\Main\Type\DateTime` и `\Bitrix\Main\Type\Date`.

0.1.16
------

### Добавлено

- интерфейсы для классов кеширования: `\Bitrix\Main\Data\ICacheEngine`, `\Bitrix\Main\Data\ICacheEngine`;
- класс типа данных словарь: `\Bitrix\Main\Type\Dictionary`;
- классы ошибок: `\Bitrix\Main\Error`, `\Bitrix\Main\ErrorCollection`;
- трейт: `\Bitrix\Main\ErrorableImplementation`;

### Исправлено
- поддержка интерфейсов
- поддержка трейтов

0.1.14
------

# Добавлено

- интерфейсы: `\Bitrix\Main\Data\ICacheEngine` и `\Bitrix\Main\Data\ICacheEngineStat`

0.1.13
------

### Добавлено

- правила корзины: `\CGlobalCondCtrl`, `\CGlobalCondCtrlGroup`;
- система событий: `\Bitrix\Main\Event`, `\Bitrix\Main\EventManager`, `\Bitrix\Main\EventResult`;
- тип исключений: `\Bitrix\Main\ArgumentTypeException`.

0.1.12
------

### Исправлено:

- поддержка `PHP ^8.0`

0.1.10
------

### Добавлено:

- Поддержка `PHP 8.0`

0.1.9
-----

### Добавлено:

- Классы работы с сессиями: `\CSecuritySession`, `\CSecuritySessionDB`, `\CSecuritySessionMC` и
  `\CSecuritySessionVirtual`
- Классы работы с настройками: `\Bitrix\Main\Config\Configuration`, `\Bitrix\Main\Config\Option`, `\CAllOption`,
  `\CAllPageOption`, `\COption` и `\CPageOption`
- Исключения: `\Bitrix\Main\ArgumentNullException`, `\Bitrix\Main\ArgumentOutOfRangeException`

0.1.8
-----

### Добавлено:

- `\Bitrix\Main\ORM\Fields\Field::$dataType`
- `\Bitrix\Main\ORM\Fields\Field::getDataType()`

0.1.7
-----

### Добавлено:

- Макет класса `\Bitrix\Main\ORM\Fields\ExpressionField`
- Расширены `\Bitrix\Main\DB\SqlExpression`, `\Bitrix\Main\ORM\Fields\ScalarField` и `\Bitrix\Main\ORM\Fields\Field`

0.1.6
-----

### Добавлено:

- Добавлены методы `CDBResultMysql::Fetch()` и `\Bitrix\Main\ORM\Query\Query::setLimit()`

0.1.5
-----

### Добавлено:

- Добавлены макеты `CUserTypeEntity`, `CDBResult`, `CUserTypeEntity` и другие.

0.1.4
-----

### Добавлено:

- Макеты методов `\Bitrix\Main\ORM\Fields\Field::getName()` и `\Bitrix\Main\ORM\Fields\Field::getEntity()` и
  соответствующие им поля.

0.1.3
-----

### Добавлено:

- Добавлен макет метода `\Bitrix\Main\Data\Cache::getCacheEngineType()`
- Добавлено перечисление поддерживаемых Битриксом типов кеширования `\WebArch\BitrixTaxidermist\Enum\CacheEngineType`

0.1.0
-----

### Добавлено:

- Методы `\WebArch\BitrixTaxidermist\Taxidermist::registerAutoload()` и
  `\WebArch\BitrixTaxidermist\Taxidermist::removeAutoload()` для установки и удаления автозагрузчика классов
  соответственно
- Метод `\WebArch\BitrixTaxidermist\Taxidermist::taxidermizeAll()` для замены макетами всех поддерживаемых классов
  Битрикс

- Файл подключения автозагрузчика `~/resources/autoload-dist.php` для использования в библиотеках статического анализа
  кода. Например, в [PHPStan](https://packagist.org/packages/phpstan/phpstan)

### НАРУШЕНИЕ ОБРАТНОЙ СОВМЕСТИМОСТИ

- Метод `\WebArch\BitrixTaxidermist\Taxidermist::taxidermize()` перестал быть статическим и теперь принимает в качестве
  аргумента имя класса Битрикс, который должен быть превращён в имитацию(mock)

0.0.2
-----

### Исправлено:

- Ошибка `PHP Warning: Cannot declare class` при повторном вызове
  `\WebArch\BitrixTaxidermist\Taxidermist::taxidermize()` с тем же аргументом

0.0.1
-----

### Добавлено:

- Основная функциональность изготовления имитаций через метод
  `\WebArch\BitrixTaxidermist\Taxidermist::taxidermize()`
- Имитации классов:
    - `\Bitrix\Main\SystemException`
    - `\Bitrix\Main\Application`
    - `\Bitrix\Main\HttpApplication`
    - `\Bitrix\Main\Data\Cache`
    - `\Bitrix\Main\Data\TaggedCache`

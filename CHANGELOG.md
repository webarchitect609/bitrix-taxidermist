# Change Log

0.1.8
-----

### Добавлено:
- `\Bitrix\Main\ORM\Fields\Field::$dataType`
- `\Bitrix\Main\ORM\Fields\Field::getDataType()`

0.1.7
-----

### Добавлено:
- Макет класса `\Bitrix\Main\ORM\Fields\ExpressionField`
- Расширены `\Bitrix\Main\DB\SqlExpression`, `\Bitrix\Main\ORM\Fields\ScalarField`,
    `\WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM\Fields\Field`

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

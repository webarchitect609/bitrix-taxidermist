# Change Log

## 0.1.4

### Добавлено:
- Макеты методов `\Bitrix\Main\ORM\Fields\Field::getName()` и `\Bitrix\Main\ORM\Fields\Field::getEntity()` и
    соответствующие им поля.

## 0.1.3

### Добавлено:
- Добавлен макет метода `\Bitrix\Main\Data\Cache::getCacheEngineType()`
- Добавлено перечисление поддерживаемых Битриксом типов кеширования `\WebArch\BitrixTaxidermist\Enum\CacheEngineType`

## 0.1.0

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

## 0.0.2

### Исправлено:
- Ошибка `PHP Warning: Cannot declare class` при повторном вызове
    `\WebArch\BitrixTaxidermist\Taxidermist::taxidermize()` с тем же аргументом

## 0.0.1

### Добавлено:
- Основная функциональность изготовления имитаций через метод
    `\WebArch\BitrixTaxidermist\Taxidermist::taxidermize()`
- Имитации классов:
    - `\Bitrix\Main\SystemException`
    - `\Bitrix\Main\Application`
    - `\Bitrix\Main\HttpApplication`
    - `\Bitrix\Main\Data\Cache`
    - `\Bitrix\Main\Data\TaggedCache`

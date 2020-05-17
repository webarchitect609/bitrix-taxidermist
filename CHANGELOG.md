Changelog
=========

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

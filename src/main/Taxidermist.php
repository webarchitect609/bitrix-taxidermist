<?php

namespace WebArch\BitrixTaxidermist;

class Taxidermist
{
    protected const MOCK_NAMESPACE = 'WebArch\BitrixTaxidermist\Test\Mock';

    /**
     * Заменяет чучелом требуемый класс $class при помощи class_alias().
     *
     * @param string $class
     *
     * @return void
     * @noinspection SpellCheckingInspection
     */
    public static function taxidermize(string $class)
    {
        class_alias(
            $class,
            str_replace(self::MOCK_NAMESPACE, '', $class)
        );
    }
}

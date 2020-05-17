<?php

namespace WebArch\BitrixTaxidermist;

class Taxidermist
{
    protected const MOCK_NAMESPACE = 'WebArch\BitrixTaxidermist\Mock';

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
        $alias = str_replace(self::MOCK_NAMESPACE, '', $class);
        if (class_exists($alias)) {
            return;
        }
        class_alias($class, $alias);
    }
}

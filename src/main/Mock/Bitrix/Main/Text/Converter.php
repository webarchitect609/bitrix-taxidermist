<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Text;

abstract class Converter
{
    abstract public function encode($text, $textType = '');

    abstract public function decode($text, $textType = '');
}

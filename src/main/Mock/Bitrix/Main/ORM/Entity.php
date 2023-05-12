<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ORM;

/**
 * Base entity
 */
class Entity
{
    /**
     * @return string
     */
    public function getDBTableName()
    {
        return '';
    }
}

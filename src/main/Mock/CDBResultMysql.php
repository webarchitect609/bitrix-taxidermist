<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

abstract class CDBResultMysql extends CAllDBResult
{
    /**
     * Returns next row of the select result in form of associated array
     *
     * @return array
     */
    public function Fetch()
    {
        return [];
    }
}

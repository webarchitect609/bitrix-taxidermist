<?php

namespace WebArch\BitrixTaxidermist\Mock;

class CAllUserTypeEntity extends CDBResult
{
    /**
     * Функция для выборки метаданных пользовательских свойств.
     *
     * <p>Возвращает CDBResult - выборку в зависимости от фильтра и сортировки.</p>
     * <p>Параметр aSort по умолчанию имеет вид array("SORT"=>"ASC", "ID"=>"ASC").</p>
     * <p>Если в aFilter передается LANG, то дополнительно выбираются языковые сообщения.</p>
     *
     * @param array<string, string> $aSort ассоциативный массив сортировки (ID, ENTITY_ID, FIELD_NAME, SORT, USER_TYPE_ID)
     * @param array<string, mixed> $aFilter ассоциативный массив фильтра со строгим сообветствием (<b>равно</b>) (ID, ENTITY_ID,
     *     FIELD_NAME, USER_TYPE_ID, SORT, MULTIPLE, MANDATORY, SHOW_FILTER)
     *
     * @return CDBResult
     * @static
     * @noinspection PhpUnusedParameterInspection
     */
    public static function GetList($aSort = [], $aFilter = [])
    {
        return new CDBResult();
    }
}

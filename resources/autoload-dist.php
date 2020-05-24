<?php

use WebArch\BitrixTaxidermist\Taxidermist;

/**
 * Этот файл рекомендуется для подключения в статическом анализаторе кода.
 */

/** @noinspection PhpIncludeInspection */
require_once realpath(__DIR__ . '/../../..') . '/autoload.php';
(new Taxidermist())->registerAutoload();

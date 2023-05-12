<?php

declare(strict_types=1);
/** @noinspection PhpUnused */

namespace WebArch\BitrixTaxidermist\Enum;

class CacheEngineType
{
    final public const NONE = 'cacheenginenone';

    final public const APC = 'cacheengineapc';

    final public const XCACHE = 'cacheenginexcache';

    final public const MEMCACHE = 'cacheenginememcache';

    final public const FILES = 'cacheenginefiles';
}

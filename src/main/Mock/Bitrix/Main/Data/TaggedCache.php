<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Data;

class TaggedCache
{
    /**
     * @return void
     */
    public function abortTagCache()
    {
    }

    /**
     * @return void
     */
    public function clearByTag(bool|string $tag)
    {
    }

    /**
     * @return void
     */
    public function endTagCache()
    {
    }

    /**
     * @param string $relativePath
     * @return void
     */
    public function startTagCache($relativePath)
    {
    }

    /**
     * @param string $tag
     * @return void
     */
    public function registerTag($tag)
    {
    }
}

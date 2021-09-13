<?php
/** @noinspection PhpUnusedParameterInspection */
/** @noinspection PhpMissingReturnTypeInspection */
/** @noinspection PhpMissingParamTypeInspection */
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Type;

use DateTimeZone;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Context;

class DateTime
{
    /**
     * @param string $time String representation of datetime.
     * @param string $format PHP datetime format. If not specified, the format is got from the current culture.
     * @param null|DateTimeZone $timezone Optional timezone object.
     *
     * @throws Main\ObjectException
     */
    public function __construct($time = null, $format = null, DateTimeZone $timezone = null)
    {
    }

    /**
     * Converts date to string, using Culture and global timezone settings.
     *
     * @param null|Context\Culture $culture Culture contains datetime format.
     *
     * @return string
     */
    public function toString(Context\Culture $culture = null)
    {
        return '';
    }

    /**
     * Returns timezone object.
     *
     * @return DateTimeZone
     */
    public function getTimeZone()
    {
        return new DateTimeZone('GMT');
    }

    /**
     * Sets timezone object.
     *
     * @param DateTimeZone $timezone Timezone object.
     *
     * @return DateTime
     */
    public function setTimeZone(DateTimeZone $timezone)
    {
        return $this;
    }

    /**
     * Sets default timezone.
     *
     * @return DateTime
     */
    public function setDefaultTimeZone()
    {
        return $this;
    }

    /**
     * @param int $hour Hour value.
     * @param int $minute Minute value.
     * @param int $second Second value.
     *
     * @return DateTime
     */
    public function setTime($hour, $minute, $second = 0)
    {
        return $this;
    }

    /**
     * Changes time from server time to user time using global timezone settings.
     *
     * @return DateTime
     */
    public function toUserTime()
    {
        return $this;
    }

    /**
     * Creates DateTime object from local user time using global timezone settings and default culture.
     *
     * @param string $timeString Full or short formatted time.
     *
     * @return DateTime
     */
    public static function createFromUserTime($timeString)
    {
        return new static;
    }

    /**
     * Returns long (including time) date culture format.
     *
     * @param Context\Culture $culture Culture.
     *
     * @return string
     */
    protected static function getCultureFormat(Context\Culture $culture)
    {
        return '';
    }

    /**
     * Creates DateTime object from PHP \DateTime object.
     *
     * @param \DateTime $datetime Source object.
     *
     * @return static
     */
    public static function createFromPhp(\DateTime $datetime)
    {
        return new static;
    }

    /**
     * Creates DateTime object from Unix timestamp.
     *
     * @param int $timestamp Source timestamp.
     *
     * @return static
     */
    public static function createFromTimestamp($timestamp)
    {
        return new static;
    }

    /**
     * Creates DateTime object from string.
     * NULL will be returned on failure.
     *
     * @param string $timeString Full formatted time.
     * @param string $format PHP datetime format. If not specified, the format is got from the current culture.
     *
     * @return null|DateTime
     */
    public static function tryParse($timeString, $format = null)
    {
        return null;
    }
}

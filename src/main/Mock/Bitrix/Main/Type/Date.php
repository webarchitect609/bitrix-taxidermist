<?php

declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Type;

use DateInterval;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main;
use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Context;

class Date implements \Stringable
{
    /** @var \DateTime */
    protected $value;

    /**
     * @param string $date String representation of date.
     * @param string $format PHP date format. If not specified, the format is got from the current culture.
     *
     * @throws Main\ObjectException
     */
    public function __construct($date = null, $format = null)
    {
    }

    /**
     * Formats date value to string.
     *
     * @param string $format PHP date format.
     * @return string
     */
    public function format($format)
    {
        return '';
    }

    /**
     * Produces the copy of the object.
     *
     * @return void
     */
    public function __clone()
    {
        $this->value = clone $this->value;
    }

    /**
     * Performs dates arithmetic.
     *
     * Each duration period is represented by an integer value followed by a period
     * designator. If the duration contains time elements, that portion of the
     * specification is preceded by the letter T.
     * Period Designators: Y - years, M - months, D - days, W - weeks, H - hours,
     * M - minutes, S - seconds.
     * Examples: two days - 2D, two seconds - T2S, six years and five minutes - 6YT5M.
     * The unit types must be entered from the largest scale unit on the left to the
     * smallest scale unit on the right.
     * Use first "-" char for negative periods.
     * OR
     * Relative period.
     * Examples: "+5 weeks", "12 day", "-7 weekdays", '3 months - 5 days'
     *
     * @param string $interval Time interval to add.
     * @return $this
     */
    public function add($interval)
    {
        return $this;
    }

    /**
     * Sets the current date of the DateTime object to a different date.
     *
     * @param int $year
     * @param int $month
     * @param int $day
     * @return $this
     */
    public function setDate($year, $month, $day)
    {
        return $this;
    }

    private function tryToCreateIntervalByDesignators($interval): ?DateInterval
    {
        return null;
    }

    /**
     * Returns Unix timestamp from date.
     *
     * @return int
     */
    public function getTimestamp()
    {
        return 0;
    }

    /**
     * Converts a date to the string.
     *
     * @param Context\Culture $culture Culture contains date format.
     * @return string
     */
    public function toString(Context\Culture $culture = null)
    {
        return '';
    }

    /**
     * Converts a date to the string with default culture format setting.
     */
    public function __toString(): string
    {
        return '';
    }

    /**
     * Returns a date format from the culture in the php format.
     *
     * @param Context\Culture $culture Optional culture.
     * @return string
     */
    public static function getFormat(Context\Culture $culture = null)
    {
        return '';
    }

    /**
     * Returns short date culture format.
     *
     * @param Context\Culture $culture Culture.
     * @return string
     */
    protected static function getCultureFormat(Context\Culture $culture)
    {
        return '';
    }

    /**
     * Converts date format from culture to php format.
     *
     * @param string $format Format string.
     * @return mixed
     */
    public static function convertFormatToPhp($format)
    {
        return '';
    }

    /**
     * Checks the string for correct date (by trying to create Date object).
     *
     * @param string $time String representation of date.
     * @param string $format PHP date format. If not specified, the format is got from the current culture.
     * @return bool
     */
    public static function isCorrect($time, $format = null)
    {
        return false;
    }

    /**
     * Creates Date object from PHP \DateTime object.
     *
     * @param \DateTime $datetime Source object.
     * @return static
     */
    public static function createFromPhp(\DateTime $datetime)
    {
        return new static();
    }

    /**
     * Creates Date object from Unix timestamp.
     *
     * @param int $timestamp Source timestamp.
     * @return static
     */
    public static function createFromTimestamp($timestamp)
    {
        return new static();
    }

    /**
     * Creates Date object from Text (return array of result object)
     * Examples: "end of next week", "tomorrow morning", "friday 25.10"
     *
     * @param string $text
     */
    public static function createFromText($text): ?DateTime
    {
        return null;
    }
}

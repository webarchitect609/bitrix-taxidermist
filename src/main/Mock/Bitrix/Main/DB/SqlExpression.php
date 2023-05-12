<?php

declare(strict_types=1);
/** @noinspection PhpDocRedundantThrowsInspection */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\DB;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\ArgumentException;

class SqlExpression implements \Stringable
{
    /** @var string */
    protected $expression;

    /** @var array */
    protected $args = [];

    protected $pattern = '/([^\\\\]|^)(\?[#sif]?)/';

    protected $i;

    /**
     * @var Connection
     */
    private $connection;

    /**
     * @param string $expression Sql expression.
     * @param string,... $args Substitutes.
     *
     * @throws ArgumentException
     *
     * @noinspection PhpDocSignatureInspection
     */
    public function __construct(string $expression, string ...$args)
    {
    }

    /**
     * Returns $expression with replaced placeholders.
     *
     * @return string
     */
    public function compile()
    {
        return '';
    }

    /**
     * Used by compile method to replace placeholders with values.
     *
     * @param array $matches Matches found by preg_replace.
     * @return string
     *
     * @noinspection PhpMissingParamTypeInspection
     * @noinspection PhpUnusedParameterInspection
     */
    protected function execPlaceholders($matches)
    {
        return '';
    }

    public function __toString(): string
    {
        return $this->compile();
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param Connection $connection
     *
     * @noinspection PhpMissingParamTypeInspection*/
    public function setConnection($connection)
    {
        $this->connection = $connection;
    }
}

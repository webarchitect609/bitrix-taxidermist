<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2021 Bitrix
 */

namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Authentication;

class Context implements \JsonSerializable
{
    protected $userId;
    protected $applicationId;
    protected $applicationPasswordId;
    protected $storedAuthId;
    protected $storedAuthHash;
    protected $hitAuthId;

    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return (int)$this->userId;
    }

    /**
     * @param null|int $userId
     * @return Context
     */
    public function setUserId(?int $userId): Context
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getApplicationId(): ?string
    {
        return $this->applicationId;
    }

    /**
     * @param null|string $applicationId
     * @return Context
     */
    public function setApplicationId(?string $applicationId): Context
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * @return null|int
     */
    public function getApplicationPasswordId(): ?int
    {
        return $this->applicationPasswordId;
    }

    /**
     * @param null|int $applicationPasswordId
     * @return Context
     */
    public function setApplicationPasswordId(?int $applicationPasswordId): Context
    {
        $this->applicationPasswordId = $applicationPasswordId;
        return $this;
    }

    /**
     * @return null|int
     */
    public function getStoredAuthId(): ?int
    {
        return $this->storedAuthId;
    }

    /**
     * @param null|int $storedAuthId
     * @return Context
     */
    public function setStoredAuthId(?int $storedAuthId): Context
    {
        $this->storedAuthId = $storedAuthId;
        return $this;
    }

    /**
     * @return null|int
     */
    public function getHitAuthId(): ?int
    {
        return $this->hitAuthId;
    }

    /**
     * @param null|int $hitAuthId
     * @return Context
     */
    public function setHitAuthId(?int $hitAuthId): Context
    {
        $this->hitAuthId = $hitAuthId;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getStoredAuthHash()
    {
        return $this->storedAuthHash;
    }

    /**
     * @param null|string $storedAuthHash
     * @return Context
     */
    public function setStoredAuthHash(?string $storedAuthHash)
    {
        $this->storedAuthHash = $storedAuthHash;
        return $this;
    }

    public function jsonSerialize()
    {
        $data = [];

        foreach ($this as $property => $dummy) {
            $data[$property] = $this->{$property};
        }

        return $data;
    }

    /**
     * @param string $json
     * @return Context
     */
    public static function jsonDecode(string $json): Context
    {
        $obj = new static();

        if ($json != '') {
            $data = json_decode($json, true);

            foreach ($obj as $property => $dummy) {
                if (isset($data[$property])) {
                    $obj->{$property} = $data[$property];
                }
            }
        }

        return $obj;
    }
}

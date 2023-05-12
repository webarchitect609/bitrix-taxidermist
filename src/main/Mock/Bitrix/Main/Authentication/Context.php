<?php

declare(strict_types=1);

/**
 * Bitrix Framework
 *
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

    public function getUserId(): int
    {
        return (int) $this->userId;
    }

    public function setUserId(?int $userId): Context
    {
        $this->userId = $userId;

        return $this;
    }

    public function getApplicationId(): ?string
    {
        return $this->applicationId;
    }

    public function setApplicationId(?string $applicationId): Context
    {
        $this->applicationId = $applicationId;

        return $this;
    }

    public function getApplicationPasswordId(): ?int
    {
        return $this->applicationPasswordId;
    }

    public function setApplicationPasswordId(?int $applicationPasswordId): Context
    {
        $this->applicationPasswordId = $applicationPasswordId;

        return $this;
    }

    public function getStoredAuthId(): ?int
    {
        return $this->storedAuthId;
    }

    public function setStoredAuthId(?int $storedAuthId): Context
    {
        $this->storedAuthId = $storedAuthId;

        return $this;
    }

    public function getHitAuthId(): ?int
    {
        return $this->hitAuthId;
    }

    public function setHitAuthId(?int $hitAuthId): Context
    {
        $this->hitAuthId = $hitAuthId;

        return $this;
    }

    public function getStoredAuthHash(): ?string
    {
        return $this->storedAuthHash;
    }

    /**
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

    public static function jsonDecode(string $json): Context
    {
        $obj = new static();

        if ($json != '') {
            $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);

            foreach ($obj as $property => $dummy) {
                if (isset($data[$property])) {
                    $obj->{$property} = $data[$property];
                }
            }
        }

        return $obj;
    }
}

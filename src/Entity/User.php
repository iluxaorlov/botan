<?php

namespace Botan\Entity;

class User extends Entity
{
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var bool
     */
    protected bool $isBot;

    /**
     * @var string
     */
    protected string $firstName;

    /**
     * @var string
     */
    protected string $lastName;

    /**
     * @var string
     */
    protected string $username;

    /**
     * @var string
     */
    protected string $languageCode;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isBot(): bool
    {
        return $this->isBot;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }
}
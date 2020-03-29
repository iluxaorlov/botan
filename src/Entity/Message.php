<?php

namespace Botan\Entity;

class Message extends Entity
{
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var User
     */
    protected User $from;

    /**
     * @var Chat
     */
    protected Chat $chat;

    /**
     * @var int
     */
    protected int $date;

    /**
     * @var string
     */
    protected string $text;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}
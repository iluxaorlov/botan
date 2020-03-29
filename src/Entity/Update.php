<?php

namespace Botan\Entity;

class Update extends Entity
{
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var Message
     */
    protected Message $message;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Message
     */
    public function getMessage(): Message
    {
        return $this->message;
    }
}
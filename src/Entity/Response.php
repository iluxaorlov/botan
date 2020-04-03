<?php

namespace Botan\Entity;

class Response extends Entity
{
    /**
     * @var bool
     */
    protected bool $ok;

    /**
     * @var Message
     */
    protected Message $result;

    /**
     * @return bool
     */
    public function isOk(): bool
    {
        return $this->ok;
    }

    /**
     * @return Message
     */
    public function getResult(): Message
    {
        return $this->result;
    }
}
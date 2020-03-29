<?php

namespace Botan;

class Botan
{
    /**
     * @var string
     */
    private string $token;

    /**
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }
}

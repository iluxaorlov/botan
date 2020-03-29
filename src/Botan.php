<?php

namespace Botan;

use Botan\Entity\Update;
use Exception;
use ReflectionException;

class Botan
{
    /**
     * @var string
     */
    private string $token;

    /**
     * @var Update
     */
    private Update $update;

    /**
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * @throws ReflectionException
     * @throws Exception
     */
    public function handle(): void
    {
        $input = file_get_contents('php://input');

        if (empty($input)) {
            throw new Exception('Empty input');
        }

        $data = json_decode($input, true);

        if (empty($data)) {
            throw new Exception('Empty json');
        }

        $this->update = new Update($data);
    }

    /**
     * @return Update
     */
    public function getUpdate(): Update
    {
        return $this->update;
    }
}
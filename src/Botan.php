<?php

namespace Botan;

use Botan\Entity\Response;
use Botan\Entity\Update;
use Exception;
use ReflectionException;

class Botan
{
    private const BASE_URI = 'https://api.telegram.org/bot';

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

    /**
     * @return Update
     *
     * @throws ReflectionException
     * @throws Exception
     */
    public function getUpdate(): Update
    {
        $input = file_get_contents('php://input');

        if (empty($input)) {
            throw new Exception('Empty input');
        }

        $data = json_decode($input, true);

        if (empty($data)) {
            throw new Exception('Empty json');
        }

        return new Update($data);
    }

    /**
     * @param array $parameters
     *
     * @return bool|Response
     *
     * @throws ReflectionException
     */
    public function sendMessage(array $parameters)
    {
        return $this->send(self::BASE_URI . $this->token . '/sendMessage?' . http_build_query($parameters));
    }

    /**
     * @param string $uri
     *
     * @return bool|Response
     *
     * @throws ReflectionException
     * @throws Exception
     */
    private function send(string $uri)
    {
        $channel = curl_init($uri);
        curl_setopt($channel, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($channel);
        curl_close($channel);

        if (!$response) {
            return $response;
        }

        $data = json_decode($response, true);

        if (empty($data)) {
            throw new Exception('Empty json');
        }

        return new Response($data);
    }
}
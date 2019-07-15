<?php

namespace Maksa988\PolisAPI;

use GuzzleHttp\Client;
use Maksa988\PolisAPI\Requests\Request;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\ClientException;
use Maksa988\PolisAPI\Exceptions\Exception;

class PolisAPI
{
    /**
     * @var string
     */
    const VERSION = '0.1';

    /**
     * @var string
     */
    const API_URL = 'https://polis.ua/service';

    /**
     * @var string
     */
    const TEST_API_URL = 'http://test.polis.ua/service';

    /**
     * @var bool
     */
    protected $testMode = false;

    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $client;

    /**
     * PolisAPI constructor.
     *
     * @param string $login
     * @param string $password
     * @param bool $testMode
     */
    public function __construct($login, $password, $testMode = false)
    {
        $this->login = $login;
        $this->password = $password;

        $this->testMode = $testMode;

        $this->client = new Client;
    }

    /**
     * @param Request $request
     *
     * @return array|\Psr\Http\Message\StreamInterface
     *
     * @throws Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request(Request $request)
    {
        $response = null;

        try {
            $response = $this->client->request($request->getMethod(),$this->getAPIUrl() . $request->getUrl(), [
                'auth' => [
                    $this->login,
                    $this->password,
                ],
                'headers' => $request->getHeaders(),
                'query' => $request->getData(),
                'json' => $request->getData(),
            ]);
        } catch (ClientException  $e) {
            $this->throwError($e);
        }

        if($request->isFile()) {
            return $this->decodeResponse($response);
        }

        return $response->getBody();
    }

    /**
     * @return string
     */
    public function getAPIUrl()
    {
        if($this->testMode) {
            return self::TEST_API_URL;
        }

        return self::API_URL;
    }

    /**
     * @return $this
     */
    public function enableTestMode()
    {
        $this->testMode = true;

        return $this;
    }

    /**
     * @return $this
     */
    public function disableTestMode()
    {
        $this->testMode = false;

        return $this;
    }

    /**
     * @param ClientException $e
     *
     * @throws Exception
     */
    protected function throwError(ClientException $e)
    {
        $error = $this->decodeResponse($e->getResponse());

        //

        throw new Exception($e->getResponse());
    }

    /**
     * @param ResponseInterface $response
     *
     * @return array
     */
    protected function decodeResponse(ResponseInterface $response)
    {
        return \GuzzleHttp\json_decode($response->getBody()->getContents(), true);
    }
}
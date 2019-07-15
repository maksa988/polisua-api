<?php

namespace Maksa988\PolisAPI\Requests;

abstract class Request
{
    /**
     * @var static
     */
    protected $url;

    /**
     * @var string
     */
    protected $locale = "uk_UA";

    /**
     * @var string
     */
    protected $method = "GET";

    /**
     * @var bool
     */
    protected $isFile = false;

    /**
     * @var array
     */
    const SUPPORTED_METHODS = ["POST", "GET", "PUT", "DELETE", "PATCH"];

    /**
     * Request constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * @param string $locale
     */
    public function setLocale($locale = "ru_RU")
    {
        $this->locale = $locale;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return [
            //
        ];
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param $method
     *
     * @return bool
     */
    public function setMethod($method)
    {
        if(! in_array($method, self::SUPPORTED_METHODS)) {
            return false;
        }

        $this->method = $method;

        return true;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return [
            'content-type' => 'application/json',
            'Accept' => 'application/json',
            'locale' => $this->locale,
        ];
    }

    /**
     * @return bool
     */
    public function isFile()
    {
        return $this->isFile;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}
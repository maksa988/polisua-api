<?php

namespace Maksa988\PolisAPI\Requests;

class CarModelsDictionaryRequest extends Request
{
    /**
     * @var string
     */
    protected $url = '/api/car/models/';

    /**
     * Request constructor.
     *
     * @param $brand
     */
    public function __construct($brand)
    {
        parent::__construct();

        $this->setUrl($this->url . $brand);
    }
}
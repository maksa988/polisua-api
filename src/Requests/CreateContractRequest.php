<?php

namespace Maksa988\PolisAPI\Requests;

use Maksa988\PolisAPI\Types\Client;
use Maksa988\PolisAPI\Types\EngineSize;

class CreateContractRequest extends Request
{
    /**
     * @var string
     */
    protected $url = '/api/contract';

    /**
     * @var string
     */
    protected $method = 'POST';
    /**
     * @var array
     */
    protected $requestData = [];

    /**
     * AutoInfoRequest constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct();

        foreach ($data as $key => $value) {
            $this->requestData[$key] = $value;
        }
    }

    /**
     * @return array
     */
    public function getData()
    {
        return array_merge(parent::getData(), $this->requestData);
    }
}

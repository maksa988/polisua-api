<?php

namespace Maksa988\PolisAPI\Requests;

class ContractInfoRequest extends Request
{
    /**
     * @var string
     */
    protected $url = '/api/contract/';

    /**
     * AutoInfoRequest constructor.
     *
     * @param string $contract
     */
    public function __construct($contract)
    {
        parent::__construct();

        $this->setUrl($this->url . $contract);
    }
}
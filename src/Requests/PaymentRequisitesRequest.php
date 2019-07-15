<?php

namespace Maksa988\PolisAPI\Requests;

class PaymentRequisitesRequest extends Request
{
    /**
     * @var string
     */
    protected $url = '/api/payment-requisites/';

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
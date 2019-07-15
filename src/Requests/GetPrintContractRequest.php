<?php

namespace Maksa988\PolisAPI\Requests;

class GetPrintContractRequest extends Request
{
    /**
     * @var string
     */
    protected $url = '/api/contract/{contract}/print/';

    /**
     * AutoInfoRequest constructor.
     *
     * @param string $contract
     * @param int $variant
     */
    public function __construct($contract, $variant = 0)
    {
        parent::__construct();

        $this->setUrl(str_replace('{contract}', $contract, $this->url) . $variant);

        $this->isFile = true;
    }
}
<?php

namespace Maksa988\PolisAPI\Requests;

class CompanyLogoRequest extends Request
{
    /**
     * @var string
     */
    protected $url = '/api/resources/company/logo/';

    /**
     * AutoInfoRequest constructor.
     *
     * @param string $company
     */
    public function __construct($company)
    {
        parent::__construct();

        $this->setUrl($this->url . $company);
    }
}
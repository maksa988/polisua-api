<?php

namespace Maksa988\PolisAPI\Requests;

class CompanyLogoRequest extends Request
{
    /**
     * @var string
     */
    protected $url = '/resources/company/logo/';

    /**
     * @var bool
     */
    protected $isFile = true;

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

    /**
     * @return array
     */
    public function getHeaders()
    {
        $headers = parent::getHeaders();

        $headers = [
            'locale' => 'uk_UA',
            'Content-Type' => 'image/png'
        ];

        return $headers;
    }
}
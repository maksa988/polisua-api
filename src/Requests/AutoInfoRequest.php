<?php

namespace Maksa988\PolisAPI\Requests;

class AutoInfoRequest extends Request
{
    /**
     * @var string
     */
    protected $url = '/api/osgpo/auto-info/find/v2/';

    /**
     * AutoInfoRequest constructor.
     *
     * @param string $plate
     */
    public function __construct($plate)
    {
        parent::__construct();

        $this->setUrl($this->url . $plate);
    }
}

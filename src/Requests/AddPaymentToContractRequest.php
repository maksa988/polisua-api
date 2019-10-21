<?php

namespace Maksa988\PolisAPI\Requests;

class AddPaymentToContractRequest extends Request
{
    /**
     * @var string
     */
    protected $url = '/api/contract/{contract}/payment';

    /**
     * @var \DateTime
     */
    protected $data_dateTime;

    /**
     * @var string
     */
    protected $data_reference;

    /**
     * @var string
     */
    protected $data_purpose = null;

    /**
     * @var integer
     */
    protected $data_sum = null;

    /**
     * AutoInfoRequest constructor.
     *
     * @param string $contract
     * @param \DateTime $dateTime
     * @param $reference
     * @param null|string $purpose
     * @param null|integer $sum
     */
    public function __construct($contract, \DateTime $dateTime, $reference, $purpose = null, $sum = null)
    {
        parent::__construct();

        $this->setUrl(str_replace('{contract}', $contract, $this->url));
        $this->setMethod('POST');

        $this->data_dateTime = $dateTime;
        $this->data_reference = $reference;
        $this->data_purpose = $purpose;
        $this->data_sum = $sum;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return array_merge(parent::getData(), [
            'dateTime' => $this->data_dateTime->format('Y-m-d\TH:i:s'),
            'reference' => $this->data_reference,
            'purpose' => $this->data_purpose,
            'sum' => $this->data_sum,
        ]);
    }
}

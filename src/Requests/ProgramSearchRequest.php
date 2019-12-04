<?php

namespace Maksa988\PolisAPI\Requests;

use Maksa988\PolisAPI\Types\Client;
use Maksa988\PolisAPI\Types\EngineSize;

class ProgramSearchRequest extends Request
{
    /**
     * @var string
     */
    protected $url = '/api/program/search';

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $agentId;

    /**
     * @var string
     */
    protected $carType;

    /**
     * @var integer
     */
    protected $carRegZone;

    /**
     * @var integer
     */
    protected $cityId;

    /**
     * @var integer
     */
    protected $privilegeType;

    /**
     * @var string
     */
    protected $engineSize;

    /**
     * @var boolean
     */
    protected $taxi;

    /**
     * @var integer
     */
    protected $franchiseFrom;

    /**
     * @var integer
     */
    protected $franchiseTo;

    /**
     * @var \DateTime
     */
    protected $otkNextDate;

    /**
     * @var boolean
     */
    protected $notPassOTK;

    /**
     * @var string
     */
    protected $clientType;

    /**
     * @var boolean
     */
    protected $fraud;

    /**
     * @var boolean
     */
    protected $expirance3Years;

    /**
     * @var integer
     */
    protected $contractMonthes;

    /**
     * @var integer
     */
    protected $carCount;

    /**
     * @var array
     */
    protected $usingMonths;

    /**
     * AutoInfoRequest constructor.
     *
     * @param $carType
     * @param $carRegZone
     * @param $cityId
     * @param int $privilegeType
     * @param string $engineSize
     * @param bool $taxi
     * @param $franchiseFrom
     * @param $franchiseTo
     * @param \DateTime $otkNextDate
     * @param bool $notPassOTK
     * @param string $clientType
     * @param bool $fraud
     * @param bool $expirance3Years
     * @param int $contractMonthes
     * @param int $carCount
     * @param array $usingMonths
     */
    public function __construct($agentId, $carType, $carRegZone, $cityId, $franchiseFrom, $franchiseTo,
                                \DateTime $otkNextDate = null, $privilegeType = 0, $engineSize = EngineSize::LESS_2500,
                                $taxi = false, $notPassOTK = false, $clientType = Client::FL, $fraud = false,
                                $expirance3Years = true, $contractMonthes = 12, $carCount = null, $usingMonths = [])
    {
        parent::__construct();

        $this->agentId = $agentId;
        $this->carType = $carType;
        $this->carRegZone = $carRegZone;
        $this->cityId = $cityId;
        $this->privilegeType = $privilegeType;
        $this->engineSize = $engineSize;
        $this->taxi = $taxi;
        $this->franchiseFrom = $franchiseFrom;
        $this->franchiseTo = $franchiseTo;
        $this->otkNextDate = $otkNextDate;
        $this->notPassOTK = $notPassOTK;
        $this->clientType = $clientType;
        $this->fraud = $fraud;
        $this->expirance3Years = $expirance3Years;
        $this->contractMonthes = $contractMonthes;
        $this->carCount = $carCount;
        $this->usingMonths = $usingMonths;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return array_merge(parent::getData(), [
            'agentId' => $this->agentId,
            'carType' => $this->carType,
            'carRegZone' => $this->carRegZone,
            'cityId' => $this->cityId,
            'privilegeType' => $this->privilegeType,
            'engineSize' => $this->engineSize,
            'taxi' => $this->taxi,
            'franchiseFrom' => $this->franchiseFrom,
            'franchiseTo' => $this->franchiseTo,
            'otkNextDate' => is_null($this->otkNextDate) ? null : $this->otkNextDate->format('Y-m-d'),
            'notPassOTK' => $this->notPassOTK,
            'clientType' => $this->clientType,
            'fraud' => $this->fraud,
            'expirance3Years' => $this->expirance3Years,
            'contractMonthes' => $this->contractMonthes,
            'carCount' => $this->carCount,
            'usingMonths' => empty($this->usingMonths) ? null : $this->usingMonths,
        ]);
    }
}

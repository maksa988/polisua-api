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
     * @var string
     */
    protected $calculator;

    /**
     * @var string
     */
    protected $paySum;

    /**
     * @var string
     */
    protected $programId;

    /**
     * @var \DateTime
     */
    protected $dateFrom;

    /**
     * @var string
     */
    protected $agentId;

    /**
     * @var string
     */
    protected $vehicleBrand;

    /**
     * @var string
     */
    protected $vehicleBrandName;

    /**
     * @var string
     */
    protected $vehicleModel;

    /**
     * @var string
     */
    protected $vehicleModelName;

    /**
     * @var integer
     */
    protected $vehicleModelYear;

    /**
     * @var string
     */
    protected $vehicleVin;

    /**
     * @var string
     */
    protected $vehicleRegistration;

    /**
     * @var string
     */
    protected $insurantClientId;

    /**
     * @var string
     */
    protected $insurantPhone;

    /**
     * @var string
     */
    protected $insurantInnEgrpou;

    /**
     * @var string
     */
    protected $insurantSurnameOrgName;

    /**
     * @var string
     */
    protected $insurantName;

    /**
     * @var string
     */
    protected $insurantPatronymic;

    /**
     * @var \DateTime
     */
    protected $insurantBirthDate;

    /**
     * @var string
     */
    protected $insurantAddress;

    /**
     * @var string
     */
    protected $insurantEmail;

    /**
     * @var string
     */
    protected $insurantDocumentType;

    /**
     * @var string
     */
    protected $insurantDocumentSeries;
    /**
     * @var string
     */
    protected $insurantDocumentNumber;

    /**
     * @var string
     */
    protected $insurantDocumentIssueDate;

    /**
     * @var string
     */
    protected $insurantDocumentIssued;

    /**
     * @var string
     */
    protected $deliveryType;

    /**
     * @var string
     */
    protected $deliveryAddress;

    /**
     * @var string
     */
    protected $deliveryAddressId;

    /**
     * @var string
     */
    protected $deliveryPhone;

    /**
     * @var string
     */
    protected $deliveryNote;

    /**
     * @var string
     */
    protected $deliveryCost;

    /**
     * @var string
     */
    protected $cashOnDelivery;

    /**
     * @var string
     */
    protected $polisType;

    /**
     * @var string
     */
    protected $payType;

    /**
     * @var string
     */
    protected $otp;

    /**
     * AutoInfoRequest constructor.
     *
     * @param $calculator
     * @param $paySum
     * @param $programId
     * @param \DateTime $dateFrom
     * @param $agentId
     * @param $vehicleBrand
     * @param $vehicleBrandName
     * @param $vehicleModel
     * @param $vehicleModelName
     * @param $vehicleModelYear
     * @param $vehicleVin
     * @param $vehicleRegistration
     * @param $insurantClientId
     * @param $insurantPhone
     * @param $insurantInnEgrpou
     * @param $insurantSurnameOrgName
     * @param $insurantName
     * @param $insurantPatronymic
     * @param \DateTime $insurantBirthDate
     * @param $insurantAddress
     * @param $insurantEmail
     * @param $insurantDocumentType
     * @param $insurantDocumentSeries
     * @param $insurantDocumentIssueDate
     * @param $insurantDocumentIssued
     * @param $deliveryType
     * @param $deliveryAddress
     * @param $deliveryAddressId
     * @param $deliveryPhone
     * @param $deliveryNote
     * @param $deliveryCost
     * @param $cashOnDelivery
     * @param $polisType
     * @param $otp
     */
    public function __construct($calculator, $paySum, $programId, \DateTime $dateFrom, $agentId,
                                $vehicleBrand, $vehicleBrandName, $vehicleModel, $vehicleModelName,
                                $vehicleModelYear, $vehicleVin, $vehicleRegistration, $insurantClientId, $insurantPhone,
                                $insurantInnEgrpou, $insurantSurnameOrgName, $insurantName, $insurantPatronymic,
                                \DateTime $insurantBirthDate, $insurantAddress, $insurantEmail, $insurantDocumentType,
                                $insurantDocumentSeries, $insurantDocumentNumber, $insurantDocumentIssueDate,
                                $insurantDocumentIssued, $deliveryType, $deliveryAddress, $deliveryAddressId,
                                $deliveryPhone, $deliveryNote, $deliveryCost, $cashOnDelivery, $polisType, $otp)
    {
        parent::__construct();

        $this->calculator = $calculator;
        $this->paySum = $paySum;
        $this->programId = $programId;
        $this->dateFrom = $dateFrom;
        $this->agentId = $agentId;
        $this->vehicleBrand = $vehicleBrand;
        $this->vehicleBrandName = $vehicleBrandName;
        $this->vehicleModel = $vehicleModel;
        $this->vehicleModelName = $vehicleModelName;
        $this->vehicleModelYear = $vehicleModelYear;
        $this->vehicleVin = $vehicleVin;
        $this->vehicleRegistration = $vehicleRegistration;
        $this->insurantClientId = $insurantClientId;
        $this->insurantPhone = $insurantPhone;
        $this->insurantInnEgrpou = $insurantInnEgrpou;
        $this->insurantSurnameOrgName = $insurantSurnameOrgName;
        $this->insurantName = $insurantName;
        $this->insurantPatronymic = $insurantPatronymic;
        $this->insurantBirthDate = $insurantBirthDate;
        $this->insurantAddress = $insurantAddress;
        $this->insurantEmail = $insurantEmail;
        $this->insurantDocumentType = $insurantDocumentType;
        $this->insurantDocumentSeries = $insurantDocumentSeries;
        $this->insurantDocumentNumber = $insurantDocumentNumber;
        $this->insurantDocumentIssueDate = $insurantDocumentIssueDate;
        $this->insurantDocumentIssued = $insurantDocumentIssued;
        $this->deliveryType = $deliveryType;
        $this->deliveryAddress = $deliveryAddress;
        $this->deliveryAddressId = $deliveryAddressId;
        $this->deliveryPhone = $deliveryPhone;
        $this->deliveryNote = $deliveryNote;
        $this->deliveryCost = $deliveryCost;
        $this->cashOnDelivery = $cashOnDelivery;
        $this->polisType = $polisType;
        $this->otp = $otp;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return array_merge(parent::getData(), [
            'calculator' => $this->calculator,
            'paySum' => $this->paySum,
            'programId' => $this->programId,
            'dateFrom' => $this->dateFrom->format('Y-m-d'),
            'agentId' => $this->agentId,
            'vehicleBrand' => $this->vehicleBrand,
            'vehicleBrandName' => $this->vehicleBrandName,
            'vehicleModel' => $this->vehicleModel,
            'vehicleModelName' => $this->vehicleModelName,
            'vehicleModelYear' => $this->vehicleModelYear,
            'vehicleVin' => $this->vehicleVin,
            'vehicleRegistration' => $this->vehicleRegistration,
            'insurantClientId' => $this->insurantClientId,
            'insurantPhone' => $this->insurantPhone,
            'insurantInnEgrpou' => $this->insurantInnEgrpou,
            'insurantSurnameOrgName' => $this->insurantSurnameOrgName,
            'insurantName' => $this->insurantName,
            'insurantPatronymic' => $this->insurantPatronymic,
            'insurantBirthDate' => $this->insurantBirthDate->format('Y-m-d'),
            'insurantAddress' => $this->insurantAddress,
            'insurantEmail' => $this->insurantEmail,
            'insurantDocumentType' => $this->insurantDocumentType,
            'insurantDocumentSeries' => $this->insurantDocumentSeries,
            'insurantDocumentNumber' => $this->insurantDocumentNumber,
            'insurantDocumentIssueDate' => $this->insurantDocumentIssueDate,
            'insurantDocumentIssued' => $this->insurantDocumentIssued,
            'deliveryType' => $this->deliveryType,
            'deliveryAddress' => $this->deliveryAddress,
            'deliveryAddressId' => $this->deliveryAddressId,
            'deliveryPhone' => $this->deliveryPhone,
            'deliveryNote' => $this->deliveryNote,
            'deliveryCost' => $this->deliveryCost,
            'cashOnDelivery' => $this->cashOnDelivery,
            'polisType' => $this->polisType,
            'otp' => $this->otp,
        ]);
    }
}
<?php

namespace App\Services\PaymentServices\ApplePay;

use App\Services\PaymentServices\BasisInterfaces\BasisPaymentService;
use App\Traits\PaymentDataConverter;

class ApplePay implements BasisPaymentService
{
	use PaymentDataConverter;

	private $paypalClient;
	private $config;

	/**
	 * Paypal constructor.
	 * @param $config
	 */
	public function __construct($config)
	{
		$this->paypalClient = new ApplePayClient($config);
		$this->config = $config;
		$this->paymentProvider = new ApplePay();
	}

	public function makeTransaction(string $orderId, float $price, string $currency, string $token, string $failUrl)
	{
		//
	}

	public function data(array $data)
	{
		$this->parseData($data);
	}
}
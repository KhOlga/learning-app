<?php

namespace App\Services\PaymentServices\PayPal;

use App\Services\PaymentServices\BasisInterfaces\BasisPaymentService;
use App\Traits\PaymentDataConverter;

class PayPal implements BasisPaymentService
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
		$this->paypalClient = new PayPalClient($config);
		$this->config = $config;
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

<?php

namespace App\Services\PaymentServicesTwo\ApplePay;

use App\Services\PaymentServicesTwo\AbstractPayment\AbsractPaymentService;

class ApplePay extends AbsractPaymentService
{
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
		//
	}
}
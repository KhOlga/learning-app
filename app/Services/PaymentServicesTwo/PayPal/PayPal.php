<?php

namespace App\Services\PaymentServicesTwo\PayPal;

use App\Services\PaymentServicesTwo\AbstractPayment\AbsractPaymentService;

class PayPal extends AbsractPaymentService
{
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
		//
	}
}

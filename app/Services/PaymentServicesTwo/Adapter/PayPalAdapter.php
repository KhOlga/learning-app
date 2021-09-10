<?php

namespace App\Services\PaymentServicesTwo\Adapter;

use App\Services\PaymentServicesTwo\PayPal\PayPal;

class PayPalAdapter implements PaymentAdapterInterface
{
	private $paypal;

	public function __construct(PayPal $paypal)
	{
		$this->paypal = $paypal;
	}

	public function parseData($data, $paymentMethod)
	{
		// TODO: Implement parseData() method.
	}
}
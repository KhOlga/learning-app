<?php

namespace App\Services\PaymentServicesTwo\Adapter;

use App\Services\PaymentServicesTwo\ApplePay\ApplePay;

class ApplePayAdapter implements PaymentAdapterInterface
{
	private $applePay;

	public function __construct(ApplePay $applePay)
	{
		$this->applePay = $applePay;
	}

	public function parseData($data, $paymentMethod)
	{
		// TODO: Implement parseData() method.
	}
}
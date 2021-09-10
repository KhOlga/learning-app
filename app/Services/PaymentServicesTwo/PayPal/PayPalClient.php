<?php

namespace App\Services\PaymentServicesTwo\PayPal;

use App\Services\PaymentServicesTwo\AbstractPayment\AbsractPaymentClient;

class PayPalClient extends AbsractPaymentClient
{
	protected function send(string $method, $link, $data)
	{
		// TODO: Implement send() method with individual staff for purposes this class.
	}
}
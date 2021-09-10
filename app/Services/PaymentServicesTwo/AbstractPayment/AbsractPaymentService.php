<?php

namespace App\Services\PaymentServicesTwo\AbstractPayment;

use App\Traits\PaymentDataConverter;

abstract class AbsractPaymentService
{
	use PaymentDataConverter;

	abstract public function makeTransaction(string $orderId, float $price, string $currency, string $token, string $failUrl);

	abstract public function data(array $data);
}
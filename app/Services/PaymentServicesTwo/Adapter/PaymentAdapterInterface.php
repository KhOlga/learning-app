<?php

namespace App\Services\PaymentServicesTwo\Adapter;

interface PaymentAdapterInterface
{
	public function parseData($data, $paymentMethod);
}
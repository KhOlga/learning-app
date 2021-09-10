<?php

namespace App\Services\PaymentServicesTwo\ApplePay;

use Illuminate\Support\ServiceProvider;

class ApplePayServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->singleton(ApplePay::class, function ($app) {
			return new ApplePay($app->config['services']['apple_pay']);
		});
	}
}
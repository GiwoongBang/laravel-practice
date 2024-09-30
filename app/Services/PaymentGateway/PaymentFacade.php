<?php

namespace App\Services\PaymentGateway;

class PaymentFacade
{
    protected static function getFacadeAccessor()
    {
        return 'payment';
    }
}

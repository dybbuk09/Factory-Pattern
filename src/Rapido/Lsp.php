<?php

namespace LspFactory\Rapido;

use LspFactory\LspInterface;

class Lsp implements LspInterface
{
    private $provider;

    public function __construct($provider)
    {
        $this->provider = $provider;
    }

    public function createBooking()
    {
        //Implement logic for booking creation
        echo "Booking has been created using through {$this->provider}";
    }

    public function cancelBooking()
    {
        //Implement logic for booking cancellation
        echo "Booking cancelled";
    }

    public function getQuote()
    {
        //Implement logic to get eta and pricing
    }
}
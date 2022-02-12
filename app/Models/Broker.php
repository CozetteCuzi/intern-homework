<?php

namespace App\Models;

use DateTime;

class Broker
{
    public function __construct(
        public string   $name,
        public string   $brokerType,
        public float    $overallScore,
        public bool     $hasInactivityFee,
        public DateTime $reviewDate
    )
    {
    }
}

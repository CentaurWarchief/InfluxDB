<?php

namespace InfluxDb\Driver;

use InfluxDb\DriverInterface;
use InfluxDb\PointsPrecision;

class Udp implements DriverInterface, AllowsWriteInterface
{
    /**
     * {@inheritdoc}
     */
    public function write(array $points, $precision = PointsPrecision::PRECISION_NANOSECONDS)
    {
    }
}

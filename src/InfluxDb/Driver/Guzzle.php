<?php

namespace InfluxDb\Driver;

use InfluxDb\DriverInterface;
use InfluxDb\PointsPrecision;

final class Guzzle implements DriverInterface, AllowsQueryInterface, AllowsWriteInterface
{
    /**
     * {@inheritdoc}
     */
    public function query($query, array $parameters = [])
    {
    }

    /**
     * {@inheritdoc}
     */
    public function write(array $points, $precision = PointsPrecision::PRECISION_NANOSECONDS)
    {
    }
}

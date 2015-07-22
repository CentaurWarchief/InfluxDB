<?php

namespace InfluxDb\Driver;

use InfluxDb\PointsPrecision;

interface AllowsWriteInterface
{
    /**
     * @param  array  $points
     * @param  string $precision
     * @return bool
     */
    public function write(array $points, $precision = PointsPrecision::PRECISION_NANOSECONDS);
}

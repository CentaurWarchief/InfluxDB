<?php

namespace InfluxDb;

interface DriverInterface
{
    /**
     * @return bool
     */
    public function supportsQuerying();
}

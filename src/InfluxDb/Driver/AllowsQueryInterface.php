<?php

namespace InfluxDb\Driver;

use InfluxDb\ResultSet;

interface AllowsQueryInterface
{
    /**
     * @param  string $query
     * @param  array  $parameters
     * @return ResultSet
     */
    public function query($query, array $parameters = []);
}

<?php

namespace InfluxDb;

interface PointsPrecision
{
    /**
     * @var string
     */
    const PRECISION_NANOSECONDS = 'n';

    /**
     * @var string
     */
    const PRECISION_MICROSECONDS = 'u';

    /**
     * @var string
     */
    const PRECISION_MILLISECONDS = 'ms';

    /**
     * @var string
     */
    const PRECISION_SECONDS = 's';

    /**
     * @var string
     */
    const PRECISION_MINUTES = 'm';

    /**
     * @var string
     */
    const PRECISION_HOURS = 'h';
}

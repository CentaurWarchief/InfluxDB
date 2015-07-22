<?php

namespace InfluxDb;

use InfluxDb\Exception\QueryingIsNotSupportedException;

class Influx
{
    /**
     * @var DriverInterface
     */
    private $driver;

    /**
     * @param DriverInterface $driver
     */
    public function __construct(DriverInterface $driver)
    {
        $this->driver = $driver;
    }

    /**
     * @param  string $name
     * @return Database
     */
    public function selectDb($name)
    {
        return new Database($name, $this->driver);
    }

    /**
     * @throws QueryingIsNotSupportedException if this driver doesn't handle query
     * @return Database[]
     */
    public function listDatabases()
    {
        if (! $this->driver->supportsQuerying()) {
            throw new QueryingIsNotSupportedException();
        }

        // (...)
        /* @var \string[] $databases */
        $databases = [];

        return array_map(
            function ($database) {
                return new Database($database, $this->driver);
            },
            $databases
        );
    }
}
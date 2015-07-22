<?php

namespace InfluxDb;

class Database
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var DriverInterface
     */
    private $driver;

    /**
     * @param string          $name
     * @param DriverInterface $driver
     */
    public function __construct($name, DriverInterface $driver)
    {
        $this->name   = $name;
        $this->driver = $driver;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    // (...)
}

<?php

namespace InfluxDb;

/**
 * @author Andrey K. Vital <andreykvital@gmail.com>
 */
class InexistentDatabase
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
        $this->name   = (string) $name;
        $this->driver = $driver;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Database
     */
    public function create()
    {
        // (...)
        $created = true;

        if (! $created) {
        }

        return new Database($this->name, $this->driver);
    }
}

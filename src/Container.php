<?php

namespace Aspire;

class Container
{
    private $config = null;

    public function __construct(Config $config = null)
    {
        $this->config = $config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }
}

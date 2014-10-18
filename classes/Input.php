<?php

class Input
{
    private $data;

    public function __construct()
    {
        $this->data = $_POST;
    }

    public function getInput($name, $default = null)
    {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        } else {
            return $default;
        }
    }
} 
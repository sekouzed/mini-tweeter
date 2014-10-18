<?php

class Validator
{
    public function validateString($input)
    {
        if (!is_string($input)) {
            throw new Exception('This value must be a string.');
        }
    }

    public function validateNotBlank($input)
    {
        if (strlen($input) <= 0) {
            throw new Exception('This value must not be blank.');
        }
    }
}
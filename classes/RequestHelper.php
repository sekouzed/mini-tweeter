<?php

abstract class RequestHelper
{
    public static function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function redirectUser($location)
    {
        header('Location: ' . $location);
        exit();
    }
} 
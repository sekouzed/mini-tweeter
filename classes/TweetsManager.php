<?php

class TweetsManager
{
    public function store($data)
    {
        $file_path_name = __DIR__ . '/../data/' . time();
        file_put_contents($file_path_name, serialize($data));
    }
} 
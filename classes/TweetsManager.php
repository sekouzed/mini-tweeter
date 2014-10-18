<?php

class TweetsManager
{
    public function store($data)
    {
        $file_path_name = __DIR__ . '/../data/' . time();
        file_put_contents($file_path_name, serialize($data));
    }

    public function getTweets()
    {
        $tweets = [];
        $data_directory = __DIR__ . '/../data';
        $files = scandir($data_directory, SCANDIR_SORT_DESCENDING);
        foreach ($files as $file) {
            $file_content = file_get_contents($data_directory . '/' . $file);
            $tweets[] = unserialize($file_content);
        }
        return $tweets;
    }
} 
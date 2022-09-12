<?php

class Index{
    public const DB_HOST = "localhost";
    public const DB_NAME = "fwd";
    public const DB_USER = "root";
    public const DB_PASS = "code5959";

    public function __construct()
    {
        echo self::DB_HOST;
    }
}
$ind = new Index();

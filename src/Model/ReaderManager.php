<?php

namespace App\Model;

class ReaderManager
{
    private $database;
    function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }
}

<?php

class DatabaseConnect
{

    protected $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=building;charset=utf8", "root", "");
            this->db->exec('SET CHARSET UTF8');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function db()
    {
        return $this->db;
    }
}
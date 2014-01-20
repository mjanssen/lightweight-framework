<?php
/**
 * Created by PhpStorm.
 * User: marnixjanssen
 * Date: 13/01/14
 * Time: 14:50
 */

namespace models;


class baseModel {

    protected $db;

    public function __construct()
    {
        if (!$this->db) {
            try {
                $conn = new \PDO('mysql:host=localhost;dbname=imp02', 'root', 'secret');
                $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch(\PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
        }

        $this->db = $conn;
    }
} 
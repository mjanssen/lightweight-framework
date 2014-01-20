<?php
/**
 * Created by PhpStorm.
 * User: marnixjanssen
 * Date: 13/01/14
 * Time: 14:50
 */

namespace models;

class baseModel {

    protected $db, $settings, $host, $database, $user, $password;

    public function __construct()
    {
        $this->settings = require_once APPLICATION_PATH.'/config/config.php';

        $this->host     = $this->settings['database']['host'];
        $this->database = $this->settings['database']['database'];
        $this->user     = $this->settings['database']['username'];
        $this->password = $this->settings['database']['password'];

        $this->setConnection();
    }

    public function setConnection()
    {
        if (!$this->db) {
            try {
                $conn = new \PDO('mysql:host='.$this->host.';dbname='.$this->database.'', $this->user, $this->password);
                $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch(\PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
        }

        $this->db = $conn;
    }
} 
<?php
/**
 * Created by PhpStorm.
 * User: marnixjanssen
 * Date: 13/01/14
 * Time: 14:52
 */

namespace models;


class Users extends baseModel {

    public function getUsers()
    {
        $stmt = $this->db->prepare('SELECT * FROM users');
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }

} 
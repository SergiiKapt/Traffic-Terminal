<?php

namespace models;
# работа с базой данных
use db\Db;
use PDO;

class User
{
    protected $users;

    public function __construct()
    {
        $users = new DB(DB_USERS);
        $this->users = $users->getRows();
    }

    public function check($data)
    {
        if ($this->issetUser($data['login'] . ' ' . $data['password'])) {
            return $data['login'];
        }

        return false;
    }

    public function issetUser($findData)
    {
        foreach ($this->users as $user) {
            if (strnatcmp(trim($user), $findData) === 0)
                return true;
        }

        return false;
    }

}

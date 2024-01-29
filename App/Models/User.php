<?php

namespace App\Models;

use Model;

class User extends Model
{
    private $password;

    public function getPassword()
    {
        return $this->password;
    }
}

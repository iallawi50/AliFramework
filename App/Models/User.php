<?php

namespace App\Models;

use Model;

class User extends Model
{

    public $id;
    public $name;
    public $username;
    private $password;
    
    public function getPassword()
    {
        return $this->password;
    }
}

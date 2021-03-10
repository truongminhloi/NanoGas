<?php
/**
 * Created by PhpStorm.
 * User: Ehtesham Mehmood
 * Date: 11/21/2014
 * Time: 1:13 AM
 */

namespace NanoGas\Modules\Connection;

use NanoGas\Modules\Modules;
use NanoGas\Modules\Product\Product;
use NanoGas\Modules\User\User;
use NanoGas\Modules\User\UserDto;

class Connection
{

    private $db = null;
    private $user = null;

    public function __construct()
    {
        $this->db = mysqli_connect("localhost", "root", "Qwe321@!");
    }

    /**
     * @return \mysqli|null
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @return null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function login($user_name, $pass_word): UserDto
    {
        $model = User::findUserNameAndPass($user_name, $pass_word);
        $this->setUser($model);
        return $model;
    }

}


?>
<?php
/**
 * Created by PhpStorm.
 * User: Ehtesham Mehmood
 * Date: 11/21/2014
 * Time: 1:13 AM
 */

namespace NanoGas\Modules\Connection;

use NanoGas\Modules\Modules;


abstract class ConnectionManager extends Modules
{

    protected $connection;

    public function getConnection()
    {
        return $this->connection;
    }

    abstract public function getQueryCli(): QueryCliInterface;
}


?>
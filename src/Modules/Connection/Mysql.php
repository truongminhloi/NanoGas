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

class Mysql extends ConnectionManager
{

    /** @var $instance self */
    private static $instance = null;

    /** @var $mysqlQueryCli QueryCliInterface */
    private $mysqlQueryCli = null;

    public function __construct()
    {
        $this->connection = mysqli_connect("localhost", "root", "Qwe321@!");
        $this->mysqlQueryCli = new MysqlQueryCli($this->connection);
        mysqli_select_db($this->connection, "project_nano");
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Mysql();
        }
        return self::$instance;
    }

    public function getQueryCli(): QueryCliInterface
    {
        return $this->mysqlQueryCli;
    }

}


?>
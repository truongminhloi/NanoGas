<?php
/**
 * Created by PhpStorm.
 * User: Ehtesham Mehmood
 * Date: 11/21/2014
 * Time: 1:13 AM
 */

namespace NanoGas\Modules\Connection;

use NanoGas\Modules\Modules;
use NanoGas\Modules\Product\ProductFetchRow;

abstract class MysqlFetchRow
{

    protected $mysqlQueryCli = null;

    public function __construct($mysqlQueryCli)
    {
        $this->mysqlQueryCli = $mysqlQueryCli;
    }

    public function fetch()
    {
        return mysqli_fetch_all($this->mysqlQueryCli);
    }

    abstract public function fetchRows();

    abstract public function fetchRow();

}


?>
<?php
/**
 * Created by PhpStorm.
 * User: Ehtesham Mehmood
 * Date: 11/21/2014
 * Time: 1:13 AM
 */

namespace NanoGas\Modules\Connection;

use NanoGas\Modules\Gift\GiftFetchRow;
use NanoGas\Modules\Modules;
use NanoGas\Modules\Product\ProductFetchRow;
use NanoGas\Modules\Store\StoreFetchRow;

class MysqlQueryCli implements QueryCliInterface
{
    protected $connection = null;

    protected $lastQueryCli = null;

    public function __construct($cnn)
    {
        $this->connection = $cnn;
    }

    public function getLastQueryCli()
    {
        return $this->lastQueryCli;
    }

    public function run(string $query): self
    {
        $this->lastQueryCli = mysqli_query($this->connection, $query);
        return $this;
    }

    public function getProductFetchRow(): ProductFetchRow
    {
        return new ProductFetchRow($this->lastQueryCli);
    }

    public function getStoreFetchRow(): StoreFetchRow
    {
        return new StoreFetchRow($this->lastQueryCli);
    }

    public function getGiftFetchRow(): GiftFetchRow
    {
        return new GiftFetchRow($this->lastQueryCli);
    }

}


?>
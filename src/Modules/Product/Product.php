<?php

namespace NanoGas\Modules\Product;

use NanoGas\Modules\Connection\Mysql;

/**
 * Created by PhpStorm.
 * User: sonle
 * Date: 07/03/2021
 * Time: 13:57
 */
class Product extends ProductAbstract
{

    public static function getProducts()
    {
        $query = "select * from product where visible = " . self::STATUS_ACTIVE;
        $mysqlCli = Mysql::getInstance()->getQueryCli();
        $mysqlCli->run($query);
        return $mysqlCli->getProductFetchRow()->fetchRows();
    }
}
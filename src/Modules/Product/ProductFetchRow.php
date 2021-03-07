<?php

namespace NanoGas\Modules\Product;


/**
 * Created by PhpStorm.
 * User: sonle
 * Date: 07/03/2021
 * Time: 13:57
 */
class ProductFetchRow
{
    protected $mysqlQueryCli = null;

    public function __construct($queryCli)
    {
        $this->mysqlQueryCli = $queryCli;
    }

    public function fetchRows()
    {
        $rows = mysqli_fetch_all($this->mysqlQueryCli);
        $products = [];
        foreach ($rows as $row) {
            $product = new ProductDto($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
            array_push($products, $product);
        }
        return $products;
    }


}
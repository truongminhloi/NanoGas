<?php

namespace NanoGas\Modules\Connection;

interface QueryCliInterface
{

    public function run(string $query): MysqlQueryCli;

}

?>
<?php
require __DIR__ . '/autoload.php';

$model = \NanoGas\Modules\Product\Product::getProducts();
var_dump($model);
$model = \NanoGas\Modules\Product\Product::findStore(1);
$model->update('EIF gas', 'Đỏ', 'Thép', 15,290000.00,1,'/images/gallery-img1.jpg');
?>
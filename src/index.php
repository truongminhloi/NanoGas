<?php
require __DIR__ . '/autoload.php';

$model = \NanoGas\Modules\Store\Store::findStore(1);
$model->update('Cửa Hàng Số 1', '268 Lý Thường Kiệt, P.14, Quận 10, TP.HCM', '010-0230-040', 1);
?>
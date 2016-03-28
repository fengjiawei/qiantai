<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/28
 * Time: 10:07
 *describe:进行中的订单
 */
require_once "function.php";
$result = http_post_json("http://101.200.172.223:8080/unite/currentCarList.json", json_encode($_GET));
if (json_decode($result)->result == 'success') {
    echo $result;
}
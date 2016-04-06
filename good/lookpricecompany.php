<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 10:32
 */
require_once "function.php";
//returnJson(U."unite/enterprisePriceList.json",$_GET);
$result = http_post_json(U."unite/enterprisePriceList.json", json_encode($_GET));
if (json_decode($result)->result == 'success') {
    $list = json_encode(json_decode($result)->list);
    echo $list;
}
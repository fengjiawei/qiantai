<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/18
 * Time: 8:42
 * describe：查看个人车主报价(获得货物id和个人车主id)
 */
require_once "function.php";
$result = http_post_json(U."unite/personalPriceList.json",json_encode($_GET));
if (json_decode($result)->result == 'success') {
    echo json_encode(json_decode($result)->list);
}

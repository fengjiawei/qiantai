<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/25
 * Time: 15:13
 * describe:我的车队
 */
require_once "function.php";

$result = http_post_json(U."unite/queryOwnCar.json",json_encode($_GET));
if (json_decode($result)->result == 'success') {
    echo json_encode(json_decode($result)->list);
}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/6
 * Time: 10:26
 * describe:自有车辆列表
 */
require_once "function.php";

$result = http_post_json(U."unite/queryOwnCar.json",json_encode($_GET));
if (json_decode($result)->result == 'success') {
    echo json_encode(json_decode($result)->list);
}
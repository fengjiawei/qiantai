<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/28
 * Time: 10:09
 * describe:接单
 */
require_once "function.php";
$result = http_post_json(U."unite/selectCar.json", json_encode($_POST));
echo $result;
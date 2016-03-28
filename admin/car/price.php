<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/25
 * Time: 15:52
 * describe:我的报价
 */
require_once "function.php";
$result = http_post_json("http://101.200.172.223:8080/unite/newCarList.json",json_encode($_GET));
echo $result;
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 9:52
 * describe:我的回单
 */
require_once "function.php";

$result = http_post_json("http://101.200.172.223:8080/unite/finishedGoodsList.json", json_encode($_GET));
echo $result;
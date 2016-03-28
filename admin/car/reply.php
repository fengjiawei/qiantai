<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/25
 * Time: 16:33
 * describe:拒绝承运
 */
require_once "function.php";
$result = http_post_json("http://101.200.172.223:8080/unite/replyOrder.json", json_encode($_POST));
echo $result;
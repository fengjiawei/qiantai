<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 15:23
 * describe:提交认证消息
 */
require_once "function.php";

$res = http_post_json(U."unite/authTransport.json",json_encode($_POST));
echo $res;
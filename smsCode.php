<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/28
 * Time: 9:23
 * describe:短信验证码
 */
require_once "function.php";
$result = http_post_json(U."user/smsCode.json", json_encode($_POST));
echo $result;
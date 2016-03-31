<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/29
 * Time: 14:59
 * describe:修改密码
 */
require_once "function.php";
$result = http_post_json(U."user/findPassword.json", json_encode($_POST));
echo $result;
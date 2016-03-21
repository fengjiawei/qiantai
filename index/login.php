<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/9
 * Time: 13:36
 */

require_once "function.php";
//echo json_encode($_POST);$_POST
//returnJson("http://101.200.172.223:8080/user/newLogin.json",$_POST);

$res = http_post_json("http://101.200.172.223:8080/user/newLogin.json",json_encode($_POST));
echo $res;



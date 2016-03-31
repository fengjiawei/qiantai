<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/30
 * Time: 9:57
 * describe:修改密码
 */
require_once "function.php";
returnJson(U."user/password.json",$_POST);
echo json_encode($_POST);
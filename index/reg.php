<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/9
 * Time: 14:26
 */
require_once "function.php";
//echo json_encode($_POST);$_POST
returnJson("http://101.200.172.223:8080/user/newRegister.json",$_POST);
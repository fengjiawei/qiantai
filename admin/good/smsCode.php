<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 10:14
 * describe:短信验证码
 */
require_once "function.php";
returnJson("http://101.200.172.223:8080/user/smsCode.json",$_POST);
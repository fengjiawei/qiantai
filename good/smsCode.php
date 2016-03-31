<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 10:14
 * describe:短信验证码
 */
require_once "function.php";
returnJson(U."user/smsCode.json",$_POST);
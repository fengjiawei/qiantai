<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/14
 * Time: 9:04
 * describe:重置认证
 */
require_once "function.php";
returnJson("http://101.200.172.223:8080/unite/resetAuth.json",$_POST);

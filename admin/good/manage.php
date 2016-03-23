<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 10:00
 * describe:账号管理
 */
require_once "function.php";
returnJson("http://101.200.172.223:8080/unite/accountInformation.json",$_POST);
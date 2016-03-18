<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 9:57
 * describe:编辑联系人信息
 * */
require_once "function.php";
returnJson("http://101.200.172.223:8080/updateContactInfo.json",$_POST);
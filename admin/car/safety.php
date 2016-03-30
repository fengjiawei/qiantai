<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/29
 * Time: 15:04
 * describe:安全设置
 */
require_once 'function.php';
returnJson('http://101.200.172.223:8080/unite/securityInformation.json',$_POST);
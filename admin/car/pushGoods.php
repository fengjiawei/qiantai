<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/29
 * Time: 16:38
 * describe:推送货源
 */
require_once "function.php";
returnJson('http://101.200.172.223:8080/message/pushGoodsMessage.json',$_POST);
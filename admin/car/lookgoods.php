<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 11:12
 * describe:查看货源
 */
require_once "function.php";

returnJson("http://101.200.172.223:8080/unite/queryPublicGoods.json",$_GET);
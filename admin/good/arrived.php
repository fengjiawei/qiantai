<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 9:42
 * describe:送达
 */
require_once "function.php";
returnJson("http://101.200.172.223:8080/unite/arrivedGoods.json",$_POST);
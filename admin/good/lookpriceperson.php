<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/18
 * Time: 8:42
 * describe：查看个人车主报价(获得货物id和个人车主id)
 */
require_once "function.php";
returnJson("http://101.200.172.223:8080/unite/personalPriceList.json",$_POST);
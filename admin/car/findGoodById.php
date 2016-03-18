<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 11:10
 * describe:通过id查看货源详情
 */
require_once "function.php";
returnJson("http://101.200.172.223:8080/unite/queryGoodsInfo.json",$_POST);
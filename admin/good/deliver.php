<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 9:41
 * describe:发货
 */
require_once "function.php";
returnJson("http://101.200.172.223:8080/unite/deliveryGoods.json",$_POST);
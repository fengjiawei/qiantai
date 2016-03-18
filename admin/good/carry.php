<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 8:44
 * * describe:让它运，货主选定车主
 */
require_once "function.php";
returnJson("http://101.200.172.223:8080/unite/orderCar.json",$_POST);
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/29
 * Time: 16:43
 * describe:订车
 */
require_once "function.php";
returnJson('http://101.200.172.223:8080/rental/rentalCar.json',$_POST);
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/29
 * Time: 16:37
 * describe:查看车源
 */
require_once "function.php";
returnJson("http://101.200.172.223:8080/unite/queryPublicCar.json", $_GET);
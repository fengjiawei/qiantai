<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/16
 * Time: 15:20
 * descripe:我的货源
 */
require_once "function.php";

returnJson("http://101.200.172.223:8080/unite/newGoodsList.json",$_GET);
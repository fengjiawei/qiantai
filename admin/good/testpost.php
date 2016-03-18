<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 9:46
 * describe:订单跟踪
 */
require_once "function.php";
returnJson("http://101.200.172.223:8080/goods/queryGoodsTrack.json",$_POST);
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/29
 * Time: 16:26
 * describe:推送货源的抢单报价
 */
require_once 'function.php';
returnJson("http://101.200.172.223:8080/message/priceGoodsMessage.json",$_POST);
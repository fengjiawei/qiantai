<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 10:31
 * describe:推送货源
 */
require_once "function.php";
returnJson(U."message/pushGoodsMessage.json",$_POST);
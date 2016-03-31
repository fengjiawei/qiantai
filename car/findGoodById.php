<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 11:10
 * describe:通过id查看货源详情
 */
require_once "function.php";
returnJson(U."unite/queryGoodsInfo.json",$_POST);
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/29
 * Time: 16:38
 * describe:推送货源
 */
require_once "function.php";
returnJson(U.'message/pushGoodsMessage.json',$_POST);
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 9:01
 * describe:重新报价
 */
require_once "function.php";
returnJson("http://101.200.172.223:8080/unite/rejectPrice.json",$_POST);
echo json_encode($_POST);


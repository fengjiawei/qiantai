<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 9:57
 * describe:编辑联系人信息
 * */
require_once "function.php";
$result=returnJson(U."unite/companyAuthentication.json",$_POST);
if (json_decode($result)->result == 'success') {
//            //将子对象转化为数组
    $list = json_decode($result, true);
    $this->assign('list', $list);
}
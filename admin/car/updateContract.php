<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/29
 * Time: 15:22
 * describe:编辑联系人信息
 */
require_once "function.php";
$result=returnJson(U."unite/companyAuthentication.json",$_POST);
if (json_decode($result)->result == 'success') {
//            //将子对象转化为数组
    $list = json_decode($result, true);
    $this->assign('list', $list);
}
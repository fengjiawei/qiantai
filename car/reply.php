<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/25
 * Time: 16:33
 * describe:拒绝承运
 */
require_once "function.php";
$_POST['reply'] = 'no';
returnJson(U."unite/replyOrder.json",$_POST);
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/12
 * Time: 10:37
 * describe:取消订车
 */
require_once "function.php";
returnJson(U."rental/abortRental.json",$_POST);
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 15:09
 * describe：抢单报价
 */
require_once "function.php";

$res = http_post_json("http://101.200.172.223:8080/unite/authTransport.json",json_encode($_POST));
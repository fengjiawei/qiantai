<?php
/**
 * Created by IntelliJ IDEA.
 * User: fengjiawei
 * Date: 16/3/23
 * Time: 上午9:14
 * 安全设置
 */
require_once 'function.php';

returnJson('http://101.200.172.223:8080/unite/securityInformation.json',$_POST);
<?php
/**
 * Created by IntelliJ IDEA.
 * User: fengjiawei
 * Date: 16/3/29
 * Time: 下午1:48
 */
//header('Content-type:image/jpeg');
$con = new mysqli("101.200.172.223:3306", "root", "logistics_mysql", "testdb");

$sql = "select * from uesd_car";
$str = $con->query($sql);
while($row1=$str->fetch_assoc()){
//    $arr[] = $row1;
//    echo json_encode($row1);
//    print_r(json_encode($row1));

     $row1['carimg']=base64_encode($row1['carimg']);
    $arr[] = $row1;
}
$con->close();
echo json_encode($arr);


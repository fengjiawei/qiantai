<?php
/**
 * Created by IntelliJ IDEA.
 * User: fengjiawei
 * Date: 16/3/25
 * Time: 下午4:17
 */

    $con = new mysqli("101.200.172.223:3306", "root", "logistics_mysql", "testdb");
$name = $_FILES['carimg']['name'];
$carname = $_POST['carname'];
$carprice = $_POST['carprice'];
$type = $_FILES['carimg']['type'];
if ($name) {
    $carimg =  addslashes(file_get_contents($_FILES['carimg']['tmp_name']));
//    move_uploaded_file($_FILES["carimg"]["tmp_name"],
//        "upload/" . $carimg);

    $sql = "INSERT INTO uesd_car (carname, carprice, carimg,imgtype) VALUES ('$carname','$carprice','$carimg','$type')";
    if ($con->query($sql) === TRUE) {
        echo json_encode(array('result'=>'success'));
    } else {
        echo json_encode(array('result'=>''.$con->error));;
    }
//
    $con->close();
}


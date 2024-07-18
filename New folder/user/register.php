<?php
include '../connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql =  "INSERT INTO tb_user SET
        name = '$name',
        email = '$email',
        password = '$password'
        ";

$result = $connect->query($sql);

if($result) {
    echo json_encode(array("success"=>true));
} else {
    echo json_encode(array("success"=>false));
}
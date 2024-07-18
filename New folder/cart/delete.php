<?php
include '../connection.php';

$idCart = $_POST['id_cart'];

$sql = "DELETE FROM tb_cart
        WHERE
        id_cart = '$idCart'
        ";

$result = $connect->query($sql);
if($result) {
    echo json_encode(array("success"=>true));
} else {
    echo json_encode(array("success"=>false));
}
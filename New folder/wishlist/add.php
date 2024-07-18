<?php
include '../connection.php';

$idUser = $_POST['id_user'];
$idShoes = $_POST['id_shoes'];

$sql =  "INSERT INTO tb_wishlist
        SET
        id_user = '$idUser',
        id_shoes = '$idShoes'
        ";

$result = $connect->query($sql);
if($result) {
    echo json_encode(array("success"=>true));
} else {
    echo json_encode(array("success"=>false));
}
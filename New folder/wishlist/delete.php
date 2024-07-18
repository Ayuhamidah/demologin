<?php
include '../connection.php';

$idUser = $_POST['id_user'];
$idShoes = $_POST['id_shoes'];

$sql = "DELETE FROM tb_wishlist
        WHERE
        id_user = '$idUser' AND
        id_shoes = '$idShoes'
        ";

$result = $connect->query($sql);
if($result) {
    echo json_encode(array("success"=>true));
} else {
    echo json_encode(array("success"=>false));
}
<?php
include '../connection.php';

$idUser = $_POST['id_user'];
$idShoes = $_POST['id_shoes'];

$sql = "SELECT * FROM tb_wishlist
        WHERE
        id_user = '$idUser' AND
        id_shoes = '$idShoes'
        ";

$result = $connect->query($sql);

if($result->num_rows > 0) {
    echo json_encode(array("exist"=>true));
} else {
    echo json_encode(array("exist"=>false));
}
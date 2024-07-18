<?php
include '../connection.php';

$idUser = $_POST['id_user'];

$sql = "SELECT * FROM tb_wishlist
        CROSS JOIN tb_shoes
        WHERE
        tb_wishlist.id_user = '$idUser' AND
        tb_wishlist.id_shoes = tb_shoes.id_shoes
        ";

$result = $connect->query($sql);

if($result->num_rows > 0) {    
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode(array(
        "success"=>true,
        "data"=> $data,
    ));
} else {
    echo json_encode(array(
        "success"=>false,
    ));
}
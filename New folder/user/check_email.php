<?php
include '../connection.php';

$email = $_POST['email'];

$sql = "SELECT * FROM tb_user
        WHERE
        email='$email'
        ";

$result = $connect->query($sql);

if($result->num_rows > 0) {
    echo json_encode(array("exist"=>true));
} else {
    echo json_encode(array("exist"=>false));
}
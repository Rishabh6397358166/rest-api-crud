<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: Put');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Method, Authorization, X-Requested-with');

include "config.php";

// Check if data is received
$data = json_decode(file_get_contents("php://input"), true);
$id=$data['id'];
$phone = $data['phone'];
$name = $data['name'];
$email = $data['email'];
$address = $data['address'];
$price = $data['price'];
$url = $data['url'];

$sql = "UPDATE `users` SET `phone`='{$phone}',`name`='{$name}',`email`='{$email}',`address`='{$address}'
,`price`={$price},`url`='{$url}' WHERE id={$id}";

if (mysqli_query($con, $sql)) {
    echo json_encode(array("message" => 'user record updated', 'status' => true));
} else {
    echo json_encode(array("message" => 'user record not updated', 'status' => false));
}


?>

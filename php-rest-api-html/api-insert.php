<?php


// header('Content-Type: application/json');
// header('Access-Control-Allow-Origin: *');
// header('Access-control-Allow-Method:POST');
// header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,
// Content-Type,Access-control-Allow-Method,Authorization,X-Requested-with');
// include "config.php";

// // Check if data is received
// $data = json_decode(file_get_contents("php://input"), true);
// $phone=$data['phone'];
// $name=$data['name'];
// $email=$data['email'];
// $address=$data['address'];
// $price=$data['price'];
// $url=$data['url'];

// $sql="INSERT INTO `users`( `phone`, `name`, `email`, `address`, `price`, `url`) VALUES ('{$phone}','{$name}','{$email}',
// '{$address}',{$price},'{$url}')";


// if (mysqli_query($con,$sql)) {
  
//     echo json_encode(array("message" => 'user record inserted', 'status' => true));
    
//     } else {
//         echo json_encode(array("message" => 'user record not inserted', 'status' => false));
//     }

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Method, Authorization, X-Requested-with');

include "config.php";

// Check if data is received
$data = json_decode(file_get_contents("php://input"), true);
$phone = $data['phone'];
$name = $data['name'];
$email = $data['email'];
$address = $data['address'];
$price = $data['price'];
$url = $data['url'];

$sql = "INSERT INTO `users`(`phone`, `name`, `email`, `address`, `price`, `url`) VALUES ('{$phone}', '{$name}', '{$email}', '{$address}', {$price}, '{$url}')";

if (mysqli_query($con, $sql)) {
    echo json_encode(array("message" => 'user record inserted', 'status' => true));
} else {
    echo json_encode(array("message" => 'user record not inserted', 'status' => false));
}
?>



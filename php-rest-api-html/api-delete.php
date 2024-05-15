<?php
include "config.php";
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Method, Authorization, X-Requested-with');



// Check if data is received
$data = json_decode(file_get_contents("php://input"), true);

$user_id = $data['id'];





    
    $sql = "delete FROM users WHERE id={$user_id}";
 
    if (mysqli_query($con, $sql)) {
        echo json_encode(array("message" => 'Student record deleted success fully', 'status' => true));
    } else {
        echo json_encode(array("message" => 'Student record not deleted', 'status' => false));
    }
 
?>

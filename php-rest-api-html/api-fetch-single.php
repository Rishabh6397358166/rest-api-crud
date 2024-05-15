<?php
// header('Content-Type:application/json');
// header('Acess-Control-Allow-Origin:*');
// include "config.php";
// $data=json_decode(file_get_contents("php://input"),true);//conerted json into array
// $user_id=$data['id'];
// $sql="select * from users where id={$user_id}";
// $result=mysqli_query($con,$sql) or die("sql query failed");
// if(mysqli_num_rows($result)>0){
// $output=mysqli_fetch_assoc($result);
// echo json_encode($output);
// }
// else{
//     echo json_decode(array("message"=>'no record found','status'=>false));
// }


header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include "config.php";

// Check if data is received
$data = json_decode(file_get_contents("php://input"), true);

if ($data && isset($data['id'])) {
    $user_id = $data['id'];
    $sql = "SELECT * FROM users WHERE id={$user_id}";
    $result = mysqli_query($con, $sql) or die("SQL query failed");

    if (mysqli_num_rows($result) > 0) {
        $output = mysqli_fetch_assoc($result);
        echo json_encode($output);
    } else {
        echo json_encode(array("message" => 'No record found', 'status' => false));
    }
} else {
    echo json_encode(array("message" => 'Invalid input data', 'status' => false));
}
?>



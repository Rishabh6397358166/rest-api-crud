<?php
// header('Content-Type:application/json');
// header('Acess-Control-Allow-Origin:*');
// include "config.php";
// $sql="select * from users";
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

$sql = "SELECT * FROM users";
$result = mysqli_query($con, $sql) or die("SQL query failed");

if (mysqli_num_rows($result) > 0) {
    $output = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }
    echo json_encode($output);
} else {
    echo json_encode(array("message" => 'No record found', 'status' => false));
}


?>

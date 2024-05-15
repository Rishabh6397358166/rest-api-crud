
<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include "config.php";

// Check if data is received
// $data = json_decode(file_get_contents("php://input"), true);

// $user_search = $data['search'];

$user_search=isset($_GET['search'])?$_GET['search']:die();


$sql = "SELECT * FROM users WHERE name LIKE '%{$user_search}%'";
$result = mysqli_query($con, $sql) or die("SQL query failed");

$output = array(); // Initialize an array to hold all the results

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row; // Append each row to the output array
    }
    
    echo json_encode($output);
} else {
    echo json_encode(array("message" => 'No search found', 'status' => false));
}
?>



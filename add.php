<?php
include_once './includes/config.php';
$result = array();
$result['error'] = 0;

$id = trim($_REQUEST['sid']);
$name = trim($_REQUEST['name']);
$city = trim($_REQUEST['city']);
$year = trim($_REQUEST['year']);

//create insert query
$sql = "INSERT INTO `employee` (`id`, `name`, `city`, `year`) VALUES ('$id', '$name', '$city', '$year')";
$db = mysqli_query($conn, $sql);
if (!$db) {
    $result['error'] = 1; //if error
    $result['errormsg'] = "Connection Problem !";
    echo json_encode($result);
    return;
}
echo json_encode($result); //if no error & successfully inserted

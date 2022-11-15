<?php
include_once './includes/config.php';
$result = array();
$result['error'] = 0;

$uid = trim($_REQUEST['uid']);
$uname = trim($_REQUEST['uname']);


//create update query
$sql = "UPDATE `employee` SET `name` = '$uname' WHERE `id` LIKE '$uid'";
$db = mysqli_query($conn, $sql);
if (!$db) {
    $result['error'] = 1; //if error
    $result['errormsg'] = "Connection Problem !";
    echo json_encode($result);
    return;
}
echo json_encode($result); //if no error & successfully updated

<?php
include_once './includes/config.php';
$result = array();
$result['error'] = 0;

$did = trim($_REQUEST['did']);



//create delete query
$sql = "DELETE FROM `employee` WHERE `id` LIKE '$did'";
$db = mysqli_query($conn, $sql);
if (!$db) {
    $result['error'] = 1; //if error
    $result['errormsg'] = "Connection Problem !";
    echo json_encode($result);
    return;
}
echo json_encode($result); //if no error & successfully deleted

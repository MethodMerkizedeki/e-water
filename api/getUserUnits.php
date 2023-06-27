<?php
header('Content-Type: application/json; charset=utf-8');
include "../includes/functions.php";

$data_array = array();

if (file_get_contents('php://input') == "") {
    $stdClass = new stdClass();
    $stdClass->status_code = 400;
    array_push($data_array, $stdClass);
} else {
    $data = json_decode(file_get_contents('php://input'), true);

    $userId = test_input($data["UserId"], $connection);

    $query = "SELECT * FROM users WHERE `user_id` = '{$userId}'";
    $select_user = mysqli_query($connection, $query);

    if (!$row = mysqli_fetch_assoc($select_user)) {
        $stdClass = new stdClass();
        $stdClass->status_code = 400;
        array_push($data_array, $stdClass);
    } else {
        $stdClass = new stdClass();
        $stdClass->units = floatval($row['units']);
        // $stdClass->status_code = 200;
        array_push($data_array, $stdClass);
    }
}
$data_array = json_encode($data_array);
$data_array = str_replace('[', '', $data_array);
$data_array = str_replace(']', '', $data_array);
print_r($data_array);

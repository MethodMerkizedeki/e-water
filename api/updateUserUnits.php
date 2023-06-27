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

    $userId = test_input($data["userId"], $connection);
    $usedUnits = test_input($data["units"], $connection);

    $select_user_query = "SELECT * FROM users WHERE `user_id` = '{$userId}'";
    $select_user = mysqli_query($connection, $select_user_query);

    if (!$row = mysqli_fetch_assoc($select_user)) {
        $stdClass = new stdClass();
        $stdClass->result = "user does not exist";
        $stdClass->status_code = 400;
        array_push($data_array, $stdClass);
    } else {
        $units = $row['units'];
        $new_units = $units - $usedUnits;
        $update_user_units_query = "UPDATE users SET ";
        $update_user_units_query .= "units = '{$new_units}' ";
        $update_user_units_query .= "WHERE user_id = '{$userId}'";

        $update_user_units = mysqli_query($connection, $update_user_units_query);
        if (!$update_user_units) {
            $stdClass = new stdClass();
            $stdClass->status_code = 400;
            array_push($data_array, $stdClass);
        } else {
            $stdClass = new stdClass();
            $stdClass->units = $new_units;
            $stdClass->status_code = 200;
            array_push($data_array, $stdClass);
        }
    }
}


$data_array = json_encode($data_array);
$data_array = str_replace('[', '', $data_array);
$data_array = str_replace(']', '', $data_array);
print_r($data_array);

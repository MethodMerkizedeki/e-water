<?php
header('Content-Type: application/json; charset=utf-8');
include "../includes/functions.php";

$data_array = array();

$current_date = date("Y-m-d");


if (file_get_contents('php://input') == "") {
    $stdClass = new stdClass();
    $stdClass->status_code = 400;
    array_push($data_array, $stdClass);
} else {
    $data = json_decode(file_get_contents('php://input'), true);
    $user_id = test_input($data["userId"], $connection);
    $usage = floatval(test_input($data["usage"], $connection));

    $select_user_query = "SELECT * FROM users WHERE `user_id` = '{$user_id}'";
    $select_user = mysqli_query($connection, $select_user_query);

    if (!$row = mysqli_fetch_assoc($select_user)) {
        $stdClass = new stdClass();
        $stdClass->result = "user does not exist";
        $stdClass->status_code = 400;
        array_push($data_array, $stdClass);
    } else {
        $current_units = floatval($row['units']);
        $check_current_day_usage_query = "SELECT * FROM water_usage WHERE `user_id` = '{$user_id}' AND `date` = '{$current_date}'";
        $check_current_day_usage = mysqli_query($connection, $check_current_day_usage_query);

        if (mysqli_num_rows($check_current_day_usage) == 0) {
            $insert_new_day_usage_query = "INSERT INTO water_usage ";
            $insert_new_day_usage_query .= "(user_id, water_usage, date)";
            $insert_new_day_usage_query .= "VALUES('{$user_id}', '{$usage}', '{$current_date}')";
            $insert_new_day_usage = mysqli_query($connection, $insert_new_day_usage_query);

            updateUserUnits($user_id, $current_units, $usage);
        } else {
            $row = mysqli_fetch_assoc($check_current_day_usage);
            $today_water_usage = floatval($row['water_usage']);
            $new_water_usage = $usage + $today_water_usage;
            $new_water_usage = round($new_water_usage, 1);

            $upate_user_current_day_usage_query = "UPDATE water_usage SET";
            $upate_user_current_day_usage_query .= "`water_usage` = '{$new_water_usage}'";
            $upate_user_current_day_usage_query .= "WHERE `user_id` = '{$user_id}' AND `date` = '{$current_date}'";
            $upate_user_current_day_usage = mysqli_query($connection, $upate_user_current_day_usage_query);

            updateUserUnits($user_id, $current_units, $usage);

            $stdClass = new stdClass();
            $stdClass->todayUsage = $new_water_usage;
            $stdClass->status_code = 200;
            array_push($data_array, $stdClass);
        }
    }
}


function updateUserUnits($user_id, $current_units, $usage)
{
    global $connection;
    $new_user_units = $current_units - $usage;
    $update_user_units_query = "UPDATE users SET ";
    $update_user_units_query .= "units = '{$new_user_units}' ";
    $update_user_units_query .= "WHERE user_id = '{$user_id}'";


    $update_user_units = mysqli_query($connection, $update_user_units_query);
}

$data_array = json_encode($data_array);
$data_array = str_replace('[', '', $data_array);
$data_array = str_replace(']', '', $data_array);
print_r($data_array);

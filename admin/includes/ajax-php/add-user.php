<?php
// Header File
require '../../../includes/functions.php';

$data_array = array();
if (isset($_POST['user-full-name'])) {
    $user_full_name = test_input($_POST['user-full-name'], $connection);
    $user_email = test_input($_POST['user-email'], $connection);
    $user_phone = test_input($_POST['user-phone-number'], $connection);


    $user_id = generateuserId(9);
    $user_added_time = time();
    $user_added_date = date("d-M-Y", $user_added_time);

    $user_password = generateUserPassword($user_email);

    $add_user_query = "INSERT INTO users(user_id, user_full_name, user_phone, user_email, user_password, units, session_id, last_access, user_added_time)";
    $add_user_query .= "VALUES('{$user_id}', '{$user_full_name}', '{$user_phone}', '{$user_email}', '{$user_password}', '0', '{$user_id}', '{$user_added_time}', '{$user_added_time}')";

    $add_user = mysqli_query($connection, $add_user_query);
    if (!$add_user) {
        // Make Json data
        $stdClass = new stdClass();
        $stdClass->result = "fail";
        array_push($data_array, $stdClass);
    } else {
        // Make Json data
        $stdClass = new stdClass();
        $stdClass->result = "success";
        array_push($data_array, $stdClass);
    }
}

// Unique payment id Generator
function generateuserId($length)
{
    $characters = '123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateUserPassword($user_email) {
    // Encrypting the admin password
    $hash = "$2a$10$";
    $string = "thisiswatersuppply";
    $hashString = $hash . $string;
    $encrypted_password = crypt("12345678", $hashString);
    $encrypted_password = md5($user_email . $encrypted_password);
    return  $encrypted_password;
}

$data_array = json_encode($data_array);
$data_array = str_replace('[', '', $data_array);
$data_array = str_replace(']', '', $data_array);
print_r($data_array);

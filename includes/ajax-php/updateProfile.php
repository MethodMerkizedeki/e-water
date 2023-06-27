<?php require_once "../functions.php"; ?>

<?php
// data array
$data_array = array();

if (isset($_POST['password'])) {
    $user_id = test_input($_POST['user-id'], $connection);
    $user_email = test_input($_POST['user-email'], $connection);
    $user_passsword = test_input($_POST['password'], $connection);
    $confirm_password = test_input($_POST['confirm-password'], $connection);

    if ($user_passsword != "") {
        if ($user_passsword === $confirm_password) {
            updateProfile($user_passsword);
        } else {
            // Make Json data
            $stdClass = new stdClass();
            $stdClass->result = "not_same";
            array_push($data_array, $stdClass);
        }
    } else {
        // Make Json data
        $stdClass = new stdClass();
        $stdClass->result = "fail";
        array_push($data_array, $stdClass);
    }
}

function updateProfile($user_passsword)
{
    global $connection;
    global $data_array;
    global $user_id;
    global $user_email;

    // Encrypting the user password
    $hash = "$2a$10$";
    $string = "thisiswatersuppplyproject";  
    $hashString = $hash . $string;
    $encrypted_password = crypt($user_passsword, $hashString);
    $encrypted_password = md5($user_email . $encrypted_password);

    $query = "UPDATE users SET ";
    $query .= "user_password = '{$encrypted_password}'";
    $query .= "WHERE user_id = '{$user_id}' ";

    $update_profile = mysqli_query($connection, $query);
    if (!$update_profile) {
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


$data_array = json_encode($data_array);
$data_array = str_replace('[', '', $data_array);
$data_array = str_replace(']', '', $data_array);
print_r($data_array);
?>      
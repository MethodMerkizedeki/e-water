<?php require_once "../functions.php"; ?>

<?php
// data array
$data_array = array();

if (isset($_POST['password'])) {
    $admin_id = test_input($_POST['admin-id'], $connection);
    $admin_email = test_input($_POST['admin-email'], $connection);
    $admin_passsword = test_input($_POST['password'], $connection);
    $confirm_password = test_input($_POST['confirm-password'], $connection);

    if ($admin_passsword != "") {
        if ($admin_passsword === $confirm_password) {
            updateProfile($admin_passsword);
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

function updateProfile($admin_passsword)
{
    global $connection;
    global $data_array;
    global $admin_id;
    global $admin_email;

    // Encrypting the admin password
    $hash = "$2a$10$";
    $string = "thisistithingchurchproject";
    $hashString = $hash . $string;
    $encrypted_password = crypt($admin_passsword, $hashString);
    $encrypted_password = md5($admin_email . $encrypted_password);

    $query = "UPDATE admins SET ";
    $query .= "admin_password = '{$encrypted_password}'";
    $query .= "WHERE admin_id = '{$admin_id}' ";

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
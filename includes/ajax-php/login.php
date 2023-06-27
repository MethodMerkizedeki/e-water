<?php ob_start(); ?>
<?php session_start(); ?>

<?php include "../functions.php"; ?>
<?php
$data_array = array();
date_default_timezone_set('Africa/Nairobi');

if (isset($_POST['email'])) {
    $user_email = test_input($_POST['email'], $connection);
    $user_passsword = test_input($_POST['password'], $connection);

    $query = "SELECT * FROM users WHERE user_email= '{$user_email}' ";
    $select_user_query = mysqli_query($connection, $query);

    if (!$select_user_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    }

    if (!$row = mysqli_fetch_array($select_user_query)) {
        // Make Json data
        $stdClass = new stdClass();
        $stdClass->result = "fail";
        array_push($data_array, $stdClass);
    } else {
        $db_user_email = $row['user_email'];
        $db_user_password = $row['user_password'];

        // Encrypting the user password
        $hash = "$2a$10$";
        $string = "thisiswaterSuppply";
        $hashString = $hash . $string;
        $encrypted_password = crypt($user_passsword, $hashString);
        $encrypted_password = md5($user_email . $encrypted_password);

        if ($user_email == $db_user_email && $encrypted_password == $db_user_password) {
            // regenerate session
            session_regenerate_id();
            $sesId = session_id();
            $last_access = time();

            $query = "UPDATE users SET ";
            $query .= "session_id = '{$sesId}', ";
            $query .= "last_access = '{$last_access}'";
            $query .= "WHERE user_email = '{$user_email}' ";

            $update_user_query = mysqli_query($connection, $query);

            // Json success response
            $stdClass = new stdClass();
            $stdClass->result = "success";
            array_push($data_array, $stdClass);
        } else {
            // Make Json data
            $stdClass = new stdClass();
            $stdClass->result = "fail";
            array_push($data_array, $stdClass);
        }
    }
}

$data_array = json_encode($data_array);
$data_array = str_replace('[', '', $data_array);
$data_array = str_replace(']', '', $data_array);
print_r($data_array);
?>
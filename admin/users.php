<?php
require 'utils.php';
?>


<?php
if (isset($_GET['source'])) {
    $source = test_input($_GET['source'], $connection);
} else {
    $source = '';
}

switch ($source) {
    case 'add_user':
        include "includes/users/add-user.php";
        break;


    case 'edit':
        include "includes/users/edit-user.php";
        break;

    default:
        include "includes/users/view-all-users.php";
        break;
}
?>

<?= footer(); ?>
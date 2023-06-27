<?php
ob_start();
session_start();

date_default_timezone_set('Africa/Nairobi');
require_once "includes/functions.php";

function head($title)
{
    global $connection;
    // Check login session
    $sesId = session_id();
    $query = "SELECT * FROM users WHERE session_id = '{$sesId}' ";
    $select_session_query = mysqli_query($connection, $query);

    if (!$row = mysqli_fetch_array($select_session_query)) {
        header("Location: ./login.php");
    } else {
        $last_access = $row['last_access'];
        
        if (time() - $last_access > 86400) {
            header("Location: ./login.php");
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title; ?></title>
    </head>

    <body>

    <?php
    require_once 'includes/header.php';
    require_once "includes/navigation.php";
    return ob_get_clean();
}

function footer()
{
    require_once 'includes/footer.php';
    ?>
        <script src="assets/js/instantclick.min.js"></script>
        <script data-no-instant>
            InstantClick.init();
        </script>
    </body>

    </html>
<?php
    return ob_get_clean();
}
?>
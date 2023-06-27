<?php
date_default_timezone_set('Africa/Nairobi');
require_once "../includes/functions.php";
function head($title)
{
    ob_start(); ?>
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
    ob_start();
    require_once 'includes/footer.php';
    ?>
        <script src="../assets/js/instantclick.min.js"></script>
        <script data-no-instant>
            InstantClick.init();
        </script>
    </body>

    </html>
<?php
    return ob_get_clean();
}
?>
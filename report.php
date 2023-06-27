<?php
// Header File
require 'utils.php';
echo head('Report');
$sesId = session_id();
$select_user_query = "SELECT * FROM users WHERE session_id = '{$sesId}' ";
$select_user = mysqli_query($connection, $select_user_query);

$row = mysqli_fetch_array($select_user);
$user_id = $row['user_id'];
?>

<!--start wrapper-->
<div class="table-responsive mt-2">
    <h3>Water Usage Report</h3>
    <table id="" class="table align-middle">
        <thead class="table-secondary ">
            <tr>
                <th>Date</th>
                <th class="text-center">Usage (L)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $user_water_usage_query = "SELECT * FROM water_usage WHERE `user_id` = '{$user_id}'";
            $select_user_water_usage = mysqli_query($connection, $user_water_usage_query);

            if (mysqli_num_rows($select_user_water_usage) != 0) {
                while ($row = mysqli_fetch_assoc($select_user_water_usage)) {
                    $date = $row["date"];
                    $usage = $row["water_usage"];
            ?>
                    <tr>
                        <td><?= $date; ?></td>
                        <td class="text-center"><?= round($usage, 1); ?></td>
                    </tr>
            <?php
                }
            }
            ?>
    </table>
</div>
<?= footer(); ?>
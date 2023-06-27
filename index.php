<?php
// Header File
require 'utils.php';

echo head('Home');

$sesId = session_id();
$get_user_info_query = "SELECT * FROM users WHERE session_id = '{$sesId}' ";
$select_user = mysqli_query($connection, $get_user_info_query);

$user_row = mysqli_fetch_array($select_user);
$user_units = $user_row['units'];
$user_units = round($user_units, 1);

$user_id = $user_row['user_id'];


// Get user overall usage

$user_total_usage = 0.0;
$user_total_usage = round($user_total_usage, 1);

$get_user_usage_query = "SELECT * FROM water_usage WHERE `user_id` = '{$user_id}' ";
$get_all_usage = mysqli_query($connection, $get_user_usage_query);

while ($row = mysqli_fetch_assoc($get_all_usage)) {
    $usage = $row['water_usage'];
    $user_total_usage += $usage;
}

?>



<!--start content-->
<!-- <main class="page-content"> -->
<div class="card ">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-4">Dashboard</h5>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4">
            <div class="col">
                <div class="card radius-10 border-0 border-start border-tiffany border-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1 text-white" style="font-weight: bold;">Units</p>
                                <div style="display: flex;">
                                    <p class="mb-1 text-white" id=""><?= $user_units; ?></p>
                                </div>
                            </div>
                            <div class="ms-auto widget-icon bg-tiffany text-white">
                                <i class="bx bx-droplet"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card radius-10 border-0 border-start border-success border-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1 text-white" style="font-weight: bold;">Overall Usage</p>
                                <div style="display: flex;">
                                    <p class="mb-1 text-white" id=""><?= $user_total_usage; ?></p>
                                </div>
                            </div>
                            <div class="ms-auto widget-icon bg-success text-white">
                                <i class="bx bx-health"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card radius-10 border-0 border-start border-success border-3">
                    <div class="card-body">
                        <a href="payment.php">
                            <button class="btn btn-primary">Make Payment</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </main> -->


<?php
// Footer File
echo footer();
?>
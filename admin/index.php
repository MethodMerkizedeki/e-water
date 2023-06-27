<?php
require 'utils.php';

echo head('Admin Dashboard');
?>

<?php
//  Get users count
$query = "SELECT COUNT(*) AS users_count FROM users";
$select_users = mysqli_query($connection, $query);
$users_count_fetch = mysqli_fetch_array($select_users);
$users_count = $users_count_fetch['users_count'];

?>

<!--start wrapper-->
<div class="wrapper">
    <!--start content-->
    <main class="page-content">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2">
            <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body p-2">
                        <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                            <div class="w-50 p-3 bg-light-primary">
                                <a href="users.php">
                                    <p>Total Users</p>
                                    <h4 class="text-primary"><?= $users_count;?></h4>
                                </a>
                            </div>
                            <div class="w-50 bg-primary p-3">
                                <p class="mb-3 text-white">+ 16% <i class="bi bi-arrow-up"></i></p>
                                <div id="chart1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col userUser">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body p-2">
                        <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                            <div class="w-50 p-3 bg-light-primary">
                                <a href="users.php">
                                    <p>Total Payments</p>
                                    <h4 class="text-primary">1233</h4>
                                </a>
                            </div>
                            <div class="w-50 bg-primary p-3">
                                <p class="mb-3 text-white">- 3.4% <i class="bi bi-arrow-down"></i></p>
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


<?= footer(); ?>
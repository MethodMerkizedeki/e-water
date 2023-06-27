<?php require 'utils.php'; ?>
<?= head('Add Member'); ?>

<?php
$query = "SELECT * FROM admin LIMIT 1 ";
$select_user_query = mysqli_query($connection, $query);

if (!$select_user_query) {
    die("QUERY FAILED" . mysqli_error($connection));
}

while ($row = mysqli_fetch_array($select_user_query)) {
    $admin_email = $row['admin_email'];
    $admin_password = $row['admin_password'];
    $admin_full_name = $row['admin_full_name'];
}

?>
<?php include "includes/navigation.php" ?>
<!--start wrapper-->
<div class="wrapper">
    <!--start top header-->
    <!--start content-->
    <main class="page-content">
        <div class="profile-cover bg-dark"></div>
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="mb-0">My Account</h5>
                        <hr>
                        <div class="card shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0">USER INFORMATION</h6>
                            </div>
                            <div class="card-body">
                                <form class="row g-3">
                                    <div class="col-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" value="<?= $admin_email; ?>" disabled>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" value="<?= $admin_full_name; ?>" disabled>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0">PASSWORD CHANGE</h6>
                            </div>
                            <div class="card-body">
                                <form id="updateProfileForm" class="row g-3" method="POST">
                                    <div class="col-6">
                                        <label class="form-label">New Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" id="adminPasswordInput" name="password" class="form-control">
                                            <span class="input-group-text" id="basic-addon1"><i id="hide-pass-icon" class="lni lni-eye" style="color: black;" onclick="showPassword()"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Confirm Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" id="confirmPasswordInput" name="confirm-password" class="form-control">
                                        </div>
                                    </div>

                                    <div hidden class="col-6">
                                        <div class="input-group mb-3">
                                            <input type="text" id="adminId" name="admin-id" value="<?= $admin_id; ?>" class="form-control">
                                        </div>
                                    </div>

                                    <div hidden class="col-6">
                                        <div class="input-group mb-3">
                                            <input type="text" id="adminEmail" name="admin-email" value="<?= $admin_email; ?>" class="form-control">
                                        </div>
                                    </div>

                                    <div class="text-start text-center">
                                        <button id="updateProfileBtn" type="submit" class="btn btn-primary px-4" name="update_admin">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="viewOnly admin2 col-lg-12 card justify-content-center shadow-none border">
                            <div class="card-header">
                                <h6 class="mb-0 text-center">SYSTEM CONFIGURATION</h6>
                            </div>
                            <div class="card-body">
                                <form id="updateExchangeRateForm" class="row g-3" method="POST">
                                    <div class="col-12">
                                        <label class="form-label">Units rate (Units to Tsh)</label>
                                        <div class="input-group mb-3">
                                            <input type="text" id="adminPasswordInput" name="exchange-rate" class="form-control" placeholder="1 USD = x TSh" value="<?= "100" ?>" required>
                                        </div>
                                    </div>

                                    <div class="text-start text-center">
                                        <button id="updateUnitRateBtn" type="submit" class="btn btn-primary px-4" name="update_admin">Update Rate</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--end page main-->

    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
</div>
<!--end wrapper-->

<!-- Show or hide password input -->
<script type="text/javascript">
    function showPassword() {
        var x = document.getElementById("adminPasswordInput");
        var z = document.getElementById("confirmPasswordInput");
        var y = document.getElementById("hide-pass-icon");

        if (x.type === "password" && y.className == "lni lni-eye") {
            x.type = "text";
            z.type = "text";
            y.className = "bx bx-hide";
        } else {
            x.type = "password";
            z.type = "password";
            y.className = "lni lni-eye";
        }
    }
</script>

<!-- Including the footer -->
<?= footer(); ?>
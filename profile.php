<?php
// Header File
require 'utils.php';
echo head('Profile');

$sesId = session_id();
$select_user_query = "SELECT * FROM users WHERE session_id = '{$sesId}' ";
$select_user = mysqli_query($connection, $select_user_query);

$row = mysqli_fetch_array($select_user);
$user_email = $row['user_email'];
$user_fullname = ucwords($row['user_full_name']);
$user_phone = $row['user_phone'];
?>

<!--start wrapper-->
<div class="card shadow-sm border-0">
    <div class="card-body">
        <h5 class="mb-0">My Account</h5>
        <hr>
        <div class="card shadow-none border">
            <div class="card-header">
                <h6 class="mb-0">USER INFORMATION</h6>
            </div>
            <div class="card-body">
                <form id="user_profile_form" method="POST" class="row g-3">
                    <div class="col-12">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" value="<?= $user_fullname; ?>" disabled>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" value="<?= $user_email; ?>" disabled>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text">255</span>
                            <input type="text" class="form-control" value="<?= $user_phone; ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Password</label>
                        <div class="input-group mb-3">
                            <input type="password" id="myInput" name="user-password" class="form-control" value="">
                            <span class="input-group-text" id="basic-addon1"><i id="hide-pass-icon" class="lni lni-eye" style="color: white;" onclick="showPassword()"></i></span>
                        </div>
                    </div>
                    <div class="text-start text-center">
                        <button id="updateProfileBtn" type="submit" class="btn btn-primary px-4" name="update_admin" onclick="changeText()">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!--start overlay-->
<div class="overlay nav-toggle-icon"></div>
<!--end overlay-->

<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->


<!-- Show or hide password input -->
<script type="text/javascript">
    function showPassword() {
        var x = document.getElementById("myInput");
        var y = document.getElementById("hide-pass-icon");

        if (x.type === "password" && y.className == "lni lni-eye") {
            x.type = "text";
            y.className = "bx bx-hide";
        } else {
            x.type = "password";
            y.className = "lni lni-eye";
        }
    }
</script>

</div>

<?= footer(); ?>
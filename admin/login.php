<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link rel="stylesheet" href="../assets/plugins/notifications/css/lobibox.min.css" />
    <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="../assets/css/pace.min.css" rel="stylesheet" />

    <!-- Favicon icon -->
    <title>Login || Water</title>
</head>

<body>
    <!--start wrapper-->
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6 mb-4">
                    <img src="../assets/images/winners-logo.png" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form method="POST" class="form-body" id="login_form" accept-charset="utf-8">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example13">Email address</label>
                            <input type="email" id="emailInput" class="form-control form-control-lg" name="email" placeholder="Email" autocapitalize="off" required>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example23">Password</label>
                            <div class="input-group mb-3">
                                <input type="password" id="adminPasswordInput" class="form-control form-control-lg" name="password" placeholder="Password" autocapitalize="off" required>
                                <span onclick="showPassword()" class="input-group-text" id="basic-addon1"><i id="hide-pass-icon" class="lni lni-eye" style="color: black;"></i></span>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <div class="text-center">
                            <button id="loginBtn" type="submit" class="btn btn-primary btn-lg btn-block" name="login">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--end wrapper-->
    <?php 
    $role = "Admin";
    include "includes/footer.php"; 
    ?>

    <!-- Show or hide password input -->
    <script type="text/javascript">
        function showPassword() {
            var x = document.getElementById("adminPasswordInput");
            var y = document.getElementById("hide-pass-icon");

            if (x.type == "password" && y.className == "lni lni-eye") {
                x.type = "text";
                y.className = "bx bx-hide";
            } else {
                x.type = "password";
                y.className = "lni lni-eye";
            }
        }
    </script>
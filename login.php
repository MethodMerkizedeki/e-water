<?php
// Header File
require 'utils.php';
?>

<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- plugins -->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Favicon icon -->
    <title>Login</title>

    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />

    <style>
        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <!--start wrapper-->
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="assets/images/error/login.svg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form method="POST" class="form-body" id="login_form" accept-charset="utf-8">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example13">Email address</label>
                            <input type="email" id="userEmailInput" class="form-control form-control-lg" name="email" placeholder="Email" autocapitalize="off" require>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example23">Password</label>
                            <input type="password" id="userPasswordInput" class="form-control form-control-lg" name="password" placeholder="Password" autocapitalize="off" require>
                        </div>

                        <!-- Submit button -->
                        <div class="text-center">
                            <button id="loginBtn" type="submit" class="btn btn-primary btn-lg btn-block" name="login">Sign in</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--end wrapper-->

    <?= footer(); ?>
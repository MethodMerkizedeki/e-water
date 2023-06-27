<?php ob_start(); ?>
<?php session_start(); ?>


<?php
// Check login session
// $sesId = session_id();
// $query = "SELECT * FROM admins WHERE session_id = '{$sesId}' ";
// $select_session_query = mysqli_query($connection, $query);

?>


<!doctype html>
<html lang="en" class="dark-theme">
<!-- <html lang="en" class="light-theme">
<html lang="en" class="semi-dark"> -->

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" href="./ewater.png" type="image/png" />
	
	<!-- Disable webpage zoom -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<!--plugins-->
	<link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="../assets/plugins/datetimepicker/css/classic.css" rel="stylesheet" />
	<link href="../assets/plugins/datetimepicker/css/classic.time.css" rel="stylesheet" />
	<link href="../assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />
	<link rel="stylesheet" href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- Bootstrap CSS -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/bootstrap-extended.css" rel="stylesheet" />
	<link href="../assets/css/style.css" rel="stylesheet" />
	<link href="../assets/css/icons.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<!-- loader-->
	<link href="../assets/css/pace.min.css" rel="stylesheet" />
	<!--Theme Styles-->
	<link href="../assets/css/dark-theme.css" rel="stylesheet" />
	<link href="../assets/css/light-theme.css" rel="stylesheet" />
	<link href="../assets/css/semi-dark.css" rel="stylesheet" />
	<link href="../assets/css/header-colors.css" rel="stylesheet" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/default.min.css">
	<!-- Date picker CDN -->
	<script type="module" src="https://1.www.s81c.com/common/carbon/web-components/version/v1.21.0/date-picker.min.js"></script>
	<link rel="stylesheet" href="../assets/plugins/notifications/css/lobibox.min.css" />
	<link href="../assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="../assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
	<link rel="stylesheet" href="../assets/css/datepicker.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<title>Water Supply</title>

</head>

<body>

	<style>
		.flatpickr-next-month,
		.flatpickr-prev-month {
			fill: black;
		}
	</style>

	<div id="particles-background" class="vertical-centered-box"></div>
	<div id="particles-foreground" class="vertical-centered-box"></div>
	<div class="vertical-centered-box">
		<div class="content">
			<div class="loader-circle"></div>
			<div class="loader-line-mask">
				<div class="loader-line"></div>
			</div>
		</div>
	</div>
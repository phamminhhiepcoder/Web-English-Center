<?php
session_start();
include '../connect.php';

if ($_SESSION['loggedinAdmin'] === false) {
    header("location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<head>

	<!-- Basic Page Needs
================================================== -->
	<title>Admin Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
================================================== -->
	<link rel="stylesheet" href="./listeo/css/style.css">
	<link rel="stylesheet" href="./listeo/css/main-color.css" id="colors">
	<link rel="icon" href="/img/logo-3.png">
</head>

<body>

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header Container
================================================== -->
		<header id="header-container" class="fixed fullwidth dashboard">

			<!-- Header -->
			<div id="header" class="not-sticky">
				<div class="container">

					<!-- Left Side Content -->
					<div class="left-side">

						<!-- Mobile Navigation -->
						<div class="mmenu-trigger">
							<button class="hamburger hamburger--collapse" type="button">
								<span class="hamburger-box"> <span class="hamburger-inner"></span>
								</span>
							</button>
						</div>
						<div class="clearfix"></div>
						<!-- Main Navigation / End -->

					</div>
					<!-- Left Side Content / End -->

					<!-- Right Side Content / End -->
					<div class="right-side">
						<!-- Header Widget -->
						<div class="header-widget">

							<!-- User Menu -->
							<div class="user-menu">
								<div class="user-name">
									<span><img th:src="${session.admin.avatar}" alt=""></span>Tài khoản của tôi
								</div>
								<ul>
									<li><a href="dashboard.php"><i class="sl sl-icon-settings"></i> Bảng tin</a>
									</li>
									<li><a href="dashboard-myprofile.php"><i class="sl sl-icon-envelope-open"></i> Hồ sơ của tôi</a></li>
									<li><a th:href="../logout.php"><i class="sl sl-icon-power"></i> Đăng xuất</a></li>
								</ul>
							</div>
						</div>
						<!-- Header Widget / End -->
					</div>
					<!-- Right Side Content / End -->

				</div>
			</div>
			<!-- Header / End -->

		</header>
		<div class="clearfix"></div>
		<!-- Header Container / End -->


		<!-- Dashboard -->
		<div id="dashboard">

			<!-- Navigation
	================================================== -->

			<!-- Responsive Navigation Trigger -->
			<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Điều hướng</a>

			<div class="dashboard-nav">
				<div class="dashboard-nav-inner">

					<ul data-submenu-title="Main">
						<li class="active"><a href="dashboard.php"><i class="sl sl-icon-settings"></i> Bảng tin</a>
						</li>
					</ul>

					<ul data-submenu-title="Tài khoản">
						<li><a href="dashboard-users.php"><i class="sl sl-icon-layers"></i> Quản lý tài
								khoản</a></li>
						<li><a href="dashboard-student.php"><i class="sl sl-icon-user"></i> Quản lý học viên</a>
						</li>

					</ul>

					<ul data-submenu-title="Khoá học">
						<li><a href="dashboard-course.php"><i class="sl sl-icon-layers"></i> Quản lý khoá học</a>
						</li>
						<li><a href="dashboard-exam.php"><i class="sl sl-icon-layers"></i>Quản lý lịch thi</a>
						</li>
						<li><a href="dashboard-grade.php"><i class="sl sl-icon-layers"></i>Quản lý điểm</a>
						</li>
					</ul>

					<ul data-submenu-title="Thời khoá biểu">
						<li><a href="dashboard-schedule.php"><i class="sl sl-icon-layers"></i> Quản lý thời khoá
								biểu</a></li>
						<li><a href="dashboard-class.php"><i class="sl sl-icon-layers"></i> Quản lý lớp</a></li>
					</ul>


				</div>
			</div>
			<!-- Navigation / End -->


			<!-- Content
	================================================== -->
			<div class="dashboard-content">

				<!-- Titlebar -->
				<div id="titlebar">
					<div class="row">
						<div class="col-md-12">
							<h2 th:text="${session.admin.user_Name + '!'}"></h2>
							<!-- Breadcrumbs -->
							<nav id="breadcrumbs">
								<ul>
									<li><a href="#">Home</a></li>
									<li>Dashboard</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>


				<!-- Content -->
				<div class="row" style="justify-content: center; display: flex;">

					<!-- Item -->
					<div class="col-lg-3 col-md-6">
						<div class="dashboard-stat color-1">
							<div class="dashboard-stat-content">
								<h4 th:text="${Total_Order}"></h4>
								<span>Tổng số học viên</span>
							</div>
							<div class="dashboard-stat-icon">
								<i class="im im-icon-Add-Bag"></i>
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="col-lg-3 col-md-6">
						<div class="dashboard-stat color-2">
							<div class="dashboard-stat-content">
								<h4 th:text="${Total_Product}"></h4>
								<span>Tổng số khoá học</span>
							</div>
							<div class="dashboard-stat-icon">
								<i class="im im-icon-Polo-Shirt"></i>
							</div>
						</div>
					</div>


					<!-- Item -->
					<div class="col-lg-3 col-md-6">
						<div class="dashboard-stat color-3">
							<div class="dashboard-stat-content">
								<h4 th:text="${Total_User}"></h4>
								<span>Tổng số tài khoản</span>
							</div>
							<div class="dashboard-stat-icon">
								<i class="im im-icon-Add-UserStar"></i>
							</div>
						</div>
					</div>

				</div>
				<!-- Content / End -->


			</div>
			<!-- Dashboard / End -->


		</div>
		<!-- Wrapper / End -->


		<!-- Scripts
================================================== -->
		<script type="text/javascript" src="./scripts/jquery-3.6.0.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-migrate-3.3.2.min.js"></script>
		<script type="text/javascript" src="./scripts/mmenu.min.js"></script>
		<script type="text/javascript" src="./scripts/chosen.min.js"></script>
		<script type="text/javascript" src="./scripts/slick.min.js"></script>
		<script type="text/javascript" src="./scripts/rangeslider.min.js"></script>
		<script type="text/javascript" src="./scripts/magnific-popup.min.js"></script>
		<script type="text/javascript" src="./scripts/waypoints.min.js"></script>
		<script type="text/javascript" src="./scripts/counterup.min.js"></script>
		<script type="text/javascript" src="./scripts/jquery-ui.min.js"></script>
		<script type="text/javascript" src="./scripts/tooltips.min.js"></script>
		<script type="text/javascript" src="./scripts/custom.js"></script>


</body>

</html>
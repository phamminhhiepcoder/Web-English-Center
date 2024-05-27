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
									<li><a th:href="logout.php"><i class="sl sl-icon-power"></i> Đăng xuất</a></li>
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
                        <h2>My Products</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li>My Products</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Listings -->
                <div class="col-lg-12 col-md-12">
                    <div class="dashboard-list-box margin-top-0">
                        <h4>List Users</h4>
                        <ul>
                            <th:block th:each="y : ${page.content}">
                                <li>
                                    <div class="list-box-listing">
                                        <div class="list-box-listing-img">
                                            <a href="#"><img th:src="${y.avatar}"
                                                             alt=""></a>
                                        </div>
                                        <div class="list-box-listing-content">
                                            <div class="inner">
                                                <h3>
                                                    <a href="#" th:text="${y.user_Name}"></a>
                                                </h3>
                                                <span th:text="'Email: ' + ${y.email}"></span><br>
                                                <span th:text="'Role: ' + ${y.role}"></span>
                                                <br>
                                                <span> Status:
                                                    <b th:text="(${y.status} == 1 ? 'ACTIVE' : 'INACTIVE')"></b>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttons-to-right">
                                        <a th:href="@{/dashboard-users/edit/{id}(id=${y.id})}" class="button gray"><i
                                                class="sl sl-icon-note"></i> Edit</a> <a
                                            th:href="@{/dashboard-users/delete/{id}(id=${y.id})}"
                                            class="button gray"><i class="sl sl-icon-close"></i>
                                        Delete</a>
                                    </div>
                                </li>
                            </th:block>
                        </ul>
                    </div>
                </div>


                <!-- Pagination -->
                <div class="clearfix"></div>
                <div th:if="${search_dashboard==null}" class="row">
                    <div class="col-md-12">
                        <div class="pagination-container margin-top-20 margin-bottom-40">
                            <nav class="pagination">
                                <ul>
                                    <li><a class="paging-item" th:if="${page.number} > 0"
                                           th:href="@{/dashboard-users/{page}(page=${page.number - 1})}"><i
                                            class="sl sl-icon-arrow-left"></i></a></li>
                                    <li><a class="paging-item"
                                           th:href="@{/dashboard-users/{page}(page=${page.number})}"
                                           th:text="${page.number+1}"></a></li>
                                    <li><a class="paging-item"
                                           th:if="${page.number} < ${page.totalPages - 1}"
                                           th:href="@{/dashboard-users/{page}(page=${page.number + 1})}"><i
                                            class="sl sl-icon-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div th:if="${search_dashboard !=null}" class="row">
                    <div class="col-md-12">
                        <div class="pagination-container margin-top-20 margin-bottom-40">
                            <nav class="pagination">
                                <ul>
                                    <li><a th:if="${page.number} > 0"
                                           th:href="@{/dashboard-users/search/{page}(page=${page.number - 1})}"><i
                                            class="sl sl-icon-arrow-left"></i></a></li>
                                    <li><a
                                            th:href="@{/dashboard-users/search/{page}(page=${page.number})}"
                                            class="current-page" th:text="${page.number+1}"></a></li>
                                    <li><a
                                            th:if="${page.number} < ${page.totalPages - 1}"
                                            th:href="@{/dashboard-users/search/{page}(page=${page.number + 1})}"><i
                                            class="sl sl-icon-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Pagination / End -->
            </div>

        </div>
        <!-- Content / End -->


    </div>
    <!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="/scripts/jquery-3.6.0.min.js"></script>
<script type="text/javascript"
        src="/scripts/jquery-migrate-3.3.2.min.js"></script>
<script type="text/javascript" src="/scripts/mmenu.min.js"></script>
<script type="text/javascript" src="/scripts/chosen.min.js"></script>
<script type="text/javascript" src="/scripts/slick.min.js"></script>
<script type="text/javascript" src="/scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="/scripts/waypoints.min.js"></script>
<script type="text/javascript" src="/scripts/counterup.min.js"></script>
<script type="text/javascript" src="/scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="/scripts/custom.js"></script>
<script type="text/javascript" src="/scripts/myjs.js"></script>

</body>
</html>
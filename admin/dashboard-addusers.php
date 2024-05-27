<?php
session_start();
include ('../connect.php');

if ($_SESSION['loggedinAdmin'] === false) {
    header("location: ../login.php");
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['quantity'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $img = $_FILES['img']['tmp_name'];
        $path = 'uploads/' . $_FILES['img']['name'];
        move_uploaded_file($img, $path);

        $sql = "INSERT INTO users (email, password, role, phone) VALUES (:email, :password, :role, :phone)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $name);
        $stmt->bindParam(':Gia', $price);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':phone', $phone);

        if ($stmt->execute()) {
            header("location: dashboard-users.php");
        } else {
            echo "Thêm thất bại, vui lòng thử lại";
        }
    }
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
				<form action="dashboard-addproduct" method="post" enctype="multipart/form-data">
					<!-- Titlebar -->
					<div id="titlebar">
						<div class="row">
							<div class="col-md-12">
								<h2>Add Product</h2>
								<!-- Breadcrumbs -->
								<nav id="breadcrumbs">
									<ul>
										<li><a href="#">Home</a></li>
										<li><a href="#">Dashboard</a></li>
										<li>Add Product</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">

							<div id="add-listing">

								<!-- Section -->
								<div class="add-listing-section">

									<!-- Headline -->
									<div class="add-listing-headline">
										<h3>
											<i class="sl sl-icon-doc"></i> Basic Informations
										</h3>
									</div>

									<!-- Title -->
									<div class="row with-forms">
										<div class="col-md-12">
											<h5>Product Name</h5>
											<input name="product_name" class="search-field" type="text" value=""
												placeholder="Product Name" />
										</div>
									</div>

									<!-- Row -->
									<div class="row with-forms">
										<!-- Price -->
										<div class="col-md-4">
											<h5>Price</h5>
											<input name="price" type="text" placeholder="Price">
										</div>

										<div class="col-md-4">
											<h5>Availability</h5>
											<input name="availability" type="text" placeholder="Availability">
										</div>
										<!-- Status -->
										<div class="col-md-4">
											<h5>Category</h5>
											<select name="category" class="chosen-select-no-single">
												<option value="1" label="blank"
													th:text="${listCategories[0].category_Name}"></option>
												<th:block th:each="y : ${listCategories}">
													<option th:value="${y.id}" th:if="${yStat.index >0}"
														th:text="${y.category_Name}"></option>
												</th:block>
											</select>
										</div>

									</div>
									<!-- Row / End -->

								</div>
								<!-- Section / End -->

								<!-- Section -->
								<div class="add-listing-section margin-top-45">

									<!-- Headline -->
									<div class="add-listing-headline">
										<h3>
											<i class="sl sl-icon-docs"></i> Details
										</h3>
									</div>

									<!-- Description -->
									<div class="form">
										<h5>Description</h5>
										<textarea name="description" class="WYSIWYG" cols="40" rows="3" id="summary"
											spellcheck="true" placeholder="Description"></textarea>
									</div>
								</div>
								<!-- Section / End -->

								<!-- Section -->
								<div class="add-listing-section margin-top-45">

									<!-- Headline -->
									<div class="add-listing-headline">
										<h3>
											<i class="sl sl-icon-picture"></i> Images
										</h3>
									</div>

									<!-- Dropzone -->
									<div class="submit-section">

										<div class="upload__box">
											<div class="upload__btn-box">
												<label class="upload__btn">
													<p style="margin-bottom: 0px;">Choose images</p> <input
														name="listImage" accept="image/*" type="file"
														data-max_length="20" class="upload__inputfile" multiple>
												</label>
											</div>
											<div class="upload__img-wrap"></div>
										</div>
									</div>
								</div>
								<!-- Section / End -->





								<button class="button preview">
									Add New Product <i class="fa fa-arrow-circle-right"></i>
								</button>

							</div>
						</div>

						<!-- Copyrights -->
						<div class="col-md-12">
							<div class="copyrights"></div>
						</div>

					</div>
				</form>
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


	<!-- Opening hours added via JS (this is only for demo purpose) -->
	<script>
		$(".opening-day.js-demo-hours .chosen-select").each(
			function () {
				$(this).append(
					'' + '<option></option>'
					+ '<option>Closed</option>'
					+ '<option>1 AM</option>'
					+ '<option>2 AM</option>'
					+ '<option>3 AM</option>'
					+ '<option>4 AM</option>'
					+ '<option>5 AM</option>'
					+ '<option>6 AM</option>'
					+ '<option>7 AM</option>'
					+ '<option>8 AM</option>'
					+ '<option>9 AM</option>'
					+ '<option>10 AM</option>'
					+ '<option>11 AM</option>'
					+ '<option>12 AM</option>'
					+ '<option>1 PM</option>'
					+ '<option>2 PM</option>'
					+ '<option>3 PM</option>'
					+ '<option>4 PM</option>'
					+ '<option>5 PM</option>'
					+ '<option>6 PM</option>'
					+ '<option>7 PM</option>'
					+ '<option>8 PM</option>'
					+ '<option>9 PM</option>'
					+ '<option>10 PM</option>'
					+ '<option>11 PM</option>'
					+ '<option>12 PM</option>');
			});
	</script>

	<!-- DropZone | Documentation: http://dropzonejs.com -->
	<script type="text/javascript" src="scripts/dropzone.js"></script>


	<script>
		jQuery(document).ready(function () {
			ImgUpload();
		});

		function ImgUpload() {
			var imgWrap = "";
			var imgArray = [];

			$('.upload__inputfile')
				.each(
					function () {
						$(this)
							.on(
								'change',
								function (e) {
									imgWrap = $(this)
										.closest(
											'.upload__box')
										.find(
											'.upload__img-wrap');
									var maxLength = $(this)
										.attr(
											'data-max_length');

									var files = e.target.files;
									var filesArr = Array.prototype.slice
										.call(files);
									var iterator = 0;
									filesArr
										.forEach(function (
											f, index) {

											if (!f.type
												.match('image.*')) {
												return;
											}

											if (imgArray.length > maxLength) {
												return false
											} else {
												var len = 0;
												for (var i = 0; i < imgArray.length; i++) {
													if (imgArray[i] !== undefined) {
														len++;
													}
												}
												if (len > maxLength) {
													return false;
												} else {
													imgArray
														.push(f);

													var reader = new FileReader();
													reader.onload = function (
														e) {
														var html = "<div class='upload__img-box'><div style='background-image: url("
															+ e.target.result
															+ ")' data-number='"
															+ $(".upload__img-close").length
															+ "' data-file='"
															+ f.name
															+ "' class='img-bg'><div class='upload__img-close'></div></div></div>";
														imgWrap
															.append(html);
														iterator++;
													}
													reader
														.readAsDataURL(f);
												}
											}
										});
								});
					});

			$('body').on('click', ".upload__img-close", function (e) {
				var file = $(this).parent().data("file");
				for (var i = 0; i < imgArray.length; i++) {
					if (imgArray[i].name === file) {
						imgArray.splice(i, 1);
						break;
					}
				}
				$(this).parent().parent().remove();
			});
		}
	</script>
</body>

</html>
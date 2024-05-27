<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Admin Page</title>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="/listeo/css/style.css">
<link rel="stylesheet" href="/listeo/css/main-color.css" id="colors">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="icon" href="/img/logo-3.png">
</head>

<body>

	<!-- Wrapper -->
	<div id="wrapper">
		<script th:if="${editProduct != null}">
			swal("Edit successful product!", "", "success");
		</script>
		<!-- Header Container
================================================== -->
		<header id="header-container" class="fixed fullwidth dashboard">

			<!-- Header -->
			<div id="header" class="not-sticky">
				<div class="container">

					<!-- Left Side Content -->
					<div class="left-side">

						<!-- Logo -->
						<div id="logo">
							<a href="index.html"><img src="/images/logo.png" alt=""></a>
							<a href="index.html" class="dashboard-logo"><img
								src="/images/logo2.png" alt=""></a>
						</div>

						<!-- Mobile Navigation -->
						<div class="mmenu-trigger">
							<button class="hamburger hamburger--collapse" type="button">
								<span class="hamburger-box"> <span
									class="hamburger-inner"></span>
								</span>
							</button>
						</div>

					</div>
					<!-- Left Side Content / End -->

					<!-- Right Side Content / End -->
					<div class="right-side">
						<!-- Header Widget -->
						<div class="header-widget">

							<!-- User Menu -->
							<div class="user-menu">
								<div class="user-name">
									<span><img th:src="${session.admin.avatar}" alt=""></span>My
									Account
								</div>
								<ul>
									<li><a th:href="@{/dashboard}"><i
											class="sl sl-icon-settings"></i> Dashboard</a></li>
									<li><a th:href="@{/dashboard-myprofile}"><i
											class="sl sl-icon-envelope-open"></i> My Profile</a></li>
									<li><a th:href="@{/dashboard-orders}"><i
											class="fa fa-calendar-check-o"></i> Orders</a></li>
									<li><a th:href="@{/logout-admin}"><i
											class="sl sl-icon-power"></i> Logout</a></li>
								</ul>
							</div>

							<a th:href="@{/dashboard-addproduct}"
								class="button border with-icon">Add Product<i
								class="sl sl-icon-plus"></i></a>
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
			<a href="#" class="dashboard-responsive-nav-trigger"><i
				class="fa fa-reorder"></i> Dashboard Navigation</a>

			
						<div class="dashboard-nav">
				<div class="dashboard-nav-inner">

					<ul data-submenu-title="Main">
						<li><a th:href="@{/dashboard}"><i
								class="sl sl-icon-settings"></i> Dashboard</a></li>
						<li><a th:href="@{/dashboard-orders}"><i
								class="fa fa-calendar-check-o"></i> Orders</a></li>
						<li><a th:href="@{/dashboard-wallet}"><i
								class="sl sl-icon-wallet"></i> Wallet</a></li>
					</ul>

					<ul data-submenu-title="Products">
						<li class="active"><a th:href="@{/dashboard-myproducts}"><i
								class="sl sl-icon-layers"></i> My products</a>
							<ul>
								<li><a>Edit Product</a></li>
							</ul></li>
						<li><a th:href="@{/dashboard-addproduct}"><i
								class="sl sl-icon-plus"></i> Add Product</a></li>
					</ul>

					<ul data-submenu-title="Users">
						<li><a th:href="@{/dashboard-users}"><i
								class="sl sl-icon-layers"></i> List Users</a></li>
					</ul>

					<ul data-submenu-title="Account">
						<li><a th:href="@{/dashboard-myprofile}"><i
								class="sl sl-icon-user"></i> My Profile</a></li>
						<li><a th:href="@{/logout-admin}"><i
								class="sl sl-icon-power"></i> Logout</a></li>
					</ul>
					<ul data-submenu-title="">
						<li><a th:href="@{/home}"><i class="im im-icon-Home"></i>
								Go To Home Page</a></li>
					</ul>
				</div>
			</div>
			<!-- Navigation / End -->


			<!-- Content
	================================================== -->
			<div class="dashboard-content">
				<form action="/dashboard-myproducts/edit" method="post"
					enctype="multipart/form-data">
					<!-- Titlebar -->
					<div id="titlebar">
						<div class="row">
							<div class="col-md-12">
								<h2>Edit Product</h2>
								<!-- Breadcrumbs -->
								<nav id="breadcrumbs">
									<ul>
										<li><a href="#">Home</a></li>
										<li><a href="#">Dashboard</a></li>
										<li><a href="#">My Products</a></li>
										<li>Edit Product</li>
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
											<input style="display: none;" name="product_id" th:value="${product.id}">
											<input name="product_name" class="search-field" type="text"
												th:value="${product.product_Name}"
												placeholder="Product Name" />
										</div>
									</div>

									<!-- Row -->
									<div class="row with-forms">
										<!-- Price -->
										<div class="col-md-4">
											<h5>Price</h5>
											<input th:value="${product.price}" name="price" type="text"
												placeholder="Price">
										</div>

										<div class="col-md-4">
											<h5>Availability</h5>
											<input th:value="${product.quantity}" name="availability"
												type="text" placeholder="Availability">
										</div>
										<!-- Status -->
										<div class="col-md-4">
											<h5>Category</h5>
											<select name="category" class="chosen-select-no-single">
												<option th:value="${product.category.id}" label="blank"
													th:text="${product.category.category_Name}"></option>
												<th:block th:each="y : ${listCategories}">
													<option th:value="${y.id}"
														th:if="${y.id != product.category.id}"
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
										<textarea th:field="${product.description}" name="description"
											class="WYSIWYG" cols="40" rows="3" id="summary"
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
									<!-- Thẻ Chứa Slideshow -->
									<div class="slideshow-container" style="width: 30%;">
										<!-- Kết hợp hình ảnh và nội dung cho mội phần tử trong slideshow-->
										<th:block th:each="y: ${product.productImage}">
											<div class="mySlides fade">
												<a th:href="@{/dashboard-myproducts/delete-image/{id}(id=${y.id})}" class="delete_img"> <i
													style="color: #fff; line-height: 30px;"
													class="sl sl-icon-close"></i>

												</a> <img th:src="${y.url_Image}" style="width: 100%">
											</div>
										</th:block>
										<!-- Nút điều khiển mũi tên-->
										<a class="prev" onclick="plusSlides(-1)">❮</a> <a class="next"
											onclick="plusSlides(1)">❯</a>
									</div>
									<br>
									<!-- Nút tròn điều khiển slideshow-->
									<div style="text-align: center">
										<th:block th:each="y: ${product.productImage}">
											<span class="dotw" th:onclick="'currentSlide('+ ${yStat.index+1} +')'"></span>
										</th:block>

									</div>
									<!-- Dropzone -->
									<div class="submit-section">

										<div class="upload__box" style="padding-top: 40px;">
											<div class="upload__btn-box">
												<label class="upload__btn" style="border-radius: 50px;">
													<p style="margin-bottom: 0px;">Add images</p> <input
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
									Save Change <i class="fa fa-arrow-circle-right"></i>
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
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);
		function plusSlides(n) {
			showSlides(slideIndex += n);
		}
		function currentSlide(n) {
			showSlides(slideIndex = n);
		}
		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {
				slideIndex = 1
			}
			if (n < 1) {
				slideIndex = slides.length
			}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block";
			/* dots[slideIndex - 1].className += " active"; */
		}
	</script>
	<script>
		jQuery(document).ready(function() {
			ImgUpload();
		});

		function ImgUpload() {
			var imgWrap = "";
			var imgArray = [];

			$('.upload__inputfile')
					.each(
							function() {
								$(this)
										.on(
												'change',
												function(e) {
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
															.forEach(function(
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
																		reader.onload = function(
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

			$('body').on('click', ".upload__img-close", function(e) {
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
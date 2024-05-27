<?php
session_start();
include ('../connect.php');

if ($_SESSION['loggedinAdmin'] === false) {
    header("location: ../login.php");
    exit;
}

$message = "";

if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    echo $userId;
} else {
    header('Location: dashboard-users.php');
    exit();
}

$query = "SELECT * FROM users WHERE id = :userId";
$stmt = $conn->prepare($query);
$stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $role = $_POST['role'];
    $phoneNumber = $_POST['phone'];
    $status = $_POST['is_delete'];

    $updateQuery = "UPDATE users SET email = :email, phone = :phoneNumber, role = :role, is_delete = :status WHERE id = :userId";
    $updateStmt = $conn->prepare($updateQuery);
    $updateStmt->bindParam(':email', $email, PDO::PARAM_STR);
    $updateStmt->bindParam(':role', $role, PDO::PARAM_STR);
    $updateStmt->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
    $updateStmt->bindParam(':status', $status, PDO::PARAM_INT);
    $updateStmt->bindParam(':userId', $userId, PDO::PARAM_INT);

    if ($updateStmt->execute()) {
        $message = "Update thành công!";
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        $message = "Update lỗi";
    }
}

$conn = null;
?>


!DOCTYPE html>

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
                                    <li><a href="dashboard-myprofile.php"><i class="sl sl-icon-envelope-open"></i> Hồ sơ
                                            của tôi</a></li>
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
                <form method="post" enctype="multipart/form-data">
                    <!-- Titlebar -->
                    <div id="titlebar">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Edit User</h2>
                                <!-- Breadcrumbs -->
                                <nav id="breadcrumbs">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">List Users</a></li>
                                        <li>Edit User</li>
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
                                            <i class="sl sl-icon-doc"></i> Thông tin
                                        </h3>
                                    </div>

                                    <!-- Row -->
                                    <div class="row with-forms">
                                        <!-- Price -->
                                        <!-- Email -->
                                        <div class="col-md-4">
                                            <h5>Email</h5>
                                            <input name="email" type="text"
                                                value="<?php echo htmlspecialchars($user['email']); ?>"
                                                placeholder="Email">
                                        </div>

                                        <!-- Phone -->
                                        <div class="col-md-4">
                                            <h5>Phone</h5>
                                            <input name="phone" type="text"
                                                value="<?php echo htmlspecialchars($user['phone']); ?>"
                                                placeholder="Phone Number">
                                        </div>


                                        <!-- Status -->
                                        <div class="col-md-4">
                                            <h5>Vai trò</h5>
                                            <select name="role" id="role" class="chosen-select-no-single">
                                                <option value="Admin" <?php echo $user['role'] == 'Admin' ? 'selected' : ''; ?>>
                                                    ADMIN</option>
                                                <option value="Teacher" <?php echo $user['role'] == 'Teacher' ? 'selected' : ''; ?>>
                                                    Giáo viên</option>
                                                <option value="Student" <?php echo $user['role'] == 'Student' ? 'selected' : ''; ?>>
                                                    Học sinh</option>
                                            </select>
                                        </div>


                                        <!-- Status -->
                                        <div class="col-md-4">
                                            <h5>Status</h5>
                                            <select name="is_delete" id="is_delete" class="chosen-select-no-single">
                                                <option value="0" <?php echo $user['is_delete'] == 0 ? 'selected' : ''; ?>>
                                                    ACTIVE</option>
                                                <option value="1" <?php echo $user['is_delete'] == 1 ? 'selected' : ''; ?>>
                                                    INACTIVE</option>
                                            </select>
                                        </div>

                                    </div>
                                    <!-- Row / End -->

                                </div>
                                <!-- Section / End -->

                                <!-- Section -->
                                <button class="button preview">
                                    Lưu thay đổi <i class="fa fa-arrow-circle-right"></i>
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
    <script type="text/javascript" src="/scripts/jquery-migrate-3.3.2.min.js"></script>
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
</body>

</html>
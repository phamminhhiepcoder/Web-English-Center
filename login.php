<?php
session_start();
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = :email and is_delete = 0";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row && password_verify($password, $row['password'])) { 
        $role = $row["role"];

        if ($role == "Admin") {
            $_SESSION['loggedinAdmin'] = true;
            $_SESSION['userId'] = $row["id"];
            $_SESSION['email'] = $row["email"];
            header("location: ./admin/dashboard.php");
            exit;
        } else if ($role == "Client") {
            $_SESSION['loggedinClient'] = true;
            $_SESSION['userId'] = $row["id"];
            $_SESSION['email'] = $row["email"];
            header("location: ./admin/dashboard.php");
            exit;
        } else {
            $login_error = "Sai email hoặc password";
        }
    } else {
        $login_error = "Sai email hoặc password";
    }
}
?>



<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from nhatran111.vn/dang-nhap by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 May 2024 02:40:24 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=100">
    <title>Đăng nhập</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Đăng nhập" />

    <meta name="keywords" content="Đăng nhập" />

    <meta name="author" content="kiennv192@gmail.com" />
    <meta name="robots" content="noindex,nofollow">
    <link rel="icon" type="image/x-icon" href="https://nhatran111.vn/img/favicon.ico">
    <link href="https://nhatran111.vn/lib/uikit/css/uikit.css" rel="stylesheet" type="text/css">
    <link href="https://nhatran111.vn/css/site.css" rel="stylesheet" type="text/css">

</head>

<body>


    <!-- Header -->
    <div class="tm-header uk-visible@m">
        <div class="uk-container">
            <div uk-navbar class="logo-header">
                <div class="uk-navbar-left">
                    <a class="uk-logo" href="https://nhatran111.vn/">
                        <img src="https://nhatran111.vn/img/Logo_NhaTran 1.png">
                    </a>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-child-width-auto uk-grid-small" uk-grid>
                        <div>
                            <a href="tel:024 3756 3521" class="uk-h3"><img
                                    src="https://nhatran111.vn/img/Vector.png">024 3756 3521</a>
                        </div>
                        <div><a class="uk-button uk-button-default" href="https://nhatran111.vn/dang-nhap">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="uk-navbar-container">
            <div class="uk-container">
                <div uk-navbar>
                    <div class="uk-navbar-left">

                        <ul class="uk-navbar-nav ">
                            <li>
                                <a href="https://nhatran111.vn/">Trang Ch&#x1EE7;</a>
                            </li>
                            <li>
                                <a href="https://nhatran111.vn/thong-tin-chung/gioi-thieu-ve-trung-tam">Gi&#x1EDB;i
                                    thi&#x1EC7;u</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="https://nhatran111.vn/thong-tin-chung/gioi-thieu-ve-trung-tam">Gi&#x1EDB;i
                                                thi&#x1EC7;u v&#x1EC1; trung t&#xE2;m</a></li>
                                        <li><a href="https://nhatran111.vn/thong-tin-chung/gia-tri-khac-biet">Gi&#xE1;
                                                tr&#x1ECB; kh&#xE1;c bi&#x1EC7;t</a></li>
                                        <li><a href="https://nhatran111.vn/thong-tin-chung/co-so-vat-chat">C&#x1A1;
                                                s&#x1EDF; v&#x1EAD;t ch&#x1EA5;t</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="https://nhatran111.vn/lich-khai-giang">L&#x1ECB;ch khai gi&#x1EA3;ng</a>
                            </li>
                            <li>
                                <a href="https://nhatran111.vn/khoa-hoc">Kh&#xF3;a h&#x1ECD;c</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="https://nhatran111.vn/khoa-hoc/khoa-hoc-nang-cap-1">Kh&#xF3;a
                                                h&#x1ECD;c N&#xE2;ng c&#x1EA5;p 1</a></li>
                                        <li><a href="https://nhatran111.vn/khoa-hoc/khoa-hoc-nang-cap-2">Kh&#xF3;a
                                                h&#x1ECD;c N&#xE2;ng c&#x1EA5;p 2</a></li>
                                        <li><a href="https://nhatran111.vn/khoa-hoc/khoa-hoc-pre-ielts">Kh&#xF3;a
                                                h&#x1ECD;c Pre-IELTS</a></li>
                                        <li><a href="https://nhatran111.vn/khoa-hoc/khoa-hoc-ielts-intermediate">Kh&#xF3;a
                                                h&#x1ECD;c IELTS INTERMEDIATE</a></li>
                                        <li><a href="https://nhatran111.vn/khoa-hoc/khoa-hoc-ielts-advanced">Kh&#xF3;a
                                                h&#x1ECD;c IELTS ADVANCED</a></li>
                                        <li><a href="https://nhatran111.vn/khoa-hoc/khoa-hoc-tieng-anh-trung-hoc-co-so">Kh&#xF3;a
                                                h&#x1ECD;c Ti&#x1EBF;ng Anh Trung h&#x1ECD;c C&#x1A1; s&#x1EDF;</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="https://nhatran111.vn/thanh-tich-hoc-tap">Th&#xE0;nh t&#xED;ch h&#x1ECD;c
                                    t&#x1EAD;p</a>
                            </li>
                            <li>
                                <a href="https://nhatran111.vn/thong-tin-chung/hoi-dap">H&#x1ECF;i &#x111;&#xE1;p</a>
                            </li>
                            <li>
                                <a href="https://nhatran111.vn/tin-tuc">Tin t&#x1EE9;c</a>
                            </li>
                            <li>
                                <a href="https://nhatran111.vn/lien-he">Li&#xEA;n h&#x1EC7;</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </nav>

    </div>
    <div class="uk-hidden@m tm-header-mobile">
        <div uk-sticky class="uk-navbar-container" sel-target=".uk-navbar-container" cls-active="uk-navbar-sticky">
            <div class="uk-container uk-container-expand">
                <nav class="uk-navbar" uk-navbar='{"container":".tm-header-mobile"}'>
                    <div class="uk-navbar-left">
                        <a href="#tm-dialog-mobile" uk-toggle class="uk-navbar-toggle uk-navbar-toggle-animate">
                            <div uk-navbar-toggle-icon="" class="uk-icon uk-navbar-toggle-icon"></div>
                        </a>
                    </div>
                    <div class="uk-navbar-center">
                        <a href="#" class="uk-logo"><img src="https://nhatran111.vn/img/tailieu/mobilelogo.png"></a>
                    </div>

                </nav>

            </div>
        </div>
        <div id="tm-dialog-mobile" class="uk-dropbar uk-dropbar-top"
            uk-drop='{"clsDrop":"uk-dropbar","flip":"false","container":".tm-header-mobile","target-y":".tm-header-mobile .uk-navbar-container","mode":"click","target-x":".tm-header-mobile .uk-navbar-container","stretch":true,"bgScroll":"false","animation":"reveal-top","animateOut":true,"duration":300,"toggle":"false"}'>
            <div>
                <ul class="uk-nav uk-nav-default uk-nav-accordion" uk-nav="toggle: > span.uk-nav-parent-icon">

                    <li>
                        <a href="https://nhatran111.vn/">Trang Ch&#x1EE7;</a>
                    </li>
                    <li class="uk-parent">
                        <a href="https://nhatran111.vn/thong-tin-chung/gioi-thieu-ve-trung-tam">Gi&#x1EDB;i
                            thi&#x1EC7;u</a>
                        <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                        <ul class="uk-nav-sub">
                            <li><a href="https://nhatran111.vn/thong-tin-chung/gioi-thieu-ve-trung-tam">Gi&#x1EDB;i
                                    thi&#x1EC7;u v&#x1EC1; trung t&#xE2;m</a></li>
                            <li><a href="https://nhatran111.vn/thong-tin-chung/gia-tri-khac-biet">Gi&#xE1; tr&#x1ECB;
                                    kh&#xE1;c bi&#x1EC7;t</a></li>
                            <li><a href="https://nhatran111.vn/thong-tin-chung/co-so-vat-chat">C&#x1A1; s&#x1EDF;
                                    v&#x1EAD;t ch&#x1EA5;t</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://nhatran111.vn/lich-khai-giang">L&#x1ECB;ch khai gi&#x1EA3;ng</a>
                    </li>
                    <li class="uk-parent">
                        <a href="https://nhatran111.vn/khoa-hoc">Kh&#xF3;a h&#x1ECD;c</a>
                        <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                        <ul class="uk-nav-sub">
                            <li><a href="https://nhatran111.vn/khoa-hoc/khoa-hoc-nang-cap-1">Kh&#xF3;a h&#x1ECD;c
                                    N&#xE2;ng c&#x1EA5;p 1</a></li>
                            <li><a href="https://nhatran111.vn/khoa-hoc/khoa-hoc-nang-cap-2">Kh&#xF3;a h&#x1ECD;c
                                    N&#xE2;ng c&#x1EA5;p 2</a></li>
                            <li><a href="https://nhatran111.vn/khoa-hoc/khoa-hoc-pre-ielts">Kh&#xF3;a h&#x1ECD;c
                                    Pre-IELTS</a></li>
                            <li><a href="https://nhatran111.vn/khoa-hoc/khoa-hoc-ielts-intermediate">Kh&#xF3;a
                                    h&#x1ECD;c IELTS INTERMEDIATE</a></li>
                            <li><a href="https://nhatran111.vn/khoa-hoc/khoa-hoc-ielts-advanced">Kh&#xF3;a h&#x1ECD;c
                                    IELTS ADVANCED</a></li>
                            <li><a href="https://nhatran111.vn/khoa-hoc/khoa-hoc-tieng-anh-trung-hoc-co-so">Kh&#xF3;a
                                    h&#x1ECD;c Ti&#x1EBF;ng Anh Trung h&#x1ECD;c C&#x1A1; s&#x1EDF;</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://nhatran111.vn/thanh-tich-hoc-tap">Th&#xE0;nh t&#xED;ch h&#x1ECD;c
                            t&#x1EAD;p</a>
                    </li>
                    <li>
                        <a href="https://nhatran111.vn/thong-tin-chung/hoi-dap">H&#x1ECF;i &#x111;&#xE1;p</a>
                    </li>
                    <li>
                        <a href="https://nhatran111.vn/tin-tuc">Tin t&#x1EE9;c</a>
                    </li>
                    <li>
                        <a href="https://nhatran111.vn/lien-he">Li&#xEA;n h&#x1EC7;</a>
                    </li>
                </ul>
                <div class="uk-margin">
                    <div>
                        <div><a class="uk-button uk-button-default" href="https://nhatran111.vn/dang-nhap">Đăng nhập</a>
                        </div>
                    </div>
                </div>

                <div class="uk-position-bottom-left uk-padding-small">
                    <div class="uk-text-small">© Copyright 2023 IELTS Cô Nhã</div>
                </div>
            </div>
        </div>
    </div>


    <!-- body dang nhap -->
    <div class="uk-section uk-section-default">
        <div class="uk-container">
            <div class="uk-child-width-auto" uk-grid>
                <div class="uk-width-expand uk-width-1-2@s">
                    <h2 class="ju-dangky uk-text-secondary">ĐĂNG NHẬP</h2>
                    <form enctype="multipart/form-data" 
                        method="post">
                        <div class="validation-summary-valid" data-valmsg-summary="true">
                            <ul>
                                <li style="display:none"></li>
                            </ul>
                        </div>
                        <table class="uk-table uk-margin-remove">
                            <tbody>
                                <tr class="uk-flex uk-flex-middle">
                                    <td class="uk-width-expand">
                                        Email
                                    </td>
                                    <td class="uk-width-medium">
                                        <input class="uk-input" data-val="true"
                                            data-val-email="The Email field is not a valid e-mail address."
                                            data-val-required="The Email field is required." id="email" name="email"
                                            placeholder="Nh&#x1EAD;p email" style="height: 34px; width: 315px;"
                                            type="text" value="" />
                                        <span class="field-validation-valid" data-valmsg-for="Email"
                                            data-valmsg-replace="true"></span>
                                    </td>
                                </tr>

                                <tr class="uk-flex uk-flex-middle">
                                    <td class="uk-width-expand">
                                        Mật khẩu
                                    </td>
                                    <td class="uk-width-medium">
                                        <input class="uk-input" data-val="true"
                                            data-val-required="The M&#x1EAD;t kh&#x1EA9;u field is required."
                                            id="password" name="password"
                                            placeholder="Nh&#x1EAD;p m&#x1EAD;t kh&#x1EA9;u"
                                            style="height: 34px; width: 315px;" type="password" value="" />
                                        <span class="field-validation-valid" data-valmsg-for="password"
                                            data-valmsg-replace="true"></span>
                                    </td>
                                </tr>
                                <tr class="uk-flex uk-flex-middle">
                                    <td class="uk-width-expand">
                                    </td>
                                    <td class="uk-width-medium uk-text-left">
                                        <button type="submit" class="uk-button uk-text-capitalize">Đăng nhập</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input name="__RequestVerificationToken" type="hidden"
                            value="CfDJ8DJVUA_itoZHrr1WGbtpNXGSDrQtbSnLiY1jrgH3ARuGBht-V4pBvT8TbS1yQtqdGIO9C60iG6QjKap56RYVSKHBQJ99BAiwDbjRTYUT5VorfysuhYZe2TKR_d0LgR4-o_tsr-aRbYbdY4YEi4t2A5I" />
                    </form>
                    <div>
                        <p class="ju-dangky-link">
                            <a style="text-decoration: none;" href="https://nhatran111.vn/quen-mat-khau">
                                Đăng ký
                            </a>

                            <a style="text-decoration: none;" href="https://nhatran111.vn/quen-mat-khau">
                                Quên mật khẩu
                            </a>
                        </p>
                    </div>
                </div>

                <div class="uk-width-1-2@s">
                    <div id="dia_chi">
                        <div>
                            <h4 class="uk-text-secondary uk-text-center">ĐỊA CHỈ</h4>

                            <div class="uk-padding-small">
                                <ul class="uk-list uk-list-large">
                                    <li><img class="uk-margin-small-right"
                                            src="https://admin.nhatran111.vn/eData/ckEditor/image/truso.png" /> <span
                                            class="uk-text-bold">Cơ sở 1 ( Trụ sở ch&iacute;nh)</span></li>
                                    <li><img class="uk-margin-small-right"
                                            src="https://admin.nhatran111.vn/eData/ckEditor/image/location.png" /><span
                                            class="uk-text-bold">Địa chỉ: </span> S&ocirc;́ 6 ngõ 1 ph&ocirc;́ Dịch
                                        Vọng H&acirc;̣u, C&acirc;̀u Gi&acirc;́y, HN</li>
                                    <li><img class="uk-margin-small-right"
                                            src="https://admin.nhatran111.vn/eData/ckEditor/image/phone.png" /><span
                                            class="uk-text-bold">Phone: </span> 024-37563521</li>
                                    <li><img class="uk-margin-small-right"
                                            src="https://admin.nhatran111.vn/eData/ckEditor/image/mail.png" /><span
                                            class="uk-text-bold">Email: </span> nhatran111@gmail.com</li>
                                </ul>
                            </div>

                            <div class="uk-margin-medium">
                                <h4 class="uk-text-secondary uk-text-center">BẢN ĐỒ CƠ SỞ 1 ( TRỤ SỞ CH&Iacute;NH )</h4>

                                <div class="map-canvas" id="map_canvas1">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="uk-section uk-section-muted uk-section-small">
            <div class="uk-container">

                <div class="footer-col-logo">
                    <img src="https://nhatran111.vn/img/Logo_NhaTran1 1.png">
                </div>
                <div class="tm-grid-expand uk-grid-margin uk-grid uk-child-width-expand@m" uk-grid>
                    <div>
                        <div>
                            <h4 class="uk-text-primary">Khoá học</h4>
                            <ul class="uk-list uk-list-disc">
                                <li><a class="uk-link-reset"
                                        href="https://nhatran111.vn/khoa-hoc/khoa-hoc-nang-cap-1">Kh&#xF3;a h&#x1ECD;c
                                        N&#xE2;ng c&#x1EA5;p 1</a></li>
                                <li><a class="uk-link-reset"
                                        href="https://nhatran111.vn/khoa-hoc/khoa-hoc-nang-cap-2">Kh&#xF3;a h&#x1ECD;c
                                        N&#xE2;ng c&#x1EA5;p 2</a></li>
                                <li><a class="uk-link-reset"
                                        href="https://nhatran111.vn/khoa-hoc/khoa-hoc-pre-ielts">Kh&#xF3;a h&#x1ECD;c
                                        Pre-IELTS</a></li>
                                <li><a class="uk-link-reset"
                                        href="https://nhatran111.vn/khoa-hoc/khoa-hoc-ielts-intermediate">Kh&#xF3;a
                                        h&#x1ECD;c IELTS INTERMEDIATE</a></li>
                                <li><a class="uk-link-reset"
                                        href="https://nhatran111.vn/khoa-hoc/khoa-hoc-ielts-advanced">Kh&#xF3;a
                                        h&#x1ECD;c IELTS ADVANCED</a></li>
                                <li><a class="uk-link-reset"
                                        href="https://nhatran111.vn/khoa-hoc/khoa-hoc-tieng-anh-trung-hoc-co-so">Kh&#xF3;a
                                        h&#x1ECD;c Ti&#x1EBF;ng Anh Trung h&#x1ECD;c C&#x1A1; s&#x1EDF;</a></li>
                            </ul>
                        </div>
                        <a class="hot-line" href="tel:0917 511 052">
                            <div>
                                <div id="call-button" class="uk-card uk-card-primary uk-flex uk-flex-middle"
                                    style="width:fit-content">
                                    <div>
                                        <img src="https://nhatran111.vn/img/call.png">
                                    </div>
                                    <div class="uk-text-center">
                                        <div class="uk-h5 uk-margin-remove">
                                            Hotline
                                        </div>
                                        <div class="uk-h4 uk-margin-remove">
                                            0917 511 052
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="uk-width-1-4@s">
                        <div>
                            <h4 class="uk-text-primary">Thông tin</h4>
                            <ul class="uk-list">
                                <li><a class="uk-link-reset"
                                        href="https://nhatran111.vn/thong-tin-chung/gioi-thieu-ve-trung-tam">Gi&#x1EDB;i
                                        thi&#x1EC7;u v&#x1EC1; trung t&#xE2;m</a></li>
                                <li><a class="uk-link-reset"
                                        href="https://nhatran111.vn/thong-tin-chung/gia-tri-khac-biet">Gi&#xE1;
                                        tr&#x1ECB; kh&#xE1;c bi&#x1EC7;t</a></li>
                                <li><a class="uk-link-reset"
                                        href="https://nhatran111.vn/thong-tin-chung/co-so-vat-chat">C&#x1A1; s&#x1EDF;
                                        v&#x1EAD;t ch&#x1EA5;t</a></li>
                                <li><a class="uk-link-reset" href="https://nhatran111.vn/lich-khai-giang">L&#x1ECB;ch
                                        khai gi&#x1EA3;ng</a></li>
                                <li><a class="uk-link-reset" href="https://nhatran111.vn/thanh-tich-hoc-tap">Th&#xE0;nh
                                        t&#xED;ch h&#x1ECD;c t&#x1EAD;p</a></li>
                                <li><a class="uk-link-reset"
                                        href="https://nhatran111.vn/thong-tin-chung/hoi-dap">H&#x1ECF;i
                                        &#x111;&#xE1;p</a></li>
                                <li><a class="uk-link-reset" href="https://nhatran111.vn/tin-tuc">Tin t&#x1EE9;c</a>
                                </li>
                                <li><a class="uk-link-reset" href="https://nhatran111.vn/lien-he">Li&#xEA;n
                                        h&#x1EC7;</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <div>
                            <h4 class="uk-text-primary">Thông tin liên hệ</h4>

                            <ul class="uk-list">
                                <li><a class="uk-text-secondary" href="https://nhatran111.vn/lien-he"><img
                                            class="uk-margin-small-right"
                                            src="https://admin.nhatran111.vn/eData/ckEditor/image/truso.png" />Cơ sở 1 (
                                        Trụ sở chính )</a></li>
                                <li><a class="uk-link-reset" href="https://nhatran111.vn/lien-he"><img
                                            class="uk-margin-small-right"
                                            src="https://admin.nhatran111.vn/eData/ckEditor/image/phone.png" />Phone:
                                        024-37563521</a></li>
                                <li><a class="uk-link-reset" href="https://nhatran111.vn/lien-he"><img
                                            class="uk-margin-small-right"
                                            src="https://admin.nhatran111.vn/eData/ckEditor/image/mail.png" />Email:
                                        nhatran111@gmail.com</a></li>
                                <li><a class="uk-link-reset" href="https://nhatran111.vn/lien-he"><img
                                            class="uk-margin-small-right"
                                            src="https://admin.nhatran111.vn/eData/ckEditor/image/location.png" />Địa
                                        chỉ: Số 6 ngõ 1 phố Dịch Vọng Hậu, Cầu Giấy, HN</a></li>
                            </ul>

                            <ul class="uk-list">
                                <li><a class="uk-text-secondary" href="https://nhatran111.vn/lien-he"><img
                                            class="uk-margin-small-right"
                                            src="https://admin.nhatran111.vn/eData/ckEditor/image/truso.png" />Cơ sở 2
                                    </a></li>
                                <li><a class="uk-link-reset" href="https://nhatran111.vn/lien-he"><img
                                            class="uk-margin-small-right"
                                            src="https://admin.nhatran111.vn/eData/ckEditor/image/phone.png" />Phone:
                                        087-8869266</a></li>
                                <li><a class="uk-link-reset" href="https://nhatran111.vn/lien-he"><img
                                            class="uk-margin-small-right"
                                            src="https://admin.nhatran111.vn/eData/ckEditor/image/mail.png" />Email:
                                        nhatran111@gmail.com</a></li>
                                <li><a class="uk-link-reset" href="https://nhatran111.vn/lien-he"><img
                                            class="uk-margin-small-right"
                                            src="https://admin.nhatran111.vn/eData/ckEditor/image/location.png" />Địa
                                        chỉ: Số 9 ngõ 1 phố Nguyễn Thị Duệ, Cầu Giấy, HN</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div>
                    <img src="https://counter8.fcs.ovh/private/freecounterstat.php?c=dacpfdc5n8qqcuyxsa3qsn6mfbhj5nlc"
                        border="0" title="Số lượng truy cập Website" alt="Số lượng truy cập Website">
                </div>
                <div id="social" uk-grid class="uk-child-width-1-1 uk-grid-column-collapse uk-grid-row-small">
                    <a href="tel:024 37563 521">
                        <div>
                            <div class="item">
                                <img src="https://nhatran111.vn/img/social/Call.png" alt="Gọi điện">
                            </div>
                        </div>
                    </a>
                    <a href="mailto:nhatran111@gmail.com" target="_blank">
                        <div>
                            <div class="item">
                                <img src="https://nhatran111.vn/img/social/mail.png" alt="Gửi mail">
                            </div>
                        </div>
                    </a>
                    <a href="https://zalo.me/78174609764887803" target="_blank">
                        <div>
                            <div class="item">
                                <img src="https://nhatran111.vn/img/social/Group 45775.png" alt="Zalo">
                            </div>
                        </div>
                    </a>
                    <a href="https://www.facebook.com/nhatran111" target="_blank">
                        <div>
                            <div class="item">
                                <img src="https://nhatran111.vn/img/social/Facebook_Logo_(2019) 1.png" alt="Facebook">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="dangkythithu">
                    <img class="free-thithu" src="https://nhatran111.vn/img/Group 47158.png" alt="">
                    <div class="social-thithu">
                        <a class="" style="text-decoration: none;" href="https://nhatran111.vn/dang-ky-thi-xep-lop">
                            Đăng ký thi xếp lớp
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script
        src="https://nhatran111.vn/lib/uikit/js/uikit.min.js?v=Ggf9_fxyOI8rkWH8r3gPXNKk17NfE2M_-UGY_SOdOW0"></script>
    <script
        src="https://nhatran111.vn/lib/uikit/js/uikit-icons.min.js?v=Jw3sVOJVDTo_g_uCv44IQOTcuR02l1SRrTlDByxK73E"></script>
    <script src="https://nhatran111.vn/js/site.js?v=vhzlZlPbyZOsGprJqASXufC3rtBIsCl6K9Qd30Fyx4w"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoH_EFDIF2x0Ndq-Iy9oRjMpkFaZsaKDU"
        type="text/javascript"></script>
    <script type="text/javascript">

        function DisplayGoogleMap() {
            var myLatlng1 = new google.maps.LatLng(21.033246, 105.788114);
            var mapOptions1 = {
                zoom: 19,
                center: myLatlng1,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: 0
            };


            var map1 = new google.maps.Map(document.getElementById('map_canvas1'), mapOptions1);

            var contentString1 = "<table><tr><th>Trung Tâm Tiếng Anh Nhã Trần 111</th></tr><tr><td>Cơ sở 1 (trụ sở chính): Số 6 ngõ 1 phố Dịch Vọng Hậu, Cầu Giấy, Hà Nội</td></tr></table>";


            var infowindow1 = new google.maps.InfoWindow({
                content: contentString1
            });

            var marker1 = new google.maps.Marker({
                position: myLatlng1,
                map: map1,
                title: 'Trung Tâm Tiếng Anh Nhã Trần 111'
            });

            infowindow1.open(map1, marker1);
        }

        window.onload = (event) => {
            DisplayGoogleMap();
        };
    </script>


</body>

<!-- Mirrored from nhatran111.vn/dang-nhap by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 May 2024 02:40:24 GMT -->

</html>
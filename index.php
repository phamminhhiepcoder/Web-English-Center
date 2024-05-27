<?php
session_start();
include 'connect.php';

if ($_SESSION['loggedinClient'] === false) {
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=100">
    <title>Trung tâm tiếng anh Vimaru</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Vimaru Ielts" />
    <meta name="keywords" content="Vimaru Ielts" />
    <meta name="author" content="quan85689@st.vimaru.edu.vn" />
    <meta name="robots" content="index,follow">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link href="lib/uikit/css/uikit.css" rel="stylesheet" type="text/css">
    <link href="css/site.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Header -->
    <div class="tm-header uk-visible@m">
    <div class="uk-container">
        <div uk-navbar class="logo-header">
            <div class="uk-navbar-left">
                <a class="uk-logo" href="index.html">
                    <img src="img/vmu_logo.png" width="210" height="auto">
                </a>
            </div>
            <div class="uk-navbar-right">
                <div class="uk-child-width-auto uk-grid-small" uk-grid>
                    <div>
                        <a href="tel:024 3756 3521" class="uk-h3">
                            <img src="img/Vector.png">024 3756 3521
                        </a>
                    </div>
                    <div>
                        <?php
                        $loggedInClient = $_SESSION['loggedInClient']; 
                        $email = $_SESSION['email']; 

                        if ($loggedInClient) {
                            echo 'Xin chào ' . htmlspecialchars($email);
                        } else {
                            echo '<a class="uk-button uk-button-default" href="login.php">Đăng nhập</a>';
                        }
                        ?>
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
                            <li class="uk-active">
                                <a href="index.html">Trang Ch&#x1EE7;</a>
                            </li>
                            <li>
                                <a href="thong-tin-chung/gioi-thieu-ve-trung-tam.html">Gi&#x1EDB;i thi&#x1EC7;u</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="thong-tin-chung/gioi-thieu-ve-trung-tam.html">Gi&#x1EDB;i
                                                thi&#x1EC7;u v&#x1EC1; trung t&#xE2;m</a></li>
                                        <li><a href="thong-tin-chung/gia-tri-khac-biet.html">Gi&#xE1; tr&#x1ECB;
                                                kh&#xE1;c bi&#x1EC7;t</a></li>
                                        <li><a href="thong-tin-chung/co-so-vat-chat.html">C&#x1A1; s&#x1EDF; v&#x1EAD;t
                                                ch&#x1EA5;t</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="lich-khai-giang.html">L&#x1ECB;ch khai gi&#x1EA3;ng</a>
                            </li>
                            <li>
                                <a href="khoa-hoc.html">Kh&#xF3;a h&#x1ECD;c</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="khoa-hoc/khoa-hoc-nang-cap-1.html">Kh&#xF3;a h&#x1ECD;c N&#xE2;ng
                                                c&#x1EA5;p 1</a></li>
                                        <li><a href="khoa-hoc/khoa-hoc-nang-cap-2.html">Kh&#xF3;a h&#x1ECD;c N&#xE2;ng
                                                c&#x1EA5;p 2</a></li>
                                        <li><a href="khoa-hoc/khoa-hoc-pre-ielts.html">Kh&#xF3;a h&#x1ECD;c
                                                Pre-IELTS</a></li>
                                        <li><a href="khoa-hoc/khoa-hoc-ielts-intermediate.html">Kh&#xF3;a h&#x1ECD;c
                                                IELTS INTERMEDIATE</a></li>
                                        <li><a href="khoa-hoc/khoa-hoc-ielts-advanced.html">Kh&#xF3;a h&#x1ECD;c IELTS
                                                ADVANCED</a></li>
                                        <li><a href="khoa-hoc/khoa-hoc-tieng-anh-trung-hoc-co-so.html">Kh&#xF3;a
                                                h&#x1ECD;c Ti&#x1EBF;ng Anh Trung h&#x1ECD;c C&#x1A1; s&#x1EDF;</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="thanh-tich-hoc-tap.html">Th&#xE0;nh t&#xED;ch h&#x1ECD;c t&#x1EAD;p</a>
                            </li>
                            <li>
                                <a href="thong-tin-chung/hoi-dap.html">H&#x1ECF;i &#x111;&#xE1;p</a>
                            </li>
                            <li>
                                <a href="tin-tuc.html">Tin t&#x1EE9;c</a>
                            </li>
                            <li>
                                <a href="lien-he.html">Li&#xEA;n h&#x1EC7;</a>
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
                        <a href="#" class="uk-logo"><img src="img/tailieu/mobilelogo.png"></a>
                    </div>

                </nav>

            </div>
        </div>
        <div id="tm-dialog-mobile" class="uk-dropbar uk-dropbar-top"
            uk-drop='{"clsDrop":"uk-dropbar","flip":"false","container":".tm-header-mobile","target-y":".tm-header-mobile .uk-navbar-container","mode":"click","target-x":".tm-header-mobile .uk-navbar-container","stretch":true,"bgScroll":"false","animation":"reveal-top","animateOut":true,"duration":300,"toggle":"false"}'>
            <div>
                <ul class="uk-nav uk-nav-default uk-nav-accordion" uk-nav="toggle: > span.uk-nav-parent-icon">

                    <li>
                        <a href="index.html">Trang Ch&#x1EE7;</a>
                    </li>
                    <li class="uk-parent">
                        <a href="thong-tin-chung/gioi-thieu-ve-trung-tam.html">Gi&#x1EDB;i thi&#x1EC7;u</a>
                        <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                        <ul class="uk-nav-sub">
                            <li><a href="thong-tin-chung/gioi-thieu-ve-trung-tam.html">Gi&#x1EDB;i thi&#x1EC7;u
                                    v&#x1EC1; trung t&#xE2;m</a></li>
                            <li><a href="thong-tin-chung/gia-tri-khac-biet.html">Gi&#xE1; tr&#x1ECB; kh&#xE1;c
                                    bi&#x1EC7;t</a></li>
                            <li><a href="thong-tin-chung/co-so-vat-chat.html">C&#x1A1; s&#x1EDF; v&#x1EAD;t
                                    ch&#x1EA5;t</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="lich-khai-giang.html">L&#x1ECB;ch khai gi&#x1EA3;ng</a>
                    </li>
                    <li class="uk-parent">
                        <a href="khoa-hoc.html">Kh&#xF3;a h&#x1ECD;c</a>
                        <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                        <ul class="uk-nav-sub">
                            <li><a href="khoa-hoc/khoa-hoc-nang-cap-1.html">Kh&#xF3;a h&#x1ECD;c N&#xE2;ng c&#x1EA5;p
                                    1</a></li>
                            <li><a href="khoa-hoc/khoa-hoc-nang-cap-2.html">Kh&#xF3;a h&#x1ECD;c N&#xE2;ng c&#x1EA5;p
                                    2</a></li>
                            <li><a href="khoa-hoc/khoa-hoc-pre-ielts.html">Kh&#xF3;a h&#x1ECD;c Pre-IELTS</a></li>
                            <li><a href="khoa-hoc/khoa-hoc-ielts-intermediate.html">Kh&#xF3;a h&#x1ECD;c IELTS
                                    INTERMEDIATE</a></li>
                            <li><a href="khoa-hoc/khoa-hoc-ielts-advanced.html">Kh&#xF3;a h&#x1ECD;c IELTS ADVANCED</a>
                            </li>
                            <li><a href="khoa-hoc/khoa-hoc-tieng-anh-trung-hoc-co-so.html">Kh&#xF3;a h&#x1ECD;c
                                    Ti&#x1EBF;ng Anh Trung h&#x1ECD;c C&#x1A1; s&#x1EDF;</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="thanh-tich-hoc-tap.html">Th&#xE0;nh t&#xED;ch h&#x1ECD;c t&#x1EAD;p</a>
                    </li>
                    <li>
                        <a href="thong-tin-chung/hoi-dap.html">H&#x1ECF;i &#x111;&#xE1;p</a>
                    </li>
                    <li>
                        <a href="tin-tuc.html">Tin t&#x1EE9;c</a>
                    </li>
                    <li>
                        <a href="lien-he.html">Li&#xEA;n h&#x1EC7;</a>
                    </li>
                </ul>
                <div class="uk-margin">
                    <div>
                        <div><a class="uk-button uk-button-default" href="dang-nhap.html">Đăng nhập</a></div>
                    </div>
                </div>

                <div class="uk-position-bottom-left uk-padding-small">
                    <div class="uk-text-small">© Copyright 2024 VMU IELTS</div>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-section-default uk-section uk-padding-remove">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
            uk-slideshow="ratio: 1440:720; animation: push">
            <ul class="uk-slideshow-items">
                <li>
                    <img src="eData/Banner/banner 3 1.png" alt="Title" uk-cover>
                <li>
                    <img src="eData/Banner/banner 3 1.png" alt="Title" uk-cover>
                </li>
                <li>
                    <img src="eData/Banner/banner 3 1.png" alt="Title" uk-cover>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                uk-slideshow-item="next"></a>

        </div>
    </div>

    <!-- Main -->
    <div class="uk-section-default uk-section"
        uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-slide-bottom-medium; delay: 300;">
        <div class="uk-container">
            <div class="tm-grid-expand uk-grid-margin uk-child-width-1-1 uk-grid" uk-scrollspy-class>
                <div class="uk-text-center uk-margin-medium-bottom">
                    <h1 class="uk-text-secondary uk-margin-remove">GIỚI THIỆU VỀ TRUNG TÂM</h1>
                    <p class="uk-margin-remove uk-text-primary">Học tập trong niềm vui và đam mê</p>
                </div>
                <div>
                    <div class="uk-child-width-1-2@s uk-margin-medium" uk-grid>
                        <div>
                            <p>Trong nhiều năm qua, với kho&aacute; học IELTS v&agrave; c&aacute;c chương tr&igrave;nh
                                tiếng Anh bổ trợ, c&ocirc; Nh&atilde; (thạc sĩ chuy&ecirc;n ng&agrave;nh giảng dạy
                                ng&ocirc;n ngữ tại đại học Queensland, Australia) c&ugrave;ng với c&aacute;c giảng
                                vi&ecirc;n tiếng Anh của Đại học Ngoại ngữ, Đại học Quốc gia, Đại học Ngoại thương
                                v&agrave; c&aacute;c tổ chức gi&aacute;o dục uy t&iacute;n tại H&agrave; Nội đ&atilde;
                                thắp l&ecirc;n đam m&ecirc; học ngoại ngữ cho h&agrave;ng ng&agrave;n học sinh, sinh
                                vi&ecirc;n, người đi l&agrave;m. Rất nhiều trong số n&agrave;y đ&atilde; đạt được 7.5
                                đến 8.5 trong c&aacute;c kỳ thi IELTS.</p>

                            <p>Ngo&agrave;i ra với chương tr&igrave;nh tiếng Anh cho học sinh cấp 2 được thiết kế
                                h&agrave;i ho&agrave; giữa ngữ ph&aacute;p v&agrave; bốn kỹ năng ...</p>

                            <a class="ju_gioithieu uk-button uk-button-text uk-text-primary"
                                href="thong-tin-chung/gioi-thieu-ve-trung-tam.html">
                                <span uk-icon="arrow-right" class="uk-text-bold uk-margin-small-right"></span>Read
                                More...
                            </a>

                        </div>
                        <div>
                            <img src="img/gioithieu.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-grid-expand uk-child-width-1-1 uk-grid uk-panel">
                <div class="uk-text-center">
                    <h2 class="uk-text-secondary uk-margin-remove">KHÓA HỌC</h2>
                    <p class=" uk-margin-remove uk-text-primary">
                        Theo chương trình chuẩn đã áp dụng giảng dạy nhiều năm
                    </p>
                </div>

                <div uk-scrollspy="cls: uk-animation-slide-bottom; target: .ju-test; delay: 300; repeat: true">
                    <div id="ju-khoa-hoc"
                        class="uk-child-width-1-5@s uk-child-width-1-5 uk-grid-small uk-grid-match uk-text-center uk-margin"
                        uk-grid>
                        <div class="ju-kh1 ju-test">
                            <div class="uk-panel">
                                <div class="">
                                    <img src="eData/Menu/m71.png" style="height: 90;"
                                        alt="ApplicationCore.Entities.CMenu?Title">
                                </div>
                                <div
                                    class="uk-card uk-card-default uk-card-body uk-padding-small uk-background-secondary">
                                    <div>
                                        <h6 class="uk-text-muted">KH&#xD3;A H&#x1ECC;C N&#xC2;NG C&#x1EA4;P 1</h6>
                                        <p class="uk-text-bold uk-text-muted"><b style="color: #3D84E6;">25 buổi</b></p>

                                    </div>
                                </div>
                                <a class="uk-position-cover" href="khoa-hoc/khoa-hoc-nang-cap-1.html"></a>
                            </div>
                        </div>
                        <div class="ju-kh2 ju-test">
                            <div class="uk-panel">
                                <div class=""><img src="eData/Menu/m21.png"
                                        alt="Kh&#xF3;a h&#x1ECD;c N&#xE2;ng c&#x1EA5;p 2"></div>
                                <div
                                    class="uk-card uk-card-default uk-card-body uk-padding-small uk-background-secondary">
                                    <div>
                                        <h6 class="uk-text-muted">KH&#xD3;A H&#x1ECC;C N&#xC2;NG C&#x1EA4;P 2</h6>
                                        <p class="uk-text-bold uk-text-muted"><b style="color: #3D84E6;">25 buổi</b></p>

                                        <div id="gtx-trans" style="position: absolute; left: 28px; top: -4.8px;">
                                            <div class="gtx-trans-icon">&nbsp;</div>
                                        </div>

                                    </div>
                                </div>
                                <a class="uk-position-cover" href="khoa-hoc/khoa-hoc-nang-cap-2.html"></a>
                            </div>
                        </div>
                        <div class="ju-kh3 ju-test">
                            <div class="uk-panel">
                                <div class=""><img src="eData/Menu/m41.png"
                                        alt="Kh&#xF3;a h&#x1ECD;c Pre-IELTS"></div>
                                <div
                                    class="uk-card uk-card-default uk-card-body uk-padding-small uk-background-secondary">
                                    <div>
                                        <h6 class="uk-text-muted">KH&#xD3;A H&#x1ECC;C PRE-IELTS</h6>
                                        <p class="uk-text-bold uk-text-muted"><b style="color: #3D84E6;">25 buổi</b></p>

                                        <div id="gtx-trans" style="position: absolute; left: 4px; top: 38.6px;">
                                            <div class="gtx-trans-icon">&nbsp;</div>
                                        </div>

                                    </div>
                                </div>
                                <a class="uk-position-cover" href="khoa-hoc/khoa-hoc-pre-ielts.html"></a>
                            </div>
                        </div>
                        <div class="ju-kh4 ju-test">
                            <div class="uk-panel">
                                <div class=""><img src="eData/Menu/m61.png"
                                        alt="Kh&#xF3;a h&#x1ECD;c IELTS INTERMEDIATE"></div>
                                <div
                                    class="uk-card uk-card-default uk-card-body uk-padding-small uk-background-secondary">
                                    <div>
                                        <h6 class="uk-text-muted">KH&#xD3;A H&#x1ECC;C IELTS INTERMEDIATE</h6>
                                        <p class="uk-text-bold uk-text-muted"><b style="color: #3D84E6;">27 buổi</b></p>

                                    </div>
                                </div>
                                <a class="uk-position-cover" href="khoa-hoc/khoa-hoc-ielts-intermediate.html"></a>
                            </div>
                        </div>

                        <div class="ju-kh5 ju-test">
                            <div class="uk-panel">
                                <div class=""><img src="eData/Menu/m91.png"
                                        alt="Kh&#xF3;a h&#x1ECD;c IELTS ADVANCED"></div>
                                <div
                                    class="uk-card uk-card-default uk-card-body uk-padding-small uk-background-secondary">
                                    <div>
                                        <h6 class="uk-text-muted">KH&#xD3;A H&#x1ECC;C IELTS ADVANCED</h6>
                                        <p class="uk-text-bold uk-text-muted"><b style="color: #3D84E6;">34 buổi</b></p>

                                    </div>
                                </div>
                                <a class="uk-position-cover" href="khoa-hoc/khoa-hoc-ielts-advanced.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-text-center uk-position-bottom-center">
                    <h4 class="uk-text-secondary uk-margin-remove" style="font-size:18px">LỘ TRÌNH HỌC IELTS CỦA TRUNG
                        TÂM</h4>
                </div>
            </div>
            <div class="tm-grid-expand uk-grid-margin uk-child-width-1-1 " uk-grid>
                <div class="uk-text-center ">
                    <h3 class="uk-text-secondary ">KHÓA HỌC TIẾNG ANH TRUNG HỌC CƠ SỞ</h3>
                    <p class="uk-margin-remove uk-text-primary">
                        Giúp các em có thêm kiến thức nền để sử dụng song
                        song với kiến thức ở trường học
                    </p>
                </div>
                <div>
                    <div class="uk-child-width-1-4@m uk-child-width-1-2" id="ju-kh-ta" uk-grid=""
                        uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">
                        <div>
                            <div class="uk-card uk-card-default uk-text-center">
                                <div class="uk-card-body uk-padding-remove" id="lop6">
                                    <p class="uk-card-title uk-margin-remove"><a
                                            href="khoa-hoc/khoa-hoc-tieng-anh-trung-hoc-co-so.html">Lớp 6</a></p>
                                </div>

                                <div class="uk-card-media-bottom uk-text-center uk-cover-container uk-transition-toggle"
                                    style="height: 140px;"><a
                                        href="khoa-hoc/khoa-hoc-tieng-anh-trung-hoc-co-so.html"><img alt=""
                                            class="uk-transition-fade uk-transition-opaque"
                                            src="eData/ckEditor/image/Frame47263.png"
                                            uk-cover="" /> <img class="uk-transition-fade"
                                            src="eData/ckEditor/image/anh2.jpg" uk-cover="" />
                                    </a></div>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-text-center">
                                <div class="uk-card-body uk-padding-remove" id="lop7">
                                    <p class="uk-card-title uk-margin-remove"><a
                                            href="khoa-hoc/khoa-hoc-tieng-anh-trung-hoc-co-so.html">Lớp 7</a></p>
                                </div>

                                <div class="uk-card-media-bottom  uk-cover-container uk-transition-toggle"
                                    style="height: 140px;"><a
                                        href="khoa-hoc/khoa-hoc-tieng-anh-trung-hoc-co-so.html"><img alt=""
                                            class="uk-transition-opaque"
                                            src="eData/ckEditor/image/Frame47263(1).png"
                                            uk-cover="" /> <img class="uk-transition-fade"
                                            src="eData/ckEditor/image/anh2.jpg" uk-cover="" />
                                    </a></div>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-text-center">
                                <div class="uk-card-body uk-padding-remove" id="lop8">
                                    <p class="uk-card-title uk-margin-remove"><a
                                            href="khoa-hoc/khoa-hoc-tieng-anh-trung-hoc-co-so.html">Lớp 8</a></p>
                                </div>

                                <div class="uk-card-media-bottom  uk-cover-container uk-transition-toggle"
                                    style="height: 140px;"><a
                                        href="khoa-hoc/khoa-hoc-tieng-anh-trung-hoc-co-so.html"><img alt=""
                                            class="uk-transition-opaque"
                                            src="eData/ckEditor/image/Frame47263(2).png"
                                            uk-cover="" /> <img class="uk-transition-fade"
                                            src="eData/ckEditor/image/anh2.jpg" uk-cover="" />
                                    </a></div>
                            </div>
                        </div>

                        <div>
                            <div class="uk-card uk-card-default uk-text-center">
                                <div class="uk-card-body uk-padding-remove" id="lop9">
                                    <p class="uk-card-title uk-margin-remove"><a
                                            href="khoa-hoc/khoa-hoc-tieng-anh-trung-hoc-co-so.html">Lớp 9</a></p>
                                </div>

                                <div class="uk-card-media-bottom uk-cover-container uk-transition-toggle"
                                    style="height: 140px;"><a
                                        href="khoa-hoc/khoa-hoc-tieng-anh-trung-hoc-co-so.html"><img alt=""
                                            class="uk-transition-opaque"
                                            src="eData/ckEditor/image/Frame47263(3).png"
                                            uk-cover="" /> <img class="uk-transition-fade"
                                            src="eData/ckEditor/image/anh2.jpg" uk-cover="" />
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Lịch khai giảng  -->
            <div class="tm-grid-expand uk-child-width-1-1 uk-grid uk-margin-large-top" uk-grid>
                <div class="uk-text-center">
                    <h2 class="uk-text-secondary uk-margin-small-bottom">LỊCH KHAI GIẢNG </h2>
                    <p class="uk-margin-remove uk-text-primary">
                        Rất nhiều lớp học mở liên tục các ngày trong tháng
                    </p>
                </div>
                <div>
                    <div id="ju_khai_giang" class="uk-child-width-1-4@s uk-child-width-1-2 uk-grid-medium"
                        uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 100; repeat: true"
                        uk-grid>
                        <div id="modal-khnc-8" class="modal-khnc uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button
                                    class="uk-modal-close-default" type="button" uk-close=""></button>
                                <div><img alt="" src="eData/ckEditor/Lichhoc_detail.png"
                                        style="width: 537px; height: 365px;" /></div>

                                <div class="modal-khnc-body">
                                    <h2>Kho&aacute; học IELTS ADVANCED</h2>

                                    <hr class="uk-divider-small" />
                                    <div class="uk-width-1-1" uk-grid="">
                                        <div class="uk-width-small">
                                            <p>Lớp học</p>

                                            <p>Khai giảng</p>

                                            <p>Lịch học</p>

                                            <p>H&igrave;nh thức học</p>

                                            <p>Địa điểm học</p>
                                        </div>

                                        <div class="uk-width-expand">
                                            <p>IELTS ADVANCED - 24C</p>

                                            <p>19/5/2024</p>

                                            <p>18h ng&agrave;y Thứ Năm&nbsp;và 17h30 Chủ Nh&acirc;̣t</p>

                                            <p>Học trực tiếp tại lớp</p>

                                            <p>296 Thiên Lôi, Hải Phòng</p>
                                        </div>
                                    </div>

                                    <p>&nbsp;</p>

                                    <p>H&agrave;ng tuần&nbsp;<strong>trung t&acirc;m VMU</strong>&nbsp;sẽ tổ chức thi
                                        đầu v&agrave;o c&aacute;c lớp&nbsp;<strong>IELTS,
                                            Pre-IELTS</strong>&nbsp;&nbsp;tại địa chỉ số nh&agrave;&nbsp;<strong>6 ngõ
                                            1 ph&ocirc;́ Dịch Vọng H&acirc;̣u C&acirc;̀u gi&acirc;́y Hà
                                            n&ocirc;̣i.&nbsp;</strong>C&aacute;c bạn nhấn v&agrave;o
                                        n&uacute;t<strong>&nbsp;&quot;ĐĂNG K&Yacute; THI XẾP
                                            LỚP&quot;&nbsp;</strong>ph&iacute;a dưới b&ecirc;n phải m&agrave;n
                                        h&igrave;nh để đăng k&yacute; thi.</p>

                                    <p>Kết quả thi đầu v&agrave;o sẽ được th&ocirc;ng b&aacute;o tới cho c&aacute;c bạn
                                        trong v&ograve;ng tuần tiếp theo qua Email m&agrave; bạn đ&atilde; đăng
                                        k&yacute;.</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng: dưới 3.5: em đỗ kh&oacute;a N&acirc;ng cấp I (25
                                        buổi, bao gồm 2 buổi thi giữa kỳ v&agrave; cuối kỳ)</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng:Từ&nbsp;3.5 đến 4.9: em đỗ
                                        kh&oacute;a&nbsp;N&acirc;ng cấp II (25 buổi, bao gồm 2 buổi thi giữa kỳ
                                        v&agrave; cuối kỳ)</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng:Từ&nbsp;5 đến 5.9 v&agrave; điểm viết kh&ocirc;ng
                                        dưới 5.0: em đỗ kh&oacute;a&nbsp;PRE IELTS (25 buổi bao gồm 2 buổi thi giữa kỳ
                                        v&agrave; cuối kỳ)</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng:Từ&nbsp;6.0 đến 6.4 v&agrave; điểm viết
                                        kh&ocirc;ng dưới 6.0: em đỗ kh&oacute;a IELTS INTERMEDIATE (27 buổi học, bao gồm
                                        2 buổi thi giữa kỳ v&agrave; cuối kỳ).</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng: tr&ecirc;n 6.5 v&agrave; điểm viết kh&ocirc;ng
                                        dưới 6.5: em đỗ kh&oacute;a IELTS ADVANCED (34 buổi, bao gồm 2 buổi thi giữa kỳ
                                        v&agrave; cuối kỳ) (v&agrave; c&aacute;c buổi thi MOCK TEST với 2 kỹ năng đọc,
                                        nghe)</p>

                                    <p>Ngo&agrave;i việc đăng k&yacute; thi xếp lớp online, bạn c&oacute; thể chọn
                                        c&aacute;ch kh&aacute;c l&agrave; đăng k&yacute; qua điện thoại với số
                                        m&aacute;y
                                        :<strong>&nbsp;024.37563521&nbsp;</strong>v&agrave;<strong>&nbsp;0917511052&nbsp;</strong>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div style="cursor:pointer;" uk-toggle="target: #modal-khnc-8">
                            <div class="uk-card uk-transition-toggle">
                                <div class="uk-card-media-top uk-cover-container">
                                    <img src="eData/OpeningCalendar/KHOI8608%20-%20Copy%20(2).jpg"
                                        alt="Kh&#xF3;a h&#x1ECD;c IELTS ADVANCED" uk-cover class="uk-transition-opaque">
                                    <img src="eData/OpeningCalendar/KHOI8608%20-%20Copy%20(2).jpg"
                                        class="uk-transition-fade" uk-cover>
                                </div>
                                <div class="">
                                    <h5 class="uk-card-title">Kh&#xF3;a h&#x1ECD;c IELTS ADVANCED</h5>
                                </div>
                            </div>
                        </div>
                        <div id="modal-khnc-7" class="modal-khnc uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button
                                    class="uk-modal-close-default" type="button" uk-close=""></button>
                                <div><img alt="" src="eData/ckEditor/Lichhoc_detail.png"
                                        style="width: 537px; height: 365px;" /></div>

                                <div class="modal-khnc-body">
                                    <h2>Kho&aacute; học IELTS INTERMEDIATE</h2>

                                    <hr class="uk-divider-small" />
                                    <div class="uk-width-1-1" uk-grid="">
                                        <div class="uk-width-small">
                                            <p>Lớp học</p>

                                            <p>Khai giảng</p>

                                            <p>Lịch học</p>

                                            <p>H&igrave;nh thức học</p>

                                            <p>Địa điểm học</p>
                                        </div>

                                        <div class="uk-width-expand">
                                            <p>IELTS INTERMEDIATE- 24K</p>

                                            <p>15/5/2024</p>

                                            <p>18h ng&agrave;y Thứ Tư&nbsp;v&agrave; 14h chiều Chủ Nhật</p>

                                            <p>Học trực tiếp tại lớp</p>

                                            <p>52 Lương Khánh Thiện, Hải Phòng</p>
                                        </div>
                                    </div>

                                    <p>H&agrave;ng tuần&nbsp;<strong>trung t&acirc;m VMU</strong>&nbsp;sẽ tổ chức thi
                                        đầu v&agrave;o c&aacute;c lớp&nbsp;<strong>IELTS,
                                            Pre-IELTS</strong>&nbsp;&nbsp;tại địa chỉ số nh&agrave;&nbsp;<strong>6 ngõ
                                            1 ph&ocirc;́ Dịch Vọng H&acirc;̣u C&acirc;̀u gi&acirc;́y Hà
                                            n&ocirc;̣i.&nbsp;</strong>C&aacute;c bạn nhấn v&agrave;o
                                        n&uacute;t<strong>&nbsp;&quot;ĐĂNG K&Yacute; THI XẾP
                                            LỚP&quot;&nbsp;</strong>ph&iacute;a dưới b&ecirc;n phải m&agrave;n
                                        h&igrave;nh để đăng k&yacute; thi.</p>

                                    <p>Kết quả thi đầu v&agrave;o sẽ được th&ocirc;ng b&aacute;o tới cho c&aacute;c bạn
                                        trong v&ograve;ng tuần tiếp theo qua Email m&agrave; bạn đ&atilde; đăng
                                        k&yacute;.</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng: dưới 3.5: em đỗ kh&oacute;a N&acirc;ng cấp I (25
                                        buổi, bao gồm 2 buổi thi giữa kỳ v&agrave; cuối kỳ)</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng:Từ&nbsp;3.5 đến 4.9: em đỗ
                                        kh&oacute;a&nbsp;N&acirc;ng cấp II (25 buổi, bao gồm 2 buổi thi giữa kỳ
                                        v&agrave; cuối kỳ)</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng:Từ&nbsp;5 đến 5.9 v&agrave; điểm viết kh&ocirc;ng
                                        dưới 5.0: em đỗ kh&oacute;a&nbsp;PRE IELTS (25 buổi bao gồm 2 buổi thi giữa kỳ
                                        v&agrave; cuối kỳ)</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng:Từ&nbsp;6.0 đến 6.4 v&agrave; điểm viết
                                        kh&ocirc;ng dưới 6.0: em đỗ kh&oacute;a IELTS INTERMEDIATE (27 buổi học, bao gồm
                                        2 buổi thi giữa kỳ v&agrave; cuối kỳ).</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng: tr&ecirc;n 6.5 v&agrave; điểm viết kh&ocirc;ng
                                        dưới 6.5: em đỗ kh&oacute;a IELTS ADVANCED (34 buổi, bao gồm 2 buổi thi giữa kỳ
                                        v&agrave; cuối kỳ) (v&agrave; c&aacute;c buổi thi MOCK TEST với 2 kỹ năng đọc,
                                        nghe)</p>

                                    <p>Ngo&agrave;i việc đăng k&yacute; thi xếp lớp online, bạn c&oacute; thể chọn
                                        c&aacute;ch kh&aacute;c l&agrave; đăng k&yacute; qua điện thoại với số
                                        m&aacute;y
                                        :<strong>&nbsp;024.37563521&nbsp;</strong>v&agrave;<strong>&nbsp;0917511052&nbsp;</strong>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div style="cursor:pointer;" uk-toggle="target: #modal-khnc-7">
                            <div class="uk-card uk-transition-toggle">
                                <div class="uk-card-media-top uk-cover-container">
                                    <img src="eData/OpeningCalendar/KHOI3638%20-%20Copy%20(2)%20copy.png"
                                        alt="Kh&#xF3;a h&#x1ECD;c IELTS INTERMEDIATE" uk-cover
                                        class="uk-transition-opaque">
                                    <img src="eData/OpeningCalendar/KHOI3638%20-%20Copy%20(2)%20copy.png"
                                        class="uk-transition-fade" uk-cover>
                                </div>
                                <div class="">
                                    <h5 class="uk-card-title">Kh&#xF3;a h&#x1ECD;c IELTS INTERMEDIATE</h5>
                                </div>
                            </div>
                        </div>
                        <div id="modal-khnc-6" class="modal-khnc uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button
                                    class="uk-modal-close-default" type="button" uk-close=""></button>
                                <div><img alt="" src="eData/ckEditor/Lichhoc_detail.png"
                                        style="width: 537px; height: 365px;" /></div>

                                <div class="modal-khnc-body">
                                    <h2>Kho&aacute; học Pre - IELTS</h2>

                                    <hr class="uk-divider-small" />
                                    <div class="uk-width-1-1" uk-grid="">
                                        <div class="uk-width-small">
                                            <p>Lớp học</p>

                                            <p>Khai giảng</p>

                                            <p>Lịch học</p>

                                            <p>H&igrave;nh thức học</p>

                                            <p>Địa điểm học</p>
                                        </div>

                                        <div class="uk-width-expand">
                                            <p>PRE - IELTS - 24H</p>

                                            <p>19/5/2024</p>

                                            <p>18h ng&agrave;y Thứ Năm&nbsp;v&agrave; 14h Chủ Nhật</p>

                                            <p>Học trực tiếp tại lớp</p>

                                            <p>52 Lương Khánh Thiện, Hải Phòng</p>
                                        </div>
                                    </div>

                                    <hr class="uk-divider-small" />
                                    <div class="uk-width-1-1" uk-grid="">
                                        <div class="uk-width-small">
                                            <p>&nbsp;</p>
                                        </div>
                                    </div>

                                    <p>H&agrave;ng tuần&nbsp;<strong>trung t&acirc;m VMU</strong>&nbsp;sẽ tổ chức thi
                                        đầu v&agrave;o c&aacute;c lớp&nbsp;<strong>IELTS,
                                            Pre-IELTS</strong>&nbsp;&nbsp;tại địa chỉ số nh&agrave;&nbsp;<strong>6 ngõ
                                            1 ph&ocirc;́ Dịch Vọng H&acirc;̣u C&acirc;̀u gi&acirc;́y Hà
                                            n&ocirc;̣i.&nbsp;</strong>C&aacute;c bạn nhấn v&agrave;o
                                        n&uacute;t<strong>&nbsp;&quot;ĐĂNG K&Yacute; THI XẾP
                                            LỚP&quot;&nbsp;</strong>ph&iacute;a dưới b&ecirc;n phải m&agrave;n
                                        h&igrave;nh để đăng k&yacute; thi.</p>

                                    <p>Kết quả thi đầu v&agrave;o sẽ được th&ocirc;ng b&aacute;o tới cho c&aacute;c bạn
                                        trong v&ograve;ng tuần tiếp theo qua Email m&agrave; bạn đ&atilde; đăng
                                        k&yacute;.</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng: dưới 3.5: em đỗ kh&oacute;a N&acirc;ng cấp I (25
                                        buổi, bao gồm 2 buổi thi giữa kỳ v&agrave; cuối kỳ)</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng:Từ&nbsp;3.5 đến 4.9: em đỗ
                                        kh&oacute;a&nbsp;N&acirc;ng cấp II (25 buổi, bao gồm 2 buổi thi giữa kỳ
                                        v&agrave; cuối kỳ)</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng:Từ&nbsp;5 đến 5.9 v&agrave; điểm viết kh&ocirc;ng
                                        dưới 5.0: em đỗ kh&oacute;a&nbsp;PRE IELTS (25 buổi bao gồm 2 buổi thi giữa kỳ
                                        v&agrave; cuối kỳ)</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng:Từ&nbsp;6.0 đến 6.4 v&agrave; điểm viết
                                        kh&ocirc;ng dưới 6.0: em đỗ kh&oacute;a IELTS INTERMEDIATE (27 buổi học, bao gồm
                                        2 buổi thi giữa kỳ v&agrave; cuối kỳ).</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng: tr&ecirc;n 6.5 v&agrave; điểm viết kh&ocirc;ng
                                        dưới 6.5: em đỗ kh&oacute;a IELTS ADVANCED (34 buổi, bao gồm 2 buổi thi giữa kỳ
                                        v&agrave; cuối kỳ) (v&agrave; c&aacute;c buổi thi MOCK TEST với 2 kỹ năng đọc,
                                        nghe)</p>

                                    <p>Ngo&agrave;i việc đăng k&yacute; thi xếp lớp online, bạn c&oacute; thể chọn
                                        c&aacute;ch kh&aacute;c l&agrave; đăng k&yacute; qua điện thoại với số
                                        m&aacute;y
                                        :<strong>&nbsp;024.37563521&nbsp;</strong>v&agrave;<strong>&nbsp;0917511052&nbsp;</strong>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div style="cursor:pointer;" uk-toggle="target: #modal-khnc-6">
                            <div class="uk-card uk-transition-toggle">
                                <div class="uk-card-media-top uk-cover-container">
                                    <img src="eData/OpeningCalendar/KHOI3663aaa.jpg"
                                        alt="Kh&#xF3;a h&#x1ECD;c Pre-IELTS" uk-cover class="uk-transition-opaque">
                                    <img src="eData/OpeningCalendar/KHOI3663aaa.jpg"
                                        class="uk-transition-fade" uk-cover>
                                </div>
                                <div class="">
                                    <h5 class="uk-card-title">Kh&#xF3;a h&#x1ECD;c Pre-IELTS</h5>
                                </div>
                            </div>
                        </div>
                        <div id="modal-khnc-5" class="modal-khnc uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button
                                    class="uk-modal-close-default" type="button" uk-close=""></button>
                                <div><img alt="" src="eData/ckEditor/Lichhoc_detail.png"
                                        style="width: 537px; height: 365px;" /></div>

                                <div class="modal-khnc-body">
                                    <h2>Kho&aacute; học n&acirc;ng cấp</h2>

                                    <hr class="uk-divider-small" />
                                    <div class="uk-width-1-1" uk-grid="">
                                        <div class="uk-width-small">
                                            <p>Lớp học</p>

                                            <p>Khai giảng</p>

                                            <p>Lịch học</p>

                                            <p>H&igrave;nh thức học</p>

                                            <p>Địa điểm học</p>
                                        </div>

                                        <div class="uk-width-expand">
                                            <p>NC2-24E</p>

                                            <p>19/5/2024</p>

                                            <p>18h ng&agrave;y Thứ Năm&nbsp;v&agrave; 14h chiều Chủ Nhật</p>

                                            <p>Học trực tiếp tại lớp</p>

                                            <p>296 Thiên Lôi, Hải Phòng</p>
                                        </div>
                                    </div>

                                    <hr class="uk-divider-small" />
                                    <p>H&agrave;ng tuần&nbsp;<strong>trung t&acirc;m VMU</strong>&nbsp;sẽ tổ chức thi
                                        đầu v&agrave;o c&aacute;c lớp&nbsp;<strong>IELTS,
                                            Pre-IELTS</strong>&nbsp;&nbsp;tại địa chỉ số nh&agrave;&nbsp;<strong>6 ngõ
                                            1 ph&ocirc;́ Dịch Vọng H&acirc;̣u C&acirc;̀u gi&acirc;́y Hà
                                            n&ocirc;̣i.&nbsp;</strong>C&aacute;c bạn nhấn v&agrave;o
                                        n&uacute;t<strong>&nbsp;&quot;ĐĂNG K&Yacute; THI XẾP
                                            LỚP&quot;&nbsp;</strong>ph&iacute;a dưới b&ecirc;n phải m&agrave;n
                                        h&igrave;nh để đăng k&yacute; thi.</p>

                                    <p>Kết quả thi đầu v&agrave;o sẽ được th&ocirc;ng b&aacute;o tới cho c&aacute;c bạn
                                        trong v&ograve;ng tuần tiếp theo qua Email m&agrave; bạn đ&atilde; đăng
                                        k&yacute;.</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng: dưới 3.5: em đỗ kh&oacute;a N&acirc;ng cấp I (25
                                        buổi, bao gồm 2 buổi thi giữa kỳ v&agrave; cuối kỳ)</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng:Từ&nbsp;3.5 đến 4.9: em đỗ
                                        kh&oacute;a&nbsp;N&acirc;ng cấp II (25 buổi, bao gồm 2 buổi thi giữa kỳ
                                        v&agrave; cuối kỳ)</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng:Từ&nbsp;5 đến 5.9 v&agrave; điểm viết kh&ocirc;ng
                                        dưới 5.0: em đỗ kh&oacute;a&nbsp;PRE IELTS (25 buổi bao gồm 2 buổi thi giữa kỳ
                                        v&agrave; cuối kỳ)</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng:Từ&nbsp;6.0 đến 6.4 v&agrave; điểm viết
                                        kh&ocirc;ng dưới 6.0: em đỗ kh&oacute;a IELTS INTERMEDIATE (27 buổi học, bao gồm
                                        2 buổi thi giữa kỳ v&agrave; cuối kỳ).</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng: tr&ecirc;n 6.5 v&agrave; điểm viết kh&ocirc;ng
                                        dưới 6.5: em đỗ kh&oacute;a IELTS ADVANCED (34 buổi, bao gồm 2 buổi thi giữa kỳ
                                        v&agrave; cuối kỳ) (v&agrave; c&aacute;c buổi thi MOCK TEST với 2 kỹ năng đọc,
                                        nghe)</p>

                                    <p>Ngo&agrave;i việc đăng k&yacute; thi xếp lớp online, bạn c&oacute; thể chọn
                                        c&aacute;ch kh&aacute;c l&agrave; đăng k&yacute; qua điện thoại với số
                                        m&aacute;y
                                        :<strong>&nbsp;024.37563521&nbsp;</strong>v&agrave;<strong>&nbsp;0917511052&nbsp;</strong>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div style="cursor:pointer;" uk-toggle="target: #modal-khnc-5">
                            <div class="uk-card uk-transition-toggle">
                                <div class="uk-card-media-top uk-cover-container">
                                    <img src="eData/OpeningCalendar/KHOI3680.jpg"
                                        alt="Kh&#xF3;a h&#x1ECD;c N&#xE2;ng c&#x1EA5;p 2" uk-cover
                                        class="uk-transition-opaque">
                                    <img src="eData/OpeningCalendar/KHOI3680.jpg"
                                        class="uk-transition-fade" uk-cover>
                                </div>
                                <div class="">
                                    <h5 class="uk-card-title">Kh&#xF3;a h&#x1ECD;c N&#xE2;ng c&#x1EA5;p 2</h5>
                                </div>
                            </div>
                        </div>
                        <div id="modal-khnc-4" class="modal-khnc uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button
                                    class="uk-modal-close-default" type="button" uk-close=""></button>
                                <div><img alt="" src="eData/ckEditor/Lichhoc_detail.png"
                                        style="width: 537px; height: 365px;" /></div>

                                <div class="modal-khnc-body">
                                    <h2>Kho&aacute; học n&acirc;ng cấp</h2>

                                    <hr class="uk-divider-small" />
                                    <div class="uk-width-1-1" uk-grid="">
                                        <div class="uk-width-small">
                                            <p>Lớp học</p>

                                            <p>Khai giảng</p>

                                            <p>Lịch học</p>

                                            <p>H&igrave;nh thức học</p>

                                            <p>Địa điểm học</p>
                                        </div>

                                        <div class="uk-width-expand">
                                            <p>NC1-24A</p>

                                            <p>13/5/2024</p>

                                            <p>18h ng&agrave;y Thứ Hai&nbsp;v&agrave; Thứ Năm</p>

                                            <p>Học trực tiếp tại lớp</p>

                                            <p>296 Thiên Lôi, Hải Phòng</p>
                                        </div>
                                    </div>

                                    <hr class="uk-divider-small" />
                                    <p>H&agrave;ng tuần&nbsp;<strong>trung t&acirc;m VMU</strong>&nbsp;sẽ tổ chức thi
                                        đầu v&agrave;o c&aacute;c lớp&nbsp;<strong>IELTS,
                                            Pre-IELTS</strong>&nbsp;&nbsp;tại địa chỉ số 296 Thiên Lôi, Hải Phòng.
                                        </strong>C&aacute;c bạn nhấn v&agrave;o n&uacute;t<strong>&nbsp;&quot;ĐĂNG
                                            K&Yacute; THI XẾP LỚP&quot;&nbsp;</strong>ph&iacute;a dưới b&ecirc;n phải
                                        m&agrave;n h&igrave;nh để đăng k&yacute; thi.</p>

                                    <p>Kết quả thi đầu v&agrave;o sẽ được th&ocirc;ng b&aacute;o tới cho c&aacute;c bạn
                                        trong v&ograve;ng tuần tiếp theo qua Email m&agrave; bạn đ&atilde; đăng
                                        k&yacute;.</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng: dưới 3.5: em đỗ kh&oacute;a N&acirc;ng cấp I (25
                                        buổi, bao gồm 2 buổi thi giữa kỳ v&agrave; cuối kỳ)</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng:Từ&nbsp;3.5 đến 4.9: em đỗ
                                        kh&oacute;a&nbsp;N&acirc;ng cấp II (25 buổi, bao gồm 2 buổi thi giữa kỳ
                                        v&agrave; cuối kỳ)</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng:Từ&nbsp;5 đến 5.9 v&agrave; điểm viết kh&ocirc;ng
                                        dưới 5.0: em đỗ kh&oacute;a&nbsp;PRE IELTS (25 buổi bao gồm 2 buổi thi giữa kỳ
                                        v&agrave; cuối kỳ)</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng:Từ&nbsp;6.0 đến 6.4 v&agrave; điểm viết
                                        kh&ocirc;ng dưới 6.0: em đỗ kh&oacute;a IELTS INTERMEDIATE (27 buổi học, bao gồm
                                        2 buổi thi giữa kỳ v&agrave; cuối kỳ).</p>

                                    <p>+ Trung b&igrave;nh ba kỹ năng: tr&ecirc;n 6.5 v&agrave; điểm viết kh&ocirc;ng
                                        dưới 6.5: em đỗ kh&oacute;a IELTS ADVANCED (34 buổi, bao gồm 2 buổi thi giữa kỳ
                                        v&agrave; cuối kỳ) (v&agrave; c&aacute;c buổi thi MOCK TEST với 2 kỹ năng đọc,
                                        nghe)</p>

                                    <p>Ngo&agrave;i việc đăng k&yacute; thi xếp lớp online, bạn c&oacute; thể chọn
                                        c&aacute;ch kh&aacute;c l&agrave; đăng k&yacute; qua điện thoại với số
                                        m&aacute;y
                                        :<strong>&nbsp;024.37563521&nbsp;</strong>v&agrave;<strong>&nbsp;0917511052&nbsp;</strong>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div style="cursor:pointer;" uk-toggle="target: #modal-khnc-4">
                            <div class="uk-card uk-transition-toggle">
                                <div class="uk-card-media-top uk-cover-container">
                                    <img src="eData/OpeningCalendar/KHOI8840%20-%20Copy.jpg"
                                        alt="Kh&#xF3;a h&#x1ECD;c N&#xE2;ng c&#x1EA5;p 1" uk-cover
                                        class="uk-transition-opaque">
                                    <img src="eData/OpeningCalendar/KHOI8840%20-%20Copy.jpg"
                                        class="uk-transition-fade" uk-cover>
                                </div>
                                <div class="">
                                    <h5 class="uk-card-title">Kh&#xF3;a h&#x1ECD;c N&#xE2;ng c&#x1EA5;p 1</h5>
                                </div>
                            </div>
                        </div>
                        <div id="modal-khnc-3" class="modal-khnc uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button
                                    class="uk-modal-close-default" type="button" uk-close=""></button>
                                <div><img alt="" src="eData/ckEditor/Lichhoc_detail.png"
                                        style="width: 537px; height: 365px;" /></div>

                                <div class="modal-khnc-body">
                                    <h2>Kho&aacute; học tiếng Anh lớp 8, 9</h2>

                                    <hr class="uk-divider-small" />
                                    <div class="uk-width-1-1" uk-grid="">
                                        <div class="uk-width-small">
                                            <p>Lớp học</p>

                                            <p>Khai giảng</p>

                                            <p>Lịch học</p>

                                            <p>H&igrave;nh thức học</p>

                                            <p>Địa điểm học</p>
                                        </div>

                                        <div class="uk-width-expand">
                                            <p>8A</p>

                                            <p>Từ 6h00&nbsp;PM - 8.30PM</p>

                                            <p>T&ocirc;́i Thứ Tư</p>

                                            <p>Học trực tiếp tại lớp</p>

                                            <p>296 Thiên Lôi, Hải Phòng</p>
                                        </div>
                                    </div>

                                    <hr class="uk-divider-small" />
                                    <div class="uk-width-1-1" uk-grid="">
                                        <div class="uk-width-small">
                                            <p>Lớp học</p>

                                            <p>Khai giảng</p>

                                            <p>Lịch học</p>

                                            <p>H&igrave;nh thức học</p>

                                            <p>Địa điểm học</p>
                                        </div>

                                        <div class="uk-width-expand">
                                            <p>9A</p>

                                            <p>Từ 2h30PM - 5.00PM</p>

                                            <p>Chi&ecirc;̀u Chủ Nh&acirc;̣t</p>

                                            <p>Học trực tiếp tại lớp</p>

                                            <p>296 Thiên Lôi, Hải Phòng</p>
                                        </div>
                                    </div>

                                    <hr class="uk-divider-small" />
                                    <p>TỔNG QUAN KH&Oacute;A HỌC<br />
                                        Kh&oacute;a học&nbsp;2 buổi/tuần.&nbsp;Kho&aacute; học gi&uacute;p c&aacute;c em
                                        c&oacute; được kiến thức ngữ ph&aacute;p, từ vựng vững v&agrave;ng. Đồng thời
                                        th&ocirc;ng qua c&aacute;c hoạt động nghe, n&oacute;i, xem phim v&agrave; video
                                        về c&aacute;c chủ đề khoa học, x&atilde; hội h&agrave;ng tuần, c&aacute;c hoạt
                                        động viết luận, c&aacute;c em c&oacute; thể ph&aacute;t triển hiệu quả 4 kỹ năng
                                        nghe, n&oacute;i, đọc, viết.&nbsp;<br />
                                        Sau khi ho&agrave;n th&agrave;nh chương tr&igrave;nh tiếng Anh 8, c&aacute;c em
                                        c&oacute; thể chọn học tiếp l&ecirc;n tiếng Anh 9 hoặc chuyển sang học Pre-IELTS
                                        tại trung t&acirc;m. Một số em c&oacute; điểm thi nghe, n&oacute;i, đọc viết
                                        cuối kho&aacute; xuất sắc c&oacute; thể chuyển thẳng sang học IELTS.
                                        &nbsp;<br />
                                        C&aacute;c buổi thi xếp lớp vẫn được tiến h&agrave;nh h&agrave;ng tuần cho
                                        c&aacute;c lớp 6,7,8. C&aacute;c lịch học mới sẽ được th&ocirc;ng b&aacute;o cụ
                                        thể trong từng th&aacute;ng. &nbsp;&nbsp;</p>

                                    <p>GI&Aacute;O VI&Ecirc;N&nbsp;<br />
                                        C&aacute;c thầy c&ocirc; l&agrave; giảng vi&ecirc;n của Đại học Ngoại Ngữ, ĐHQG
                                        H&agrave; Nội, Đại học Ngoại thương v&agrave; c&aacute;c tổ chức gi&aacute;o dục
                                        uy t&iacute;n tại H&agrave; Nội.<br />
                                        &nbsp;<br />
                                        ĐĂNG K&Yacute; THI XẾP LỚP</p>

                                    <p>H&agrave;ng tuần&nbsp;<strong>trung t&acirc;m VMU</strong>&nbsp;sẽ tổ chức thi
                                        đầu v&agrave;o c&aacute;c lớp Tiếng Anh trung học Cơ sở&nbsp; tại địa chỉ số 296
                                        Thiên Lôi, Hải Phòng.&nbsp;</strong>C&aacute;c bạn nhấn v&agrave;o
                                        n&uacute;t<strong>&nbsp;&quot;ĐĂNG K&Yacute; THI XẾP
                                            LỚP&quot;&nbsp;</strong>ph&iacute;a dưới b&ecirc;n phải m&agrave;n
                                        h&igrave;nh để đăng k&yacute; thi.</p>

                                    <p>Kết quả thi đầu v&agrave;o sẽ được th&ocirc;ng b&aacute;o tới cho c&aacute;c bạn
                                        trong v&ograve;ng tuần tiếp theo qua Email m&agrave; bạn đ&atilde; đăng
                                        k&yacute;.</p>

                                    <p>Ngo&agrave;i việc đăng k&yacute; thi xếp lớp online, bạn c&oacute; thể chọn
                                        c&aacute;ch kh&aacute;c l&agrave; đăng k&yacute; qua điện thoại với số
                                        m&aacute;y b&agrave;n:<strong>&nbsp;024.37563521 gặp chị V&acirc;n Anh.</strong>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div style="cursor:pointer;" uk-toggle="target: #modal-khnc-3">
                            <div class="uk-card uk-transition-toggle">
                                <div class="uk-card-media-top uk-cover-container">
                                    <img src="eData/OpeningCalendar/KHOI8733%20-%20Copy.jpg"
                                        alt="L&#x1EDB;p 8 &#x2B; L&#x1EDB;p 9" uk-cover class="uk-transition-opaque">
                                    <img src="eData/OpeningCalendar/KHOI8733%20-%20Copy.jpg"
                                        class="uk-transition-fade" uk-cover>
                                </div>
                                <div class="">
                                    <h5 class="uk-card-title">L&#x1EDB;p 8 &#x2B; L&#x1EDB;p 9</h5>
                                </div>
                            </div>
                        </div>
                        <div id="modal-khnc-2" class="modal-khnc uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button
                                    class="uk-modal-close-default" type="button" uk-close=""></button>
                                <div><img alt="" src="eData/ckEditor/Lichhoc_detail.png"
                                        style="width: 537px; height: 365px;" /></div>

                                <div class="modal-khnc-body">
                                    <h2>Kho&aacute; học tiếng Anh lớp 7</h2>

                                    <hr class="uk-divider-small" />
                                    <div class="uk-width-1-1" uk-grid="">
                                        <div class="uk-width-small">
                                            <p>Lớp học</p>

                                            <p>Khai giảng</p>

                                            <p>Lịch học</p>

                                            <p>H&igrave;nh thức học</p>

                                            <p>Địa điểm học</p>
                                        </div>

                                        <div class="uk-width-expand">
                                            <p>7A</p>

                                            <p>Từ 8h30 AM - 11h00 AM</p>

                                            <p>Các bu&ocirc;̉i sáng Chủ Nh&acirc;̣t.</p>

                                            <p>Học trực tiếp tại lớp</p>

                                            <p>296 Thiên Lôi, Hải Phòng</p>
                                        </div>
                                    </div>

                                    <p>&nbsp;</p>

                                    <p>TỔNG QUAN KH&Oacute;A HỌC<br />
                                        Kh&oacute;a học&nbsp;2 buổi/tuần.&nbsp;Kho&aacute; học gi&uacute;p c&aacute;c em
                                        c&oacute; được kiến thức ngữ ph&aacute;p, từ vựng vững v&agrave;ng. Đồng thời
                                        th&ocirc;ng qua c&aacute;c hoạt động nghe, n&oacute;i, xem phim v&agrave; video
                                        về c&aacute;c chủ đề khoa học, x&atilde; hội h&agrave;ng tuần, c&aacute;c hoạt
                                        động viết luận, c&aacute;c em c&oacute; thể ph&aacute;t triển hiệu quả 4 kỹ năng
                                        nghe, n&oacute;i, đọc, viết.&nbsp;<br />
                                        Sau khi ho&agrave;n th&agrave;nh chương tr&igrave;nh tiếng Anh 7, c&aacute;c em
                                        c&oacute; thể chọn học tiếp l&ecirc;n tiếng Anh 8. &nbsp;<br />
                                        C&aacute;c buổi thi xếp lớp vẫn được tiến h&agrave;nh h&agrave;ng tuần cho
                                        c&aacute;c lớp 6,7,8. C&aacute;c lịch học mới sẽ được th&ocirc;ng b&aacute;o cụ
                                        thể trong từng th&aacute;ng. &nbsp;&nbsp;</p>

                                    <p>GI&Aacute;O VI&Ecirc;N&nbsp;<br />
                                        C&aacute;c thầy c&ocirc; l&agrave; giảng vi&ecirc;n của Đại học Ngoại Ngữ, ĐHQG
                                        H&agrave; Nội, Đại học Ngoại thương v&agrave; c&aacute;c tổ chức gi&aacute;o dục
                                        uy t&iacute;n tại H&agrave; Nội.<br />
                                        &nbsp;<br />
                                        ĐĂNG K&Yacute; THI XẾP LỚP</p>

                                    <p>H&agrave;ng tuần&nbsp;<strong>trung t&acirc;m VMU</strong>&nbsp;sẽ tổ chức thi
                                        đầu v&agrave;o c&aacute;c lớp Tiếng Anh trung học Cơ sở&nbsp; tại địa chỉ số 296
                                        Thiên Lôi, Hải Phòng.&nbsp;</strong>C&aacute;c bạn nhấn v&agrave;o
                                        n&uacute;t<strong>&nbsp;&quot;ĐĂNG K&Yacute; THI XẾP
                                            LỚP&quot;&nbsp;</strong>ph&iacute;a dưới b&ecirc;n phải m&agrave;n
                                        h&igrave;nh để đăng k&yacute; thi.</p>

                                    <p>Kết quả thi đầu v&agrave;o sẽ được th&ocirc;ng b&aacute;o tới cho c&aacute;c bạn
                                        trong v&ograve;ng tuần tiếp theo qua Email m&agrave; bạn đ&atilde; đăng
                                        k&yacute;.</p>

                                    <p>Ngo&agrave;i việc đăng k&yacute; thi xếp lớp online, bạn c&oacute; thể chọn
                                        c&aacute;ch kh&aacute;c l&agrave; đăng k&yacute; qua điện thoại với số
                                        m&aacute;y b&agrave;n:<strong>&nbsp;024.37563521 gặp chị V&acirc;n Anh.</strong>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div style="cursor:pointer;" uk-toggle="target: #modal-khnc-2">
                            <div class="uk-card uk-transition-toggle">
                                <div class="uk-card-media-top uk-cover-container">
                                    <img src="eData/OpeningCalendar/KHOI3686%20-%20Copy.jpg"
                                        alt="L&#x1EDB;p 7" uk-cover class="uk-transition-opaque">
                                    <img src="eData/OpeningCalendar/KHOI3686%20-%20Copy.jpg"
                                        class="uk-transition-fade" uk-cover>
                                </div>
                                <div class="">
                                    <h5 class="uk-card-title">L&#x1EDB;p 7</h5>
                                </div>
                            </div>
                        </div>
                        <div id="modal-khnc-1" class="modal-khnc uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button
                                    class="uk-modal-close-default" type="button" uk-close=""></button>
                                <div><img alt="" src="eData/ckEditor/Lichhoc_detail.png"
                                        style="width: 537px; height: 365px;" /></div>

                                <div class="modal-khnc-body">
                                    <h2>Kho&aacute; học tiếng Anh lớp 6</h2>

                                    <hr class="uk-divider-small" />
                                    <div class="uk-width-1-1" uk-grid="">
                                        <div class="uk-width-small">
                                            <p>Lớp học&nbsp;</p>

                                            <p>Khai giảng:&nbsp;</p>

                                            <p>Lịch học:&nbsp;</p>

                                            <p>H&igrave;nh thức học:</p>

                                            <p>Địa điểm học:</p>
                                        </div>

                                        <div class="uk-width-expand">
                                            <p>LOP6.23A</p>

                                            <p>Từ 8h30AM - 11h00AM</p>

                                            <p>Các bu&ocirc;̉i sáng Chủ Nh&acirc;̣t</p>

                                            <p>Học trực tiếp tại lớp</p>

                                            <p>296 Thiên Lôi, Hải Phòng</p>
                                        </div>
                                    </div>

                                    <p>&nbsp;</p>

                                    <p>TỔNG QUAN KH&Oacute;A HỌC<br />
                                        Kh&oacute;a học&nbsp;1 buổi/tuần.&nbsp;Kho&aacute; học gi&uacute;p c&aacute;c em
                                        c&oacute; được kiến thức ngữ ph&aacute;p, từ vựng vững v&agrave;ng. Đồng thời
                                        th&ocirc;ng qua c&aacute;c hoạt động nghe, n&oacute;i, xem phim v&agrave; video
                                        về c&aacute;c chủ đề khoa học, x&atilde; hội h&agrave;ng tuần, c&aacute;c hoạt
                                        động viết luận, c&aacute;c em c&oacute; thể ph&aacute;t triển hiệu quả 4 kỹ năng
                                        nghe, n&oacute;i, đọc, viết.&nbsp;<br />
                                        Sau khi ho&agrave;n th&agrave;nh chương tr&igrave;nh tiếng Anh 6, c&aacute;c em
                                        c&oacute; thể chọn học tiếp l&ecirc;n tiếng Anh 8.<br />
                                        C&aacute;c buổi thi xếp lớp vẫn được tiến h&agrave;nh h&agrave;ng tuần cho
                                        c&aacute;c lớp 6,7,8. C&aacute;c lịch học mới sẽ được th&ocirc;ng b&aacute;o cụ
                                        thể trong từng th&aacute;ng.</p>

                                    <p>GI&Aacute;O VI&Ecirc;N<br />
                                        C&aacute;c thầy c&ocirc; l&agrave; giảng vi&ecirc;n của Đại học Ngoại Ngữ, ĐHQG
                                        H&agrave; Nội, Đại học Ngoại thương v&agrave; c&aacute;c tổ chức gi&aacute;o dục
                                        uy t&iacute;n tại H&agrave; Nội.<br />
                                        &nbsp;<br />
                                        ĐĂNG K&Yacute; THI XẾP LỚP</p>

                                    <p>H&agrave;ng tuần&nbsp;<strong>trung t&acirc;m VMU</strong>&nbsp;sẽ tổ chức thi
                                        đầu v&agrave;o c&aacute;c lớp Tiếng Anh trung học Cơ sở&nbsp; tại địa chỉ số 296
                                        Thiên Lôi, Hải Phòng.&nbsp;</strong>C&aacute;c bạn nhấn v&agrave;o
                                        n&uacute;t<strong>&nbsp;&quot;ĐĂNG K&Yacute; THI XẾP
                                            LỚP&quot;&nbsp;</strong>ph&iacute;a dưới b&ecirc;n phải m&agrave;n
                                        h&igrave;nh để đăng k&yacute; thi.</p>

                                    <p>Kết quả thi đầu v&agrave;o sẽ được th&ocirc;ng b&aacute;o tới cho c&aacute;c bạn
                                        trong v&ograve;ng tuần tiếp theo qua Email m&agrave; bạn đ&atilde; đăng
                                        k&yacute;.</p>

                                    <p>Ngo&agrave;i việc đăng k&yacute; thi xếp lớp online, bạn c&oacute; thể chọn
                                        c&aacute;ch kh&aacute;c l&agrave; đăng k&yacute; qua điện thoại với số
                                        m&aacute;y b&agrave;n:<strong>&nbsp;024.37563521 gặp chị V&acirc;n Anh.</strong>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div style="cursor:pointer;" uk-toggle="target: #modal-khnc-1">
                            <div class="uk-card uk-transition-toggle">
                                <div class="uk-card-media-top uk-cover-container">
                                    <img src="eData/OpeningCalendar/KHOI3699%20-%20Copy.jpg"
                                        alt="L&#x1EDB;p 6" uk-cover class="uk-transition-opaque">
                                    <img src="eData/OpeningCalendar/KHOI3699%20-%20Copy.jpg"
                                        class="uk-transition-fade" uk-cover>
                                </div>
                                <div class="">
                                    <h5 class="uk-card-title">L&#x1EDB;p 6</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Thành tích và cảm nhận học của học viên -->
    <div id="ju_thanh_tich"
        class="uk-section uk-section-primary uk-preserve uk-preserve-color uk-background-norepeat uk-background-contain"
        style="background-image: url('img/home/success.png')">
        <div class="uk-container">
            <div>
                <h2 class="  uk-preserve-color">
                    <p>Thành tích và cảm nhận của học viên </p>
                </h2>
                <p><i>"Cảm ơn các bạn đã đồng hành vượt qua khó khăn trong kì thi IELTS cùng VMU IELTS!"</i></p>
                <br>
            </div>
            <div>
                <div uk-slider="autoplay: true;autoplay-interval: 6000;pause-on-hover: true">
                    <div class="uk-position-relative">
                        <div class="uk-slider-container">
                            <ul class="uk-slider-items"
                                uk-scrollspy="cls: uk-animation-slide-bottom; target: li; delay: 300; repeat: true">
                                <li>
                                    <div class=" uk-grid-match" uk-grid>
                                        <div class="uk-width-auto@s">
                                            <div class="uk-inline">
                                                <img src="eData/Achievement/NguyenVietCuong8.5%20-%20Copy.png"
                                                    width="374" height="360"
                                                    alt="NGUY&#x1EC4;N VI&#x1EC6;T C&#x1AF;&#x1EDC;NG">
                                                <div
                                                    class=" uk-overlay uk-overlay-primary uk-position-bottom uk-padding-small">
                                                    <p class="uk-margin-remove">
                                                        IELTS ADVANCED - 8.5 IELTS
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="thanhtich-camnhan" class="uk-width-expand">
                                            <div class="uk-panel">
                                                <h3 class="uk-text-primary">NGUY&#x1EC4;N VI&#x1EC6;T C&#x1AF;&#x1EDC;NG
                                                </h3>
                                                <div>
                                                    <div class="uk-padding uk-padding-remove uk-padding-remove-bottom uk-panel"
                                                        uk-grid>
                                                        <div>
                                                            <img class="uk-width-auto" src="img/home/top.png">
                                                        </div>
                                                        <p>H&atilde;y c&ugrave;ng đọc những chia sẻ của Cường, một
                                                            ch&agrave;ng trai v&ocirc; c&ugrave;ng quyết t&acirc;m trong
                                                            học tập để xem h&agrave;nh tr&igrave;nh đến với 8.5 của bạn.
                                                            Cảm ơn Cường rất nhiều v&igrave; nỗ lực của em v&agrave;
                                                            những chia sẻ thật ch&acirc;n t&igrave;nh của em nhé!</p>

                                                        <div class="uk-text-right uk-margin-remove">
                                                            <img class="uk-width-auto " src="img/home/bottom.png">
                                                        </div>
                                                    </div>
                                                    <a class="uk-button uk-button-text uk-text-primary"
                                                        href="thanh-tich-hoc-tap/nguyen-viet-cuong.html">
                                                        <span uk-icon="arrow-right"></span>Read More...
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=" uk-grid-match" uk-grid>
                                        <div class="uk-width-auto@s">
                                            <div class="uk-inline">
                                                <img src="eData/Achievement/HoangThuMinh8.0.png"
                                                    width="374" height="360" alt="HO&#xC0;NG THU MINH">
                                                <div
                                                    class=" uk-overlay uk-overlay-primary uk-position-bottom uk-padding-small">
                                                    <p class="uk-margin-remove">
                                                        IELTS ADVANCED - 8 IELTS
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="thanhtich-camnhan" class="uk-width-expand">
                                            <div class="uk-panel">
                                                <h3 class="uk-text-primary">HO&#xC0;NG THU MINH</h3>
                                                <div>
                                                    <div class="uk-padding uk-padding-remove uk-padding-remove-bottom uk-panel"
                                                        uk-grid>
                                                        <div>
                                                            <img class="uk-width-auto" src="img/home/top.png">
                                                        </div>
                                                        <p><span class="text">CHIA SẺ KINH NGHIỆM HỌC CỦA BẠN
                                                                HO&Agrave;NG THU MINH IELTS 8.0 Con xin ph&eacute;p được
                                                                chia sẻ về qu&aacute; tr&igrave;nh học v&agrave;
                                                                &ocirc;n luyện của con ạ...</span></p>

                                                        <div class="uk-text-right uk-margin-remove">
                                                            <img class="uk-width-auto " src="img/home/bottom.png">
                                                        </div>
                                                    </div>
                                                    <a class="uk-button uk-button-text uk-text-primary"
                                                        href="thanh-tich-hoc-tap/hoang-thu-minh.html">
                                                        <span uk-icon="arrow-right"></span>Read More...
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class=" uk-grid-match" uk-grid>
                                        <div class="uk-width-auto@s">
                                            <div class="uk-inline">
                                                <img src="eData/Achievement/VuMinhDiep8.0%20-%20Copy.png"
                                                    width="374" height="360" alt="V&#x168; MINH DI&#x1EC6;P">
                                                <div
                                                    class=" uk-overlay uk-overlay-primary uk-position-bottom uk-padding-small">
                                                    <p class="uk-margin-remove">
                                                        IELTS ADVANCED - 8 IELTS
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="thanhtich-camnhan" class="uk-width-expand">
                                            <div class="uk-panel">
                                                <h3 class="uk-text-primary">V&#x168; MINH DI&#x1EC6;P</h3>
                                                <div>
                                                    <div class="uk-padding uk-padding-remove uk-padding-remove-bottom uk-panel"
                                                        uk-grid>
                                                        <div>
                                                            <img class="uk-width-auto" src="img/home/top.png">
                                                        </div>
                                                        <p><span class="text"><strong>CHIA SẺ CỦA BẠN&nbsp;VŨ MINH
                                                                    DIỆP&nbsp;ĐIỂM IELTS 8.0</strong> Hello c&ocirc;
                                                                Nh&atilde; v&agrave; c&aacute;c bạn đang theo học
                                                                c&ocirc; Nh&atilde; </span><span
                                                                class="emoji-sizer emoji-outer ">😃</span><span
                                                                class="text"> Đầu ti&ecirc;n l&agrave; tại v&igrave;
                                                                mail trước m&igrave;nh b&aacute;o kqua thi IELTS đợt
                                                                20/7 về cho c&ocirc; th&igrave; đoạn sau m&igrave;nh hay
                                                                lảm nhảm mấy chuyện kỉ niệm c&aacute; nh&acirc;n
                                                                th&ocirc;i c&ograve;n b&acirc;y giờ thư n&agrave;y
                                                                m&igrave;nh sẽ chia sẻ r&otilde; r&agrave;ng hơn
                                                                v&agrave; kĩ hơn về qu&aacute; tr&igrave;nh m&igrave;nh
                                                                học IELTS c&ocirc; Nh&atilde; lớp 16D v&agrave;
                                                                c&aacute;ch m&igrave;nh đạt được số điểm như m&igrave;nh
                                                                mong muốn <strong>(L8.5 R9 W7 S7.5 =&gt; overall
                                                                    8.0)</strong></span></p>

                                                        <div class="uk-text-right uk-margin-remove">
                                                            <img class="uk-width-auto " src="img/home/bottom.png">
                                                        </div>
                                                    </div>
                                                    <a class="uk-button uk-button-text uk-text-primary"
                                                        href="thanh-tich-hoc-tap/vu-minh-diep.html">
                                                        <span uk-icon="arrow-right"></span>Read More...
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class=" uk-grid-match" uk-grid>
                                        <div class="uk-width-auto@s">
                                            <div class="uk-inline">
                                                <img src="eData/Achievement/z5123945487812_2a2098d97d751b25268aae7499335c41.jpg"
                                                    width="374" height="360" alt="V&#x168; KH&#xC1;NH VY">
                                                <div
                                                    class=" uk-overlay uk-overlay-primary uk-position-bottom uk-padding-small">
                                                    <p class="uk-margin-remove">
                                                        IELTS 23E ADVANCED - 8.5 IELTS
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="thanhtich-camnhan" class="uk-width-expand">
                                            <div class="uk-panel">
                                                <h3 class="uk-text-primary">V&#x168; KH&#xC1;NH VY</h3>
                                                <div>
                                                    <div class="uk-padding uk-padding-remove uk-padding-remove-bottom uk-panel"
                                                        uk-grid>
                                                        <div>
                                                            <img class="uk-width-auto" src="img/home/top.png">
                                                        </div>
                                                        <p>Đầu ti&ecirc;n con muốn gửi lời ch&agrave;o cũng như
                                                            l&agrave; lời cảm ơn đến c&ocirc; Nh&atilde; - người
                                                            m&agrave; đ&atilde; đồng h&agrave;nh c&ugrave;ng với con
                                                            trong qu&aacute; tr&igrave;nh học IELTS n&agrave;y ạ!</p>

                                                        <div class="uk-text-right uk-margin-remove">
                                                            <img class="uk-width-auto " src="img/home/bottom.png">
                                                        </div>
                                                    </div>
                                                    <a class="uk-button uk-button-text uk-text-primary"
                                                        href="thanh-tich-hoc-tap/vu-khanh-vy.html">
                                                        <span uk-icon="arrow-right"></span>Read More...
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class=" uk-grid-match" uk-grid>
                                        <div class="uk-width-auto@s">
                                            <div class="uk-inline">
                                                <img src="eData/Achievement/20).jpg" width="374"
                                                    height="360" alt="Nguy&#x1EC5;n Ph&#x1B0;&#x1A1;ng Ng&#x1ECD;c">
                                                <div
                                                    class=" uk-overlay uk-overlay-primary uk-position-bottom uk-padding-small">
                                                    <p class="uk-margin-remove">
                                                        IELTS 23A ADVANCED - 8 IELTS
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="thanhtich-camnhan" class="uk-width-expand">
                                            <div class="uk-panel">
                                                <h3 class="uk-text-primary">Nguy&#x1EC5;n Ph&#x1B0;&#x1A1;ng Ng&#x1ECD;c
                                                </h3>
                                                <div>
                                                    <div class="uk-padding uk-padding-remove uk-padding-remove-bottom uk-panel"
                                                        uk-grid>
                                                        <div>
                                                            <img class="uk-width-auto" src="img/home/top.png">
                                                        </div>
                                                        <p>Dear teacher Nha Tran,<br />
                                                            Em ch&agrave;o c&ocirc; ạ!!!&nbsp;<br />
                                                            Đ&atilde; v&agrave;i th&aacute;ng tr&ocirc;i qua kể từ khi
                                                            kh&oacute;a học 23A của em kết th&uacute;c, and I missed you
                                                            so much! Em rất vui khi được tiếp tục tr&ograve; chuyện
                                                            c&ugrave;ng c&ocirc; qua email n&agrave;y ạ :Đ</p>

                                                        <div class="uk-text-right uk-margin-remove">
                                                            <img class="uk-width-auto " src="img/home/bottom.png">
                                                        </div>
                                                    </div>
                                                    <a class="uk-button uk-button-text uk-text-primary"
                                                        href="thanh-tich-hoc-tap/nguyen-phuong-ngoc.html">
                                                        <span uk-icon="arrow-right"></span>Read More...
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=" uk-grid-match" uk-grid>
                                        <div class="uk-width-auto@s">
                                            <div class="uk-inline">
                                                <img src="eData/Achievement/19).jpg" width="374"
                                                    height="360" alt="Tr&#xE2;m Anh">
                                                <div
                                                    class=" uk-overlay uk-overlay-primary uk-position-bottom uk-padding-small">
                                                    <p class="uk-margin-remove">
                                                        IE23B - ADVANCED - 8 IELTS
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="thanhtich-camnhan" class="uk-width-expand">
                                            <div class="uk-panel">
                                                <h3 class="uk-text-primary">Tr&#xE2;m Anh</h3>
                                                <div>
                                                    <div class="uk-padding uk-padding-remove uk-padding-remove-bottom uk-panel"
                                                        uk-grid>
                                                        <div>
                                                            <img class="uk-width-auto" src="img/home/top.png">
                                                        </div>
                                                        <p>Dear Mrs Nha,</p>

                                                        <p>It&rsquo;s Tram Anh here, your student from class 23B,<br />
                                                            First of all, my sincere apology for not making it to the
                                                            2nd test and our final lesson. I&rsquo;ve been quite busy
                                                            recently preparing for college application abroad, which
                                                            might also explain my email to you right now:&gt;</p>

                                                        <div class="uk-text-right uk-margin-remove">
                                                            <img class="uk-width-auto " src="img/home/bottom.png">
                                                        </div>
                                                    </div>
                                                    <a class="uk-button uk-button-text uk-text-primary"
                                                        href="thanh-tich-hoc-tap/tram-anh.html">
                                                        <span uk-icon="arrow-right"></span>Read More...
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=" uk-grid-match" uk-grid>
                                        <div class="uk-width-auto@s">
                                            <div class="uk-inline">
                                                <img src="eData/Achievement/NGUYEN%20KHANH%20TOAN.jpg"
                                                    width="374" height="360" alt="Nguy&#x1EC5;n Kh&#xE1;nh To&#xE0;n">
                                                <div
                                                    class=" uk-overlay uk-overlay-primary uk-position-bottom uk-padding-small">
                                                    <p class="uk-margin-remove">
                                                        IELTS 22B INTENSIVE - 8 IELTS
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="thanhtich-camnhan" class="uk-width-expand">
                                            <div class="uk-panel">
                                                <h3 class="uk-text-primary">Nguy&#x1EC5;n Kh&#xE1;nh To&#xE0;n</h3>
                                                <div>
                                                    <div class="uk-padding uk-padding-remove uk-padding-remove-bottom uk-panel"
                                                        uk-grid>
                                                        <div>
                                                            <img class="uk-width-auto" src="img/home/top.png">
                                                        </div>
                                                        <p>Trước ti&ecirc;n em xin được cảm ơn c&ocirc; Nh&atilde;
                                                            v&agrave; c&aacute;c anh chị đ&atilde; gi&uacute;p đỡ em rất
                                                            nhiều trong kh&oacute;a học v&agrave; kể cả sau kh&oacute;a
                                                            học (khi em &ocirc;n lại trước khi thi). Em xin ph&eacute;p
                                                            được chia sẻ về qu&aacute; tr&igrave;nh học v&agrave;
                                                            &ocirc;n tập của em để đạt được 8.0 ạ:</p>

                                                        <div class="uk-text-right uk-margin-remove">
                                                            <img class="uk-width-auto " src="img/home/bottom.png">
                                                        </div>
                                                    </div>
                                                    <a class="uk-button uk-button-text uk-text-primary"
                                                        href="thanh-tich-hoc-tap/nguyen-khanh-toan.html">
                                                        <span uk-icon="arrow-right"></span>Read More...
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=" uk-grid-match" uk-grid>
                                        <div class="uk-width-auto@s">
                                            <div class="uk-inline">
                                                <img src="eData/Achievement/IMG_7256.jpg"
                                                    width="374" height="360"
                                                    alt="C&#x1B0;&#x323;u ho&#x323;c sinh (l&#x1A1;&#x301;p IELTS 22E INTENSIVE)">
                                                <div
                                                    class=" uk-overlay uk-overlay-primary uk-position-bottom uk-padding-small">
                                                    <p class="uk-margin-remove">
                                                        IELTS 22E INTENSIVE - 8 IELTS
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="thanhtich-camnhan" class="uk-width-expand">
                                            <div class="uk-panel">
                                                <h3 class="uk-text-primary">C&#x1B0;&#x323;u ho&#x323;c sinh
                                                    (l&#x1A1;&#x301;p IELTS 22E INTENSIVE)</h3>
                                                <div>
                                                    <div class="uk-padding uk-padding-remove uk-padding-remove-bottom uk-panel"
                                                        uk-grid>
                                                        <div>
                                                            <img class="uk-width-auto" src="img/home/top.png">
                                                        </div>
                                                        <p>K&iacute;nh gửi c&ocirc; Nh&atilde;, Em l&agrave; học sinh
                                                            lớp 22E vừa kết th&uacute;c th&aacute;ng 4 của c&ocirc;. Em
                                                            gửi mail n&agrave;y để th&ocirc;ng b&aacute;o kết quả thi
                                                            ng&agrave;y 2/9 - Quốc kh&aacute;nh Việt Nam em đi thi chứng
                                                            chỉ ngoại ngữ, em mong l&agrave; sự h&agrave;i hước vẫn giữ
                                                            nguy&ecirc;n qua văn viết như khi em kể với mọi người -
                                                            v&agrave; nhận được kết quả ng&agrave;y 14. Em c&oacute;
                                                            &yacute; định gửi mail b&aacute;o tin vui cho c&ocirc; sớm
                                                            nhất c&oacute; thể, nhưng bệnh sốt xuất huyết bắt được em
                                                            đ&uacute;ng l&uacute;c lơ l&agrave; n&ecirc;n h&ocirc;m nay
                                                            em mới c&oacute; thể viết thư.</p>

                                                        <div class="uk-text-right uk-margin-remove">
                                                            <img class="uk-width-auto " src="img/home/bottom.png">
                                                        </div>
                                                    </div>
                                                    <a class="uk-button uk-button-text uk-text-primary"
                                                        href="thanh-tich-hoc-tap/cuu-hoc-sinh-lop-ielts-22e-intensive-.html">
                                                        <span uk-icon="arrow-right"></span>Read More...
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=" uk-grid-match" uk-grid>
                                        <div class="uk-width-auto@s">
                                            <div class="uk-inline">
                                                <img src="eData/Achievement/2222.jpg" width="374"
                                                    height="360"
                                                    alt="C&#x1B0;&#x323;u ho&#x323;c sinh l&#x1A1;&#x301;p (IELTS 22C  INTENSIVE)">
                                                <div
                                                    class=" uk-overlay uk-overlay-primary uk-position-bottom uk-padding-small">
                                                    <p class="uk-margin-remove">
                                                        (IELTS 22C INTENSIVE) - 8 IELTS
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="thanhtich-camnhan" class="uk-width-expand">
                                            <div class="uk-panel">
                                                <h3 class="uk-text-primary">C&#x1B0;&#x323;u ho&#x323;c sinh
                                                    l&#x1A1;&#x301;p (IELTS 22C INTENSIVE)</h3>
                                                <div>
                                                    <div class="uk-padding uk-padding-remove uk-padding-remove-bottom uk-panel"
                                                        uk-grid>
                                                        <div>
                                                            <img class="uk-width-auto" src="img/home/top.png">
                                                        </div>
                                                        <p>Dear Ms Nh&atilde;,<br />
                                                            Hello my beloved teacher, it&rsquo;s been a long time since
                                                            the last time we met TT I miss you so much. Recently, I
                                                            received my Ielts band score and it was wonderful.
                                                            Surprisingly, the final result was higher than I
                                                            expected.<br />
                                                            I got 8.0 overall, 9.0 listening, 8.5 reading, 7.0 writing
                                                            and 8.0 speaking.<br />
                                                            &nbsp;</p>

                                                        <div class="uk-text-right uk-margin-remove">
                                                            <img class="uk-width-auto " src="img/home/bottom.png">
                                                        </div>
                                                    </div>
                                                    <a class="uk-button uk-button-text uk-text-primary"
                                                        href="thanh-tich-hoc-tap/cuu-hoc-sinh-lop-ielts-22c-intensive-.html">
                                                        <span uk-icon="arrow-right"></span>Read More...
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=" uk-grid-match" uk-grid>
                                        <div class="uk-width-auto@s">
                                            <div class="uk-inline">
                                                <img src="eData/Achievement/VU%20MINH%20(1).jpg"
                                                    width="374" height="360" alt="Nguy&#x1EC5;n V&#x169; Minh">
                                                <div
                                                    class=" uk-overlay uk-overlay-primary uk-position-bottom uk-padding-small">
                                                    <p class="uk-margin-remove">
                                                        IE22C INTENSIVE - 7.5 IELTS
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="thanhtich-camnhan" class="uk-width-expand">
                                            <div class="uk-panel">
                                                <h3 class="uk-text-primary">Nguy&#x1EC5;n V&#x169; Minh</h3>
                                                <div>
                                                    <div class="uk-padding uk-padding-remove uk-padding-remove-bottom uk-panel"
                                                        uk-grid>
                                                        <div>
                                                            <img class="uk-width-auto" src="img/home/top.png">
                                                        </div>
                                                        <p>IELTS C&Ocirc; NH&Atilde;- NƠI BIẾN ƯỚC MƠ TH&Agrave;NH SỰ
                                                            THẬT H&atilde;y c&ugrave;ng lắng nghe t&acirc;m sự của 1 cựu
                                                            học sinh với qu&aacute; tr&igrave;nh &ocirc;n thi IE đạt 7.5
                                                            m&agrave; xuất ph&aacute;t điểm của bạn band điểm n&agrave;y
                                                            chỉ như một giấc mơ. Ch&uacute;c mừng con đ&atilde; đạt được
                                                            th&agrave;nh quả tốt đẹp ❤ Em l&agrave; Nguyễn Vũ Minh ở lớp
                                                            22E của c&ocirc; Nh&atilde; vừa mới kết th&uacute;c
                                                            v&agrave;o th&aacute;ng 4 năm nay ạ.</p>

                                                        <div class="uk-text-right uk-margin-remove">
                                                            <img class="uk-width-auto " src="img/home/bottom.png">
                                                        </div>
                                                    </div>
                                                    <a class="uk-button uk-button-text uk-text-primary"
                                                        href="thanh-tich-hoc-tap/nguyen-vu-minh.html">
                                                        <span uk-icon="arrow-right"></span>Read More...
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a class="uk-position-center-left-out uk-visible@s uk-position-small uk-preserve" href="#"
                            uk-icon="arrowleft" uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-visible@s uk-position-small uk-preserve" href="#"
                            uk-icon="arrowright" uk-slider-item="next"></a>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="tin_tuc" class="uk-section uk-section-default ">
        <div class="uk-container">
            <div class="tm-grid-expand uk-child-width-1-1 uk-grid-margin uk-grid-stack" uk-grid="">
                <div class="uk-text-center">
                    <h4 class="uk-text-secondary uk-margin-small-bottom uk-h1">TIN TỨC</h4>
                    <p class="uk-margin-remove uk-text-primary">
                        Tìm hiểu thêm những tin tức và sự kiện của VIMARU IELTS
                    </p>
                </div>
                <div>
                    <div class="tt-transition uk-child-width-1-4@s uk-child-width-1-2 uk-grid-medium" uk-grid>
                        <a class="" href="tin-tuc/1-ielts-la-gi-.html">
                            <div class="uk-card-media-top uk-cover-container uk-transition-toggle">
                                <img src="" alt="" uk-cover class="uk-transition-opaque">
                                <img src="" alt="" class="uk-transition-fade" uk-cover>
                            </div>

                            <h4 class="uk-margin-small">1. IELTS l&#xE0; g&#xEC;?</h4>
                            <p class="uk-margin-small">
                                <p>IELTS viết tắt cho International English Language Testing System, tạm dịch l&agrave;
                                    Hệ thống Kiểm tra Anh ngữ Quốc tế với 4 kỹ năng Nghe, N&oacute;i, Đọc v&agrave;
                                    Viết.</p>

                                <p>Đ&acirc;y l&agrave; hệ thống kiểm tra tiếng Anh quốc tế quan trọng v&agrave; phổ biến
                                    nhất thế giới cho mục đ&iacute;ch học tập, l&agrave;m việc v&agrave; định cư với hơn
                                    hai triệu th&iacute; sinh dự thi.</p>

                                <p>Bạn c&oacute; thể dự thi IELTS Học thuật (IELTS Academic) hoặc IELTS Tổng qu&aacute;t
                                    (IELTS General) t&ugrave;y theo tổ chức m&agrave; bạn đang nộp đơn đến v&agrave; kế
                                    hoạch sắp đến của bạn.</p>
                            </p>
                        </a>
                        <a class="" href="tin-tuc/2-nhung-loi-the-khi-ban-thi-ielts.html">
                            <div class="uk-card-media-top uk-cover-container uk-transition-toggle">
                                <img src="" alt="" uk-cover class="uk-transition-opaque">
                                <img src="" alt="" class="uk-transition-fade" uk-cover>
                            </div>

                            <h4 class="uk-margin-small">2. Nh&#x1EEF;ng l&#x1EE3;i th&#x1EBF; khi b&#x1EA1;n thi IELTS
                            </h4>
                            <p class="uk-margin-small">
                                <p><strong>Kỹ năng N&oacute;i (IELTS Speaking)</strong>: bạn sẽ được sắp xếp
                                    ph&ograve;ng ri&ecirc;ng để qu&aacute; tr&igrave;nh n&oacute;i kh&ocirc;ng bị
                                    gi&aacute;n đoạn. Bạn sẽ c&oacute; kh&ocirc;ng gian y&ecirc;n tĩnh để kh&ocirc;ng bị
                                    mất tập trung.</p>

                                <p><strong>Kỹ năng Đọc v&agrave; Viết (IELTS Reading &amp; Writing)</strong>: bạn sẽ
                                    được cung cấp kh&ocirc;ng gian y&ecirc;n lặng tuyệt đối để c&oacute; thể trả lời
                                    phần thi một c&aacute;ch thoải m&aacute;i v&agrave; hiệu quả nhất.</p>

                                <p><strong>Kỹ năng Nghe (IELTS Listening)</strong>: bạn sẽ được cung cấp tai nghe
                                    ri&ecirc;ng với chất lượng c&aacute;ch &acirc;m cao để c&oacute; thể tập trung
                                    ho&agrave;n th&agrave;nh phần thi của m&igrave;nh một c&aacute;ch tốt nhất.</p>
                            </p>
                        </a>
                        <a class="" href="tin-tuc/3-ielts-hoc-thuat-va-ielts-tong-quat-khac-nhau-nhu-the-nao-.html">
                            <div class="uk-card-media-top uk-cover-container uk-transition-toggle">
                                <img src="" alt="" uk-cover class="uk-transition-opaque">
                                <img src="" alt="" class="uk-transition-fade" uk-cover>
                            </div>

                            <h4 class="uk-margin-small">3. IELTS H&#x1ECD;c thu&#x1EAD;t v&#xE0; IELTS T&#x1ED5;ng
                                qu&#xE1;t kh&#xE1;c nhau nh&#x1B0; th&#x1EBF; n&#xE0;o?</h4>
                            <p class="uk-margin-small">
                                <p><strong>IELTS Học thuật (<a
                                            href="https://ielts.idp.com/vietnam/about/which-test-do-i-take/academic">IELTS
                                            Academic</a>)</strong>&nbsp;được c&ocirc;ng nhận rộng r&atilde;i như
                                    l&agrave; y&ecirc;u cầu ng&ocirc;n ngữ đầu v&agrave;o cho tất cả c&aacute;c
                                    kh&oacute;a học Đại học v&agrave; Sau Đại học. L&agrave; ti&ecirc;u chuẩn
                                    đ&aacute;nh gi&aacute; ứng vi&ecirc;n đ&atilde; sẵn s&agrave;ng hay chưa cho việc
                                    theo học c&aacute;c chương tr&igrave;nh gi&aacute;o dục được giảng dạy ho&agrave;n
                                    to&agrave;n bằng tiếng Anh.</p>

                                <p><strong>IELTS Tổng qu&aacute;t (<a
                                            href="https://ielts.idp.com/vietnam/about/which-test-do-i-take/general-training">IELTS
                                            General</a>)</strong>&nbsp;th&iacute;ch hợp cho tất cả những ai chuẩn bị tới
                                    c&aacute;c nước n&oacute;i tiếng Anh để ho&agrave;n tất chương tr&igrave;nh trung
                                    học, c&aacute;c chương tr&igrave;nh đ&agrave;o tạo hoặc với mục đ&iacute;ch nhập cư.
                                </p>

                                <p>C&aacute;c tổ chức c&oacute; quy định ri&ecirc;ng về loại h&igrave;nh th&iacute; sinh
                                    cần thi. Th&iacute; sinh n&ecirc;n li&ecirc;n hệ với tổ chức nơi m&igrave;nh nộp hồ
                                    sơ để biết r&otilde; quy định.</p>

                                <p>H&agrave;ng năm, c&oacute; tr&ecirc;n 2 triệu th&iacute; sinh thi IELTS với mục
                                    đ&iacute;ch du học, định cư hay xin việc l&agrave;m. IELTS được hơn 11.000 cơ sở
                                    đ&agrave;o tạo v&agrave; tổ chức tại 135 quốc gia c&ocirc;ng nhận như Anh,
                                    &Uacute;c, Mỹ, Canada, New Zealand,...&nbsp;</p>
                            </p>
                        </a>
                        <a class="" href="tin-tuc/4-hinh-thu    c-thi-ielts.html">
                            <div class="uk-card-media-top uk-cover-container uk-transition-toggle">
                                <img src="" alt="" uk-cover class="uk-transition-opaque">
                                <img src="" alt="" class="uk-transition-fade" uk-cover>
                            </div>

                            <h4 class="uk-margin-small">4. H&#xEC;nh th&#x1EE9;c thi IELTS</h4>
                            <p class="uk-margin-small">
                                <p>Kỳ thi được chia l&agrave;m 2 phần:</p>

                                <p>Phần (a) &ndash; thi Viết, bao gồm c&aacute;c kỹ năng: Nghe, Đọc v&agrave; Viết</p>

                                <p>Phần (b) &ndash; thi N&oacute;i, bao gồm kỹ năng: N&oacute;i</p>

                                <p>Xem th&ecirc;m:&nbsp;<a
                                        href="https://www.idp.com/vietnam/ielts/test-format-and-benefits/"
                                        target="_blank">Chi tiết cấu tr&uacute;c đề thi IELTS</a></p>

                                <p><strong>Lưu &yacute; khi thi:</strong></p>

                                <ul>
                                    <li>Phần thi Viết (Nghe, Đọc, Viết) được tiến h&agrave;nh trong buổi s&aacute;ng của
                                        ng&agrave;y thi ch&iacute;nh thức v&agrave; k&eacute;o
                                        d&agrave;i&nbsp;<strong>khoảng 3 tiếng</strong>.</li>
                                    <li>Phần thi N&oacute;i chỉ k&eacute;o d&agrave;i&nbsp;<strong>15
                                            ph&uacute;t</strong>&nbsp;v&agrave; mỗi th&iacute; sinh sẽ được bố
                                        tr&iacute; thời gian thi N&oacute;i ri&ecirc;ng. Lịch thi N&oacute;i được bố
                                        tr&iacute; c&ugrave;ng ng&agrave;y với thi Viết hoặc trong khoảng thời gian 5
                                        ng&agrave;y trước v&agrave; sau ng&agrave;y thi Viết.</li>
                                    <li>V&igrave; 2 địa điểm thi N&oacute;i v&agrave; thi Viết c&oacute; thể kh&aacute;c
                                        nhau n&ecirc;n th&iacute; sinh sẽ được th&ocirc;ng b&aacute;o ch&iacute;nh
                                        x&aacute;c địa điểm của từng phần thi.</li>
                                </ul>
                            </p>
                        </a>
                    </div>

                </div>
                <div class="uk-text-center uk-margin-small">
                    <a class="uk-button uk-button-default" href="tin-tuc.html">
                        Xem thêm <img class="uk-margin-small-left" src="img/home/arrow.png" width="" height="" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="uk-section uk-section-muted uk-section-small">
            <div class="uk-container">

                <div class="footer-col-logo">
                    <img src="img/vmu_logo.png" width="220">
                </div>
                <div class="tm-grid-expand uk-grid-margin uk-grid uk-child-width-expand@m" uk-grid>
                    <div>
                        <div>
                            <h4 class="uk-text-primary">Khoá học</h4>
                            <ul class="uk-list uk-list-disc">
                                <li><a class="uk-link-reset" href="khoa-hoc/khoa-hoc-nang-cap-1.html">Kh&#xF3;a
                                        h&#x1ECD;c N&#xE2;ng c&#x1EA5;p 1</a></li>
                                <li><a class="uk-link-reset" href="khoa-hoc/khoa-hoc-nang-cap-2.html">Kh&#xF3;a
                                        h&#x1ECD;c N&#xE2;ng c&#x1EA5;p 2</a></li>
                                <li><a class="uk-link-reset" href="khoa-hoc/khoa-hoc-pre-ielts.html">Kh&#xF3;a
                                        h&#x1ECD;c Pre-IELTS</a></li>
                                <li><a class="uk-link-reset" href="khoa-hoc/khoa-hoc-ielts-intermediate.html">Kh&#xF3;a
                                        h&#x1ECD;c IELTS INTERMEDIATE</a></li>
                                <li><a class="uk-link-reset" href="khoa-hoc/khoa-hoc-ielts-advanced.html">Kh&#xF3;a
                                        h&#x1ECD;c IELTS ADVANCED</a></li>
                                <li><a class="uk-link-reset"
                                        href="khoa-hoc/khoa-hoc-tieng-anh-trung-hoc-co-so.html">Kh&#xF3;a h&#x1ECD;c
                                        Ti&#x1EBF;ng Anh Trung h&#x1ECD;c C&#x1A1; s&#x1EDF;</a></li>
                            </ul>
                        </div>
                        <a class="hot-line" href="tel:0917 511 052">
                            <div>
                                <div id="call-button" class="uk-card uk-card-primary uk-flex uk-flex-middle"
                                    style="width:fit-content">
                                    <div>
                                        <img src="img/call.png">
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
                                        href="thong-tin-chung/gioi-thieu-ve-trung-tam.html">Gi&#x1EDB;i thi&#x1EC7;u
                                        v&#x1EC1; trung t&#xE2;m</a></li>
                                <li><a class="uk-link-reset" href="thong-tin-chung/gia-tri-khac-biet.html">Gi&#xE1;
                                        tr&#x1ECB; kh&#xE1;c bi&#x1EC7;t</a></li>
                                <li><a class="uk-link-reset" href="thong-tin-chung/co-so-vat-chat.html">C&#x1A1;
                                        s&#x1EDF; v&#x1EAD;t ch&#x1EA5;t</a></li>
                                <li><a class="uk-link-reset" href="lich-khai-giang.html">L&#x1ECB;ch khai
                                        gi&#x1EA3;ng</a></li>
                                <li><a class="uk-link-reset" href="thanh-tich-hoc-tap.html">Th&#xE0;nh t&#xED;ch
                                        h&#x1ECD;c t&#x1EAD;p</a></li>
                                <li><a class="uk-link-reset" href="thong-tin-chung/hoi-dap.html">H&#x1ECF;i
                                        &#x111;&#xE1;p</a></li>
                                <li><a class="uk-link-reset" href="tin-tuc.html">Tin t&#x1EE9;c</a></li>
                                <li><a class="uk-link-reset" href="lien-he.html">Li&#xEA;n h&#x1EC7;</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <div>
                            <h4 class="uk-text-primary">Thông tin liên hệ</h4>

                            <ul class="uk-list">
                                <li><a class="uk-text-secondary" href="lien-he.html"><img class="uk-margin-small-right"
                                            src="eData/ckEditor/image/truso.png" />Cơ sở 1 ( Trụ
                                        sở chính )</a></li>
                                <li><a class="uk-link-reset" href="lien-he.html"><img class="uk-margin-small-right"
                                            src="eData/ckEditor/image/phone.png" />Phone:
                                        024-37563521</a></li>
                                <li><a class="uk-link-reset" href="lien-he.html"><img class="uk-margin-small-right"
                                            src="eData/ckEditor/image/mail.png" />Email:
                                        vmuielts@gmail.com</a></li>
                                <li><a class="uk-link-reset" href="lien-he.html"><img class="uk-margin-small-right"
                                            src="eData/ckEditor/image/location.png" />Địa chỉ:
                                        296 Thiên Lôi - HP</a></li>
                            </ul>

                            <ul class="uk-list">
                                <li><a class="uk-text-secondary" href="lien-he.html"><img class="uk-margin-small-right"
                                            src="eData/ckEditor/image/truso.png" />Cơ sở 2 </a>
                                </li>
                                <li><a class="uk-link-reset" href="lien-he.html"><img class="uk-margin-small-right"
                                            src="eData/ckEditor/image/phone.png" />Phone:
                                        087-8869266</a></li>
                                <li><a class="uk-link-reset" href="lien-he.html"><img class="uk-margin-small-right"
                                            src="eData/ckEditor/image/mail.png" />Email:
                                        vmuielts@gmail.com</a></li>
                                <li><a class="uk-link-reset" href="lien-he.html"><img class="uk-margin-small-right"
                                            src="eData/ckEditor/image/location.png" />Địa chỉ: 52
                                        Lương Khánh Thiện - HP</a></li>
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
                                <img src="img/social/Call.png" alt="Gọi điện">
                            </div>
                        </div>
                    </a>
                    <a href="mailto:vmuielts@gmail.com" target="_blank">
                        <div>
                            <div class="item">
                                <img src="img/social/mail.png" alt="Gửi mail">
                            </div>
                        </div>
                    </a>
                    <a href="" target="_blank">
                        <div>
                            <div class="item">
                                <img src="img/social/Group%2045775.png" alt="Zalo">
                            </div>
                        </div>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61559545077558" target="_blank">
                        <div>
                            <div class="item">
                                <img src="img/social/Facebook_Logo_(2019)%201.png" alt="Facebook">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="dangkythithu">
                    <img class="free-thithu" src="img/Group%2047158.png" alt="">
                    <div class="social-thithu">
                        <a class="" style="text-decoration: none;" href="dang-ky-thi-xep-lop.html">
                            Đăng ký thi xếp lớp
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="../code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="lib/uikit/js/uikit.min871f.js?v=Ggf9_fxyOI8rkWH8r3gPXNKk17NfE2M_-UGY_SOdOW0"></script>
    <script src="lib/uikit/js/uikit-icons.min0704.js?v=Jw3sVOJVDTo_g_uCv44IQOTcuR02l1SRrTlDByxK73E"></script>
    <script src="js/siteffc9.js?v=vhzlZlPbyZOsGprJqASXufC3rtBIsCl6K9Qd30Fyx4w"></script>

</body>

</html>
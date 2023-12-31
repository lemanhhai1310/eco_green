<?php $projectName = "Eco Green Saigon"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!--Gooogle Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500;700&family=Lato:wght@900&family=Mulish:wght@400;500;600;700;800&family=Open+Sans:wght@400;700&family=Titillium+Web&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.22/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.22/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.22/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<!--header-->
<header class="header uk-navbar-container" uk-sticky="animation: uk-animation-slide-top; show-on-up: true;">
    <div class="uk-container">
        <div uk-navbar>

            <div class="uk-navbar-center">

                <div class="uk-navbar-center-left">
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li class="<?= (isset($about)) ? 'uk-active' : '' ?>"><a href="about.php">GIỚI THIỆU DỰ ÁN</a></li>
                        <li class="<?= (isset($tienich)) ? 'uk-active' : '' ?>"><a href="tienich.php">TIỆN ÍCH</a></li>
                        <li><a href="#">MẶT BẰNG TỔNG THỂ</a></li>
                    </ul>
                </div>
                <a class="uk-navbar-item uk-logo" style="min-width: 174px" href="."><img class="uk-position-top-center" uk-img="loading: eager" data-src="images/logo-home1.png" alt=""></a>
                <div class="uk-navbar-center-right">
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="#">MUA BÁN </a></li>
                        <li><a href="#">CHO THUÊ</a></li>
                        <li class="<?= (isset($tintuc)) ? 'uk-active' : '' ?>"><a href="tintuc1.php">TIN TỨC</a></li>
                        <li class="<?= (isset($contact)) ? 'uk-active' : '' ?>"><a href="contact.php">LIÊN HỆ</a></li>
                    </ul>
                    <div class="uk-navbar-item">
                        <div class="header__lang">
                            <a href="" class="uk-active">VN</a>
                            <a href="">EN</a>
                            <a href="">CH</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</header>
<!--/header-->

<!--main-->
<main class="main" uk-height-viewport="offset-top: true; offset-bottom: true;">
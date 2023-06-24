<?php $projectName = "Eco Green Saigon"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500;700&family=Lato:wght@900&family=Mulish:wght@400;500;600;700;800&family=Open+Sans&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.22/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
                        <li><a href="#">GIỚI THIỆU DỰ ÁN</a></li>
                        <li><a href="#">TIỆN ÍCH</a></li>
                        <li><a href="#">MẶT BẰNG TỔNG THỂ</a></li>
                    </ul>
                </div>
                <a class="uk-navbar-item uk-logo" style="min-width: 174px" href="."><img class="uk-position-top-center" src="images/logo-home1.png" alt=""></a>
                <div class="uk-navbar-center-right">
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="#">MUA BÁN </a></li>
                        <li><a href="#">CHO THUÊ</a></li>
                        <li><a href="#">TIN TỨC</a></li>
                        <li><a href="contact.php">LIÊN HỆ</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</header>
<!--/header-->

<!--main-->
<main class="main">
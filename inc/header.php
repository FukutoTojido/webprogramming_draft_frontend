<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>play idolm@ster</title>
    <?php
    $path = $_SERVER['REQUEST_URI'];
    if (str_contains($path, "/index.php") || $path == "/")
        $path = "home";
    else {
        $queryArr = array();
        preg_match('/\/([a-zA-Z]+).php/', $path, $queryArr);
        $path = $queryArr[1];
    }
    ?>
    <link rel="stylesheet" href="deps/flickity.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/<?php echo $path; ?>.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="./deps/index.js"></script>
</head>

<body onload="initLoad('<?php echo $path; ?>')">
    <div id="headerTab">
        <div class="btn" onclick="load('home')">Trang chủ</div>
        <div class="btn" onclick="load('about')">Thông tin</div>
        <div class="btn" onclick="load('products')">Dịch vụ</div>
        <div class="btn" onclick="load('pricing')">Bảng giá</div>
        <a href="/contact.php">
            <div class="btn">Liên hệ</div>
        </a>
        <a href="/news.php">
            <div class="btn">Tin tức</div>
        </a>
        <div class="btn login">Đăng nhập</div>
    </div>
    <!-- <div id="loadingDiv">
        <img src='https://1.bp.blogspot.com/-Ius_gXvaNww/WVr6MkbqUtI/AAAAAAAAcTg/m__dYzOjOQIDiMEgZeDvvXHG6wt6WiLBgCLcBGAs/s1600/AS002799_00.gif' />
    </div> -->
    <div id="app-container">
        <div class="page-title">Bảng giá</div>
        <div id="app"></div>
    </div>
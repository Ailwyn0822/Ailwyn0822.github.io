<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php
    include 'meta.php';
    // icon (使用png或ico)
    $icon_size = array('', 'sizes="57x57"', 'sizes="72x72"', 'sizes="114x114"', 'sizes="144x144"');
    foreach ($icon_size as $value) {
        echo '<link rel="apple-touch-icon" ' . $value . ' href="images/icon.png" />';
    }
    ?>
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />

    <!-- Font Awesome 4.7 -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/font-awesome.min.css"> -->

    <!-- Font Awesome 5 如果不用before去引入icon CSS可以不用引入 -->
    <link rel="stylesheet" type="text/css" href="css/plugin/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/plugin/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/plugin/owl.theme.default.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/plugin/animate.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/web-style.min.css?<?= filemtime("./css/web-style.min.css") ?>">
    <link rel="stylesheet" type="text/css" href="css/plugin/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="css/plugin/lightcase.css">



    <!-- 引入字體 -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet"> -->
</head>
<?php
    if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
        extract($_SESSION['s_user']);
        $html_account=' <li><a href="index.php?pg=donhang">Mr '.$user.'</a></li>
        <button><li><a href="index.php?pg=logout">Thoát</a></li></button> ';

    }else{
        $html_account=' <li><a href="index.php?pg=dangnhap"><i class="fa-solid fa-user"></i></a></li>
        <button><li><a href="index.php?pg=dangky">Đăng ký</a></li></button> ';
    }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Cflash Shop</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Bootie Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom-Files -->
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="public/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
<link href="public/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <!-- //Fonts -->
    <link rel="website icon" type="png" href="public/images/logo.jpg">

</head>

<body>

    <!-- mian-content -->
    <div class="main-banner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                        <h1> <a href="index.php">Cflash</a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li class="active"><a href="index.php?pg=home">Trang chủ</a></li>
                        <li><a href="index.php?pg=about">Giới thiệu</a></li>
                        <li><a href="index.php?pg=blog">Sản phẩm</a></li>
                        <!-- <li><a href="index.php?pg=dangnhap"><i class="fa-solid fa-user"></i></a></li>
                        <button><li><a href="index.php?pg=dangky">login</a></li></button> -->
                        <?=$html_account?>
                        <li><a href="index.php?pg=viewcart"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
   
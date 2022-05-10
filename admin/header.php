<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục sản phẩm</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./img/meo.jpg">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
</head>

<style>
   /* .navbar,.navbar-nav a{
    color: #fff;
   } */

    .d-flex {
        display: flex;
    }

    .navbar-brand--img {
        height: 30px;
    }

    .navbar-brand i {
        padding-top: 6px;
    }

    .navbar-brand p {
        margin-left: 6px;
    }

    .nav-item {
        align-items: center;
    }

    .nav-item{
        text-align: right;
    }   
    .dropdown-menu{
        display: none;
    }

</style>

<body>
    <header class="navbar navbar-expand sticky-top bg-primary navbar-dark flex-column flex-md-row bd-navbar">
        <a class="navbar-brand mr-0 mr-md-2" href="#" style="padding-left:12px; display: flex ; align-items: center; text-align: center;">
            <i class="fa fa-user" style="color: #fff"></i>
            <p style="font-size: 16px; text-align: center; padding-top:16px; color: #fff">welcome,<span style="font-weight: bold; font-size:18px; color: #fff">&nbspChu Anh</span></p>
        </a>

        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">

            <li class="nav-item dropdown">
                <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user" style="color: #fff"></i>
                    Chu Anh
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                    <a class="dropdown-item" href="https://github.com/mazipan/bootstrap4-admin-dashboard-template">
                        <i class="fa fa-github pr-2"></i> Github
                    </a>
                    <a class="dropdown-item" href="https://github.com/mazipan/">
                        <i class="fa fa-user-o pr-2"></i> Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-cog pr-2"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-power-off pr-2"></i> Logout
                    </a>
                </div>
            </li>

        </ul>

    </header>
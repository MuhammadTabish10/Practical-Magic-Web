<?php
session_start();
if (isset($_SESSION['timeout']) && $_SESSION['timeout'] + (10*60) < time()) {
    // session timed out
    session_unset();
    session_destroy();
    header("location:./login/login.php"); 
}
if(empty($_SESSION['login']) || $_SESSION['login'] == ''){
    header("location:./login/login.php"); 
    die();
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Home Panel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
</head>
<style>
    .sidebar-nav ul .sidebar-item.selected>.sidebar-link{
        background: linear-gradient(to right, #1f8554 , #a47e0a);
    }

    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #1a9bfc;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #1a9bfc;
    }

    div {
        border-radius: 5px;
        /* background-color: #f2f2f2; */
        /* padding: 20px; */
    }
</style>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index_panal.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <a href="../../index.php">
                                <img src="../assets/images/Practical--Magic-.png" alt="homepage" class="dark-logo" style="padding-left: 22px;"/> 
                            </a>
                        </b>
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-magnify me-1"></i> <span
                                    class="font-16">Search</span></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <a class="log" href="./login/logout.php">
                            <style>
                                .log_out{
                                    color: black;
                                    font-weight: 500;
                                    font-size: 18px;
                                    padding-top: 24px;
                                }
                            </style>
                            <div class="log_out">Logout</div>
                        </a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/images/users/profile.png" alt="user" class="rounded-circle"
                                    width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>
                                    Inbox</a>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index_panal.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="home_panal.php" aria-expanded="false"><i class="fa fa-home" aria-hidden="true"></i><span class="hide-menu">Home</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="about_panal.php" aria-expanded="false"><i
                                    class="mdi mdi-account-network"></i><span class="hide-menu">About</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="product_panal.php" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                    class="hide-menu">Product</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="contactus_panal.php" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                    class="hide-menu">Contact US</span></a></li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                                <li class="breadcrumb-item"><a href="index_panal.php" class="link"><i
                                            class="mdi mdi-home-outline fs-4"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ol>
                        </nav>
                        <h1 class="mb-0 fw-bold">Home Form</h1>
                    </div>
                    <div class="col-6">
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <div class="card-body">

                                <form action="../../db/checkdata.php" method="post">
                                    <label for="fname">Heading 1</label>
                                    <input type="text" id="fname" name="heading1" >

                                    <label for="lname">Description 1</label>
                                    <input type="text" id="lname" name="desc1" >

                                    <label for="fname">Image 1</label>
                                    <input type="text" id="fname" name="img1" >

                                    <label for="fname">Image 1 text</label>
                                    <input type="text" id="fname" name="img1text" >

                                    <label for="fname">Image 2</label>
                                    <input type="text" id="fname" name="img2" >

                                    <label for="fname">Image 2 Description</label>
                                    <input type="text" id="fname" name="img2text" >

                                    <label for="fname">Image 3</label>
                                    <input type="text" id="fname" name="img3" >

                                    <label for="fname">Image 3 Description</label>
                                    <input type="text" id="fname" name="img3text" >

                                    <label for="fname">Image 4</label>
                                    <input type="text" id="fname" name="img4" >

                                    <label for="fname">Image 4 Description</label>
                                    <input type="text" id="fname" name="img4text" >
                                    
                                    <label for="fname">Image 5</label>
                                    <input type="text" id="fname" name="img5" >

                                    <label for="fname">Image 5 Description</label>
                                    <input type="text" id="fname" name="img5text" >

                                    <label for="fname">Image 6</label>
                                    <input type="text" id="fname" name="img6" >

                                    <label for="fname">Image 6 Description</label>
                                    <input type="text" id="fname" name="img6text" >

                                    <label for="fname">Top Seller img 1</label>
                                    <input type="text" id="fname" name="topimg1" >

                                    <label for="fname">Top Seller 1 Description</label>
                                    <input type="text" id="fname" name="topdesc1" >

                                    <label for="fname">Top Seller img 2</label>
                                    <input type="text" id="fname" name="topimg2" >

                                    <label for="fname">Top Seller 2 Description</label>
                                    <input type="text" id="fname" name="topdesc2" >

                                    <label for="fname">Top Seller img 3</label>
                                    <input type="text" id="fname" name="topimg3" >

                                    <label for="fname">Top Seller 3 Description</label>
                                    <input type="text" id="fname" name="topdesc3" >

                                    <label for="fname">Top Seller img 4</label>
                                    <input type="text" id="fname" name="topimg4" >

                                    <label for="fname">Top Seller 4 Description</label>
                                    <input type="text" id="fname" name="topdesc4" >

                                    <label for="fname">Top Seller img 5</label>
                                    <input type="text" id="fname" name="topimg5" >

                                    <label for="fname">Top Seller 5 Description</label>
                                    <input type="text" id="fname" name="topdesc5" >

                                    <label for="fname">Top Seller img 6</label>
                                    <input type="text" id="fname" name="topimg6" >

                                    <label for="fname">Top Seller 6 Description</label>
                                    <input type="text" id="fname" name="topdesc6" >

                                    <label for="fname">Top Seller img 7</label>
                                    <input type="text" id="fname" name="topimg7" >

                                    <label for="fname">Top Seller 7 Description</label>
                                    <input type="text" id="fname" name="topdesc7" >

                                    <label for="fname">Top Seller img 8</label>
                                    <input type="text" id="fname" name="topimg8" >

                                    <label for="fname">Top Seller 8 Description</label>
                                    <input type="text" id="fname" name="topdesc8" >

                                    <label for="fname">Top Seller Price 1</label>
                                    <input type="text" id="fname" name="topprice1" >

                                    <label for="fname">Top Seller Price 2</label>
                                    <input type="text" id="fname" name="topprice2" >

                                    <label for="fname">Top Seller Price 3</label>
                                    <input type="text" id="fname" name="topprice3" >

                                    <label for="fname">Top Seller Price 4</label>
                                    <input type="text" id="fname" name="topprice4" >

                                    <label for="fname">Top Seller Price 5</label>
                                    <input type="text" id="fname" name="topprice5" >

                                    <label for="fname">Top Seller Price 6</label>
                                    <input type="text" id="fname" name="topprice6" >

                                    <label for="fname">Top Seller Price 7</label>
                                    <input type="text" id="fname" name="topprice7" >

                                    <label for="fname">Top Seller Price 8</label>
                                    <input type="text" id="fname" name="topprice8" >

                                    <label for="fname">CBD Main Title</label>
                                    <input type="text" id="fname" name="CBDmaintitle" >

                                    <label for="fname">CBD Heading 1</label>
                                    <input type="text" id="fname" name="CBDhead1" >

                                    <label for="fname">CBD Heading 2</label>
                                    <input type="text" id="fname" name="CBDhead2" >

                                    <label for="fname">CBD Description 1</label>
                                    <input type="text" id="fname" name="CBDdesc1" >

                                    <label for="fname">CBD Description 2</label>
                                    <input type="text" id="fname" name="CBDdesc2" >   
                                
                                    <input type="submit" name="HomeSubmit" value="Submit">
                                </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Flexy Admin. Designed and Developed by <a
                    href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>
</body>

</html>
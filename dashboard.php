<?php
    include 'conn.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="restaurant" content="Hau Nguyen">
    <title>Restautant Billing System</title>
    <link href="assets/css/font-face.css' %}" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="assets/css/theme.css" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="../">
                            <h1>Restaurant Billing System</h1>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="inventory.php">
                                <i class="fas fa-table"></i>Inventory</a>
                        </li>
                        <li>
                            <a href="Product.php">
                                <i class="fas fa-box"></i>Product</a>
                        </li>
                        <li>
                            <a href="billing.php">
                                <i class="fas fa-shopping-cart"></i>Billing</a>
                        </li>

                        <li>
                            <a href="logout.php">
                                <i class="fa fa-power-off"></i>logout</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="dashboard.php">
                    <h3>Restaurant Billing</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="inventory.php">
                                <i class="fas fa-table"></i>Inventory</a>
                        </li>
                        <li>
                            <a href="Product.php">
                                <i class="fas fa-box"></i>Product</a>
                        </li>
                        <li>
                            <a href="billing.php">
                                <i class="fas fa-shopping-cart"></i>Billing</a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="fa fa-power-off"></i>logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-4 col-md-8">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Product</h5>
                                            <span class="h1 font-weight-bold mb-0"><?php 
                                                $sql="SELECT count(product_name) AS total FROM Product";
                                                $result=mysqli_query($conn, $sql);
                                                $values=mysqli_fetch_assoc($result);
                                                $num_rows=$values['total'];
                                                echo $num_rows;
                                                ?></span>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-8">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Category</h5>
                                            <span class="h1 font-weight-bold mb-0"><?php 
                                                $sql="SELECT count(category) AS total FROM Product";
                                                $result=mysqli_query($conn, $sql);
                                                $values=mysqli_fetch_assoc($result);
                                                $num_rows=$values['total'];
                                                echo $num_rows;
                                                ?></span>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-8">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                                            <span class="h1 font-weight-bold mb-0">0</span>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid mt--6">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card bg-default">
                                        <div class="card-header bg-transparent">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="text-dark text-uppercase ls-1 mb-1">Sales Overview</h6>
                                                </div>
                                                <div class="col">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © Kamrul</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery-3.2.1.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="assets/vendor/slick/slick.min.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/animsition/animsition.min.js"></script>
    <script src="assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
</body>
</html>
